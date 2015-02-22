<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Company extends CI_Controller{

		public function __construct() 
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model('m_company');
			//$this->check_is_validated();
		}

		public function index() 
		{
			$this->get_company();
			//$this->load->view('welcome_message');
			//$this->load->view('company/company_view');
		}

		//public function create_company() 
		//{
			//$isi['isi'] = 'company/create_company_view';
			//$isi['confirm'] = $this->session->userdata('notification');
			//$this->session->set_userdata('notification', null);
		//	$this->load->view('company/create_company_view');
		//}

	/** input_company()
	*/
	function input_company() {
		//$cek = $this->validation();

		//if ($cek == TRUE) {
			$this->m_company->insert_company();	
			$this->load->view('company/create_company_view');
			//redirect('company/create_company_view');
		//}
		
		// $this->create_company();
	}

	function search_company($under = null) {
		$nama_company = humanize($under);
		//$isi['query'] = $this->m_company->get_cities($nama_supplier);
		//$isi['isi'] = 'supplier/search';
		//$this->load->view('');
	}

	function get_company() {
		$isi['isi'] = 'company/company_view';
		$isi['company_name'] = $this->m_company->get_company_name();
		
		//$config = array();
		//$config["base_url"] = base_url() . "index.php/c_company/get_company";
		//$config["total_rows"] = $this->m_company->company_count();
		//$config["per_page"] = 10;
		//$config["uri_segment"] = 3;
		//$this->pagination->initialize($config);
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$isi['query'] = $this->m_company->get_list_company();
		//$isi['links'] = $this->pagination->create_links();
		$isi['confirm'] = $this->session->userdata('notification');
		$this->session->set_userdata('notification', null);
		$this->load->view('company/company_view', $isi);
	}


	
}
?>