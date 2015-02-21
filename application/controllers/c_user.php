<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model('m_user');
		}

		public function index() {
			list();
		}

		function list() {
			$config = array();
			$config["base_url"] = base_url() . "index.php/user/list";
			$config["total_rows"] = $this->m_user->user_count();
			$config["per_page"] = 10;
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);

			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

			$isi['query'] = $this->m_user->get_list_user($config["per_page"], $page);
			$isi['links'] = $this->pagination->create_links();
			$isi['nama_pengguna'] = $this->m_user->get_list_username();
			$isi['confirm'] = $this->session->userdata('notification');
			$this->session->set_userdata('notification', null);
			$isi['isi'] = 'user/lihat_user';
			$this->load->view('template/tampilan', $isi);
		}
	}
?>