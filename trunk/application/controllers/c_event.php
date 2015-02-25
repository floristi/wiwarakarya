<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_event extends CI_Controller{

	public function __construct() 
	{
		parent::__construct();
	}

	public function index() 
	{
		$data['events'] = $this->m_event->get_all_event();
		print_r($data['events']);
		$data['main_content'] = 'event/event_view';
		$this->load->view('layout/template', $data);
	}


	function create_event() {
		if ($this->input->post('submit')) {
			$this->m_event->insert_event();
			redirect('c_event');
		}
		$isi['companies'] = $this->m_company->get_list_company();
		$isi['main_content'] = 'event/create_event_view';
		$this->load->view('layout/template', $isi);
	}

	function edit_event($id) {
		if ($this->input->post('submit')) {
			$this->m_event->edit_event($id);
			redirect('c_event');
		}
		$isi['event'] = $this->m_event->get_data_event($id);
		$isi['companies'] = $this->m_company->get_list_company();
		$isi['main_content'] = 'event/edit_event_view';
		$this->load->view('layout/template', $isi);
	}

	function delete_event($id) {
		if ($id == null) {
            return;
		}
		$this->m_event->delete_event($id);
		redirect('c_event');
	}
}
?>