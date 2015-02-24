<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Login extends CI_Controller {

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
	
	public function process(){
		$logged_in = true;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$remember = $this->input->post('remember');
		
		$this->load->model('m_user');
		
		$data['data'] = $this->m_user->login($username, $password);
		
		//echo $data[0]->name;
		
		$this->m_user->login($username, $password);
		
		
		$session_data = array(
                        'username' => $username,
                        'nama' => $data['data'][0]->name,
                        'logged_in' => $logged_in
                    );
					
		
		$this->session->set_userdata($session_data);
		$this->load->view('welcome_message', $data);
		
	}
	
	public function logout(){
		$this->session->sess_destroy();
		$this->load->view('welcome_message');
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */