<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_User extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['users'] = $this->m_user->get_all_applicants();
		$data['main_content'] = 'user/list';
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

	public function edit($id) {
		if ($id === null) {
			redirect('c_user');
		}
	}

	public function delete($id) {
		if ($id === null) {
			redirect('c_user');
		}
		$this->m_user->delete_applicant($id);	
		redirect('c_user');
	}

	public function login() {
		if ($this->input->post('submit')) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->m_user->login($username, $password);

			if ($role == 'ADMIN' || $role == 'APPLICANT') {
				$data = array(
					'username' => $username,
					'is_logged_in' => true,
					'role' => $role
				);
				$this->session->set_userdata($data);
			}
		}
		redirect('navigation');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('navigation');
	}
}
?>