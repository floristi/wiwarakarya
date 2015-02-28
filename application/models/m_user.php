<?php

class M_User extends CI_Model {

    var $cv_path;
    var $cv_path_url;

    public function __construct() {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Jakarta");
    }
    
    function get_all_applicants() {
        $query = "SELECT u.id, u.username, u.password, a.name, a.last_education, a.cv_path, a.pob, a.dob ".
                "FROM users u JOIN applicants a ON u.role = 'APPLICANT' AND u.applicant_id = a.id";
        $result = $this->db->query($query)->result();
        $ret = array();
        foreach ($result as $data) {
            $ret[] = $data;
        }
        return $ret;
    }

    function insert_applicant($data) {
        $this->db->trans_start();
       // $foto = $this->input->post('upload');

        $db_data_applicant = array(
            'name'           => $data['fullname'],
            'last_education' => $data['last_education'],
            'cv_path'        => base_url().'uploads/'.$cv_file_name,
            'pob'            => $data['pob'],
            'dob'            => date($data['dob']),
            'is_premium'     => false
        );

        if ($this->upload->data('cv')) {
            $cv_file_name = $this->upload_cv($data['username']);
            $db_data_applicant['cv_path'] = base_url().'uploads/'.$cv_file_name;
        }

        $this->db->insert('applicants', $db_data_applicant);
        $applicant_id = $this->db->insert_id();

        $db_data_user = array(
            'username'      => $data['username'],
            'password'      => $data['password'],
            'status'        => false,
            'role'          => 'APPLICANT',
            'applicant_id'  => $applicant_id
        );
        $this->db->insert('users', $db_data_user);
        
        $this->db->trans_complete();
    }

    function update_applicant($id, $data) {
        $this->db->trans_start();
        // $foto = $this->input->post('upload');

        $db_data_user = array(
            'password'      => $data['password']
        );
        $this->db->where('id', $id);
        $this->db->update('users', $db_data_user);

        $this->db->from('users');
        $this->db->where('id', $id);

        $applicant_id = $this->db->get()->row()->applicant_id;

        $db_data_applicant = array(
            'name'           => $data['fullname'],
            'last_education' => $data['last_education'],
            'pob'            => $data['pob'],
            'dob'            => date($data['dob'])
        );

        if ($this->upload->data('cv')) {
            $cv_file_name = $this->upload_cv($data['username']);
            $db_data_applicant['cv_path'] = base_url().'uploads/'.$cv_file_name;
        }

        $this->db->where('id', $applicant_id);
        $this->db->update('applicants', $db_data_applicant);
        
        $this->db->trans_complete();
    }

    function delete_applicant($id) {
        $this->db->trans_start();

        $this->db->where('id', $id);
        $user = $this->db->get('users');
        $applicant_id = $user->result_array()[0]['applicant_id'];

        $this->db->where('id', $id);
        $this->db->delete('users');

        $this->db->where('id', $applicant_id);
        $this->db->delete('applicants');

        $this->db->trans_complete();
    }
	
	function login($username, $password){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();

        $role = 'NOT_REGISTERED';

        if ($query->num_rows() > 0) {
            $role = $query->row()->role;
        }
		
		return $role;
	}

    function upload_cv($username) {
        $config = array(
            'allowed_types' => 'pdf',
            'upload_path' => './uploads/',
            'max_size' => 2000,
            'file_name' => 'cv_'.$username,
            'overwrite' => true
        );

        $this->upload->initialize($config);
        $this->upload->do_upload('cv');
        $cv_data = $this->upload->data('cv');
        echo $this->upload->display_errors();

        return $cv_data['file_name'];
    }

    function get_profile($username) {
        $query = "SELECT u.id, u.username, u.password, a.name, a.last_education, a.cv_path, a.pob, a.dob ".
                "FROM users u JOIN applicants a ON u.role = 'APPLICANT' AND u.applicant_id = a.id " .
                "WHERE u.username = '" . $username . "'";
        $result = $this->db->query($query)->row();
        return $result;
    }

    function get_profile_by_id($id){
        $query = "SELECT u.id, u.username, u.password, a.name, a.last_education, a.cv_path, a.pob, a.dob ".
                "FROM users u JOIN applicants a ON u.role = 'APPLICANT' AND u.applicant_id = a.id " .
                "WHERE u.id = '" . $id . "'";
        $result = $this->db->query($query)->row();
        return $result;
    }

}

?>