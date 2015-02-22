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
		//$this->get_event();
	}


	function create_event() {
		$isi['isi'] = 'event/create_event_view';
		if ($this->input->post('submit')) {
			$this->m_event->insert_event();
			redirect('c_event');
		}
		$this->load->view('event/create_event_view', $isi);
	}
}
?>