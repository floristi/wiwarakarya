<?php

class M_company extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insert_company($data) {
        $companyData = null;
        $userData = null;

        // fill company & user data

        $this->db->insert('users', $userData);
    }

}