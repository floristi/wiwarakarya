<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Company extends CI_Controller{

	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('url','form'));
		$this->load->model('m_company');
	}

	public function index() 
	{
		$this->get_company();
	}


	function create_company() {
		$isi['isi'] = 'company/create_company_view';
		if ($this->input->post('submit')) {
			$this->m_company->insert_company();
			redirect('c_company');
		}
		$this->load->view('company/create_company_view', $isi);
	}

	function search_company($under = null) {
		$nama_company = humanize($under);
	}

	function get_company() {
		$isi['isi'] = 'company/company_view';
		$isi['company_name'] = $this->m_company->get_company_name();
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$isi['query'] = $this->m_company->get_list_company();
		$isi['confirm'] = $this->session->userdata('notification');
		$this->session->set_userdata('notification', null);
		$this->load->view('company/company_view', $isi);
	}

	function process($id = null) {
	    if(isset($_POST["update"])) {
	    	$this->m_company->update_data_company($id);
	    } else if(isset($_POST["delete"])) {
	    	$this->m_company->delete_company($id);
	    } else if(isset($_POST["activate"])) {
	    	$this->m_company->company_activation($id);
	    }
			
		redirect('c_company/get_company');	
	}
	
	function data_company($id = null) {
		$isi['query'] = $this->m_company->get_data_company($id);
		$isi['isi'] = 'company/update_company';
		$this->load->view('company/update_company', $isi);
	}

	/** activate()
	*/
	function activate($id = null) {
		$this->m_company->company_activation($id);
		redirect('c_company/get_company');
	}
	
}
?>