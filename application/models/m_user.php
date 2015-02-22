<?php

class M_User extends CI_Model {
    
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

        $db_data_applicant = array(
            'name'           => $data['fullname'],
            'last_education' => $data['last_education'],
            'cv_path'        => $data['cv_path'],
            'pob'            => $data['pob'],
            'dob'            => $data['dob']
        );

        $this->db->insert('applicants', $db_data_applicant);
        $applicant_id = $this->db->insert_id();

        $db_data_user = array(
            'username'      => $data['username'],
            'password'      => $data['password'],
            'status'        => $data['status'],
            'role'          => 'APPLICANT',
            'applicant_id'  => $applicant_id
        );
        $this->db->insert('users', $db_data_user);
        
        $this->db->trans_complete();
    }

}

?>