<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Jobs extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->cv_path = realpath(APPPATH . '../uploads/cv');
        $this->cv_path_url = base_url() . 'uploads/cv/';
    }
    
    function get_all_jobs() {
        $query = "SELECT u.id, u.username, u.password, a.name, a.last_education, a.cv_path, a.pob, a.dob ".
                "FROM jobs j JOIN companies c ON j.";
        $result = $this->db->query($query)->result();
        $ret = array();
        foreach ($result as $data) {
            $ret[] = $data;
        }
        return $ret;
    }

    function create_job() {
    	$this->db->trans_start();

    	$db_data_job = array(
			'name'				=> $this->input->post('name'),
			'description' 		=> $this->input->post('description'),
			'position'			=> $this->input->post('position'),
			'position_category' => $this->input->post('position_category'),
			'due_date'    		=> $this->input->post('due-year').'-'.
								   $this->input->post('due-month').'-'.
								   $this->input->post('due-day').' '.
								   $this->input->post('due-hour').' '.
								   $this->input->post('due-minute'),
			'major'				=> $this->input->post('major'),
			'last_education'	=> $this->input->post('last_education'),
			'salary'			=> $this->input->post('salary'),
			'tnc'				=> $this->input->post('tnc'),
			'created_by'		=> $this->input->post('created_by')
    	);

    	$this->db->insert('jobs', $db_data_job);
    	$this->db->trans_complete();
    }

    function update_job($id) {

        $this->db->trans_start();

        // $db_data_job =

        $this->db->trans_complete();

    }
}
?>