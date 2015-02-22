<?php

class M_company extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insert_company(){
        $name = $this->input->post('name');
        $city = $this->input->post('city');

        $cek = $this->db->where('name', $name)->where('city', $city)->get('wiwarakarya.companies')->num_rows();
        if($cek > 0) {
            $confirm = "Name <b>". $name . "</b> already exsist!";
            $this->session->set_userdata('notification', $confirm);
            return;
        }

        $data = array (
            'name' => ucwords($name), 
            'address' => ucfirst($this->input->post('address')),
            'city' => ucwords($this->input->post('city')),
            'phone' => $this->input->post('phone'),
            'contact_name' => ucwords($this->input->post('contact_name')),
            'email' => $this->input->post('email'),
            'description' => $this->input->post('description'),
            'web' => $this->input->post('web'),
            'status' => 'TRUE',
            'photo_url' => ''
        );

        if ($this->db->insert('wiwarakarya.companies', $data)) {
            $confirm = "Company <b>". $name . "</b> successfully added";
            $this->session->set_userdata('notification', $confirm);
            return;
        }

        $confirm = "Company <b>". $name . "</b> add error!!!";
        $this->session->set_userdata('notification', $confirm);
        return;

    }

    function get_company_name() {
        $this->db->select('id, name')->order_by('name asc');
        $query = $this->db->get('wiwarakarya.companies');
        return $query->result();
    }

    /** supplier_count()
    */
    function company_count(){
        $this->db->from('wiwarakarya.companies');
        return $this->db->count_all_results();
    }

    function get_list_company() {
        $this->db->order_by('name asc, city asc');
      //  $this->db->limit($limit, $start);
        $query = $this->db->get('wiwarakarya.companies');
        return $query->result();
    }
    
    

}