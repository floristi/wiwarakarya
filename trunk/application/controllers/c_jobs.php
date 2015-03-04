<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_jobs extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['jobs'] = $this->m_jobs->get_all_jobs();
		$data['companies'] = $this->m_company->get_list_company();
		$data['main_content'] = 'job/list';
		$this->load->view('layout/template', $data);
	}

	public function create() {
		if ($this->input->post('submit')) {
			$this->m_jobs->create_job();
			redirect('c_jobs');
		}

		$data['companies'] = $this->m_company->get_list_company();
		$data['main_content'] = 'job/create';
		$this->load->view('layout/template', $data);
	}

	public function edit($id) {
		if ($this->input->post('submit')) {
			$this->m_jobs->update_job($id);
			redirect('c_jobs');
		}

        $data['job'] = $this->m_jobs->get_job($id);
		$data['companies'] = $this->m_company->get_list_company();
		$data['main_content'] = 'job/edit';
		$this->load->view('layout/template', $data);
	}

	public function delete() {
		if ($this->input->post('id')) {
 			$this->m_jobs->delete_job($id);
 		}
	}

	public function set_job_status() {
		if ($this->input->post($id)) {
			$this->m_jobs->set_job_status($this->input->post('id'), $this->input->post('status'));
		}
	}

	public function apply($id) {
		if ($this->input->post('submit')) {
			$this->m_jobs->apply_job($id);
			redirect('c_jobs');
		}
		$data['job'] = $this->m_jobs->get_job($id);
		$data['companies'] = $this->m_company->get_list_company();
		$data['main_content'] = 'job/apply';
		$this->load->view('layout/template', $data);
	}

	
	
	public function list_applied_jobs() {
		return $this->m_jobs->get_applied_jobs();
	}

}