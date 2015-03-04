<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_User extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['users'] = $this->m_user->get_all_applicants();
		$data['main_content'] = 'user/list';
		$this->session->set_flashdata('notification-type', 'success');
		$this->session->set_flashdata('notification-message', 'test notification');
		$this->load->view('layout/template', $data);
	}

	public function create() {
		if ($this->input->post('submit')) {
			$user_data = array(
				'username'       => $this->input->post('username'),
				'password'       => $this->input->post('password'),
				'fullname'       => $this->input->post('fullname'),
				'last_education' => $this->input->post('last_education'),
				'pob'            => $this->input->post('pob'),
				'dob'            => $this->input->post('dob-year').'-'.
									$this->input->post('dob-month').'-'.
									$this->input->post('dob-date')
			);
			$this->m_user->insert_applicant($user_data);
			redirect('c_user');
		}

		$data['main_content'] = 'user/add_edit';
		$this->load->view('layout/template', $data);
	}

	public function update($id) {
		if ($id == null) {
			redirect('c_user');
		}
		if ($this->input->post('submit')) {
			$user_data = array(
				'username'       => $this->input->post('username'),
				'password'       => $this->input->post('password'),
				'fullname'       => $this->input->post('fullname'),
				'last_education' => $this->input->post('last_education'),
				'pob'            => $this->input->post('pob'),
				'dob'            => $this->input->post('dob-year').'-'.
									$this->input->post('dob-month').'-'.
									$this->input->post('dob-date')
			);
			$this->m_user->update_applicant($id, $user_data);
			redirect('c_user');
		}

		$data['user'] = $this->m_user->get_profile_by_id($id);

		$data['main_content'] = 'user/edit_profile';
		$this->load->view('layout/template', $data);
	}

	public function delete($id) {
		if ($this->input->post('id')) {
			$this->m_user->delete_applicant($this->input->post('id'));	
		}
	}

	public function login() {
		if ($this->input->post('submit')) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->m_user->login($username, $password);
		}
		redirect('navigation');
	}
	
	

	public function detail($username) {
		$data['user'] = $this->m_user->get_profile($username);
		$data['main_content'] = 'user/detail';
		$this->load->view('layout/template', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('navigation');
	}
}
?>