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

	public function index() {
		$data['events'] = $this->m_event->get_all_event();
		$data['jobs'] = $this->m_jobs->get_all_jobs();
		$data['cities'] = $this->m_company->get_cities();
		$this->load->view('welcome_message', $data);
	}

	public function search() {
		if ($this->input->post('submit')) {
			$location = $this->input->post('location');
			$salary = $this->input->post('salary');

			if ($location == "")
				$location = null;
			switch ($salary) {
				case 0:
					$salary_from = -1;
					$salary_to = -1;
					break;
				case 1:
					echo 'case 1';
					$salary_from = 0;
					$salary_to = 3000000;
					break;
				case 2:
					$salary_from = 3000000;
					$salary_to = 5000000;
					break;
				case 3:
					$salary_from = 5000000;
					$salary_to = 7000000;
					break;
				case 4:
					$salary_from = 7000000;
					$salary_to = 10000000;
					break;
				case 5:
					$salary_from = 10000000;
					$salary_to = PHP_INT_MAX;
					break;
			}
			$data['jobs'] = $this->m_jobs->search_by_location_and_salary($location, $salary_from, $salary_to);
		}
		$data['events'] = $this->m_event->get_all_event();
		$data['cities'] = $this->m_company->get_cities();
		$this->load->view('welcome_message', $data);

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