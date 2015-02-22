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
            'cv_path'             => null,
            'pob'            => $data['pob'],
            'dob'            => date($data['dob']),
            'is_premium'     => false
        );  

        echo $db_data_applicant['dob'];

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

}

?>