<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigation extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('session');
    }
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function info_career()
	{
		$this->load->view('info_career/career_view');
	}
	
	public function event()
	{
		$this->load->view('event/event_view');
	}
	
	public function payment()
	{
		$this->load->view('payment/payment_view');
	}
	
	public function gallery()
	{
		$this->load->view('gallery/gallery_view');
	}
	
	public function about_us()
	{
		$this->load->view('about/about_us_view');
	}
	
	public function registration()
	{
		$this->load->view('user/registration');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */