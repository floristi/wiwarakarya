<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_event extends CI_Controller{

	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('url','form'));
		$this->load->model('m_event');
	}

	public function index() 
	{
		$data['main_content'] = 'event/event_view';
		$this->load->view('layout/template', $data);
	}


	function create_event() {
		if ($this->input->post('submit')) {
			$this->m_event->insert_event();
			redirect('c_event');
		}
		$isi['main_content'] = 'event/create_event_view';
		$this->load->view('layout/template', $isi);
	}
}
?>