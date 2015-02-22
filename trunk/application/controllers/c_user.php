<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_User extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['users'] = $this->m_user->get_all_applicants();
		$this->load->view('user/list', $data);
	}

	public function create() {
		if ($this->input->post('submit')) {
			$user_data = array(
				'username'       => $this->input->post('username'),
				'password'       => $this->input->post('password'),
				'fullname'       => $this->input->post('fullname'),
				'last_education' => $this->input->post('last_education'),
				'pob'            => $this->input->post('pob'),
				'dob'            => $this->input->post('dob-day').$this->input->post('dob-month').$this->input->post('dob-year'),
				'cv_path'		 => $this->input->post('cv_path'),
				'status'	     => 1
			);
			$this->m_user->insert_applicant($user_data);
			redirect('c_user');
		}

		$this->load->view('user/add_edit');
	}

	public function edit($id) {
		if ($id === null) {
			redirect('c_user');
		}
	}
}
?>