<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Jobs extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    function get_all_jobs() {
        $query = "SELECT j.id, j.name, j.position, j.position_category, j.due_date, j.major, j.last_education, j.salary, j.tnc, c.id as company_id, c.name as company_name ".
                 "FROM jobs j JOIN companies c ON j.created_by = c.id";
        return $this->db->query($query)->result();
    }

    function get_job($id) {
        $this->db->where('id', $id);
        return $this->db->get('jobs')->row();
    }

    function create_job() {
    	$this->db->trans_start();

    	$db_data_job = array(
			'name'				=> $this->input->post('name'),
			'position'			=> $this->input->post('position'),
			'position_category' => $this->input->post('position_category'),
			'due_date'    		=> $this->input->post('due-year').'-'.
								   $this->input->post('due-month').'-'.
								   $this->input->post('due-day').' '.
								   $this->input->post('due-hour').':'.
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

        $db_data_job = array(
            'name'              => $this->input->post('name'),
            'position'          => $this->input->post('position'),
            'position_category' => $this->input->post('position_category'),
            'due_date'          => $this->input->post('due-year').'-'.
                                   $this->input->post('due-month').'-'.
                                   $this->input->post('due-day').' '.
                                   $this->input->post('due-hour').':'.
                                   $this->input->post('due-minute'),
            'major'             => $this->input->post('major'),
            'last_education'    => $this->input->post('last_education'),
            'salary'            => $this->input->post('salary'),
            'tnc'               => $this->input->post('tnc'),
            'created_by'        => $this->input->post('created_by')
        );

        $this->db->where('id', $id);
        $this->db->update('jobs', $db_data_job);

        $this->db->trans_complete();
    }

    function delete_job($id) {
        $this->db->where('id', $id);
        $this->db->delete('jobs');
    }

    function set_status_job($id, $status) {
        $this->db->where('id', $id);
        $this->db->update('jobs', array('jobs', array('status' => $status)));
    }

    function apply_job($id) {
        $db_data_application = array(
            'applicant_id' => $this->session->userdata('id'),
            'job_id' => $id,
            'status' => false,
            'created_at' => date('Y-m-d HH:MM')
        );

        $this->db->insert('applications', $db_data_application);
    }

    function get_applied_jobs() {
        $id = $this->session->userdata('id');

        $query = "SELECT j.id, ".
                        "j.name, ".
                        "j.position, ".
                        "j.position_category, ".
                        "j.due_date, ".
                        "j.major, ".
                        "j.last_education, ".
                        "j.salary, ".
                        "j.tnc, ".
                        "c.id as company_id, ".
                        "c.name as company_name ".
                 "FROM applications a ".
                 "JOIN jobs j ON a.job_id = j.id ".
                 "JOIN users u ON a.applicant_id = u.id ".
                 "JOIN companies c ON j.created_by = c.id ".
                 "WHERE a.applicant_id = " . $id;

        return $this->db->query($query)->result();       
    }
}