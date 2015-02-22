<?php

class m_event extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_data_event($id) {
        return  $this->db->get_where('wiwarakarya.events', array('id' => $id))->row();
    }

    function insert_event(){
        $name = $this->input->post('name');
       
        $cek = $this->db->where('name', $name)->get('wiwarakarya.events')->num_rows();
        if($cek > 0) {
            $confirm = "Event <b>". $name . "</b> already exsist!";
            $this->session->set_userdata('notification', $confirm);
            return;
        }

        $nama_company = $this->input->post('name');
        $company = null;
        
        if($nama_company != null) {
            $this->db->where('name', $nama_company);
            $com = $this->db->get('wiwarakarya.companies');
            $id_company = $com->row()->id;
            
            if($com->num_rows() <= 0) {
                $confirm = "Company <b>". $nama_company. "</b> tidak terdapat dalam database supplier!";
                $this->session->set_userdata('notification', $confirm);
                return;
            }
            
            $company = $id_company;
        }

        $data = array (
            'name' => ucwords($name), 
            'description' => ucfirst($this->input->post('description')),
            'location' => ucwords($this->input->post('location')),
            'quota' => $this->input->post('quota'),
            'speaker' => ucwords($this->input->post('speaker')),
            'price' => $this->input->post('price'),
            'created_by' => $company
            //'status' => 'TRUE'
            
        );

        if ($this->db->insert('wiwarakarya.events', $data)) {
            $confirm = "Event <b>". $name . "</b> successfully added";
            $this->session->set_userdata('notification', $confirm);
            return;
        }

        $confirm = "Event<b>". $name . "</b> add error!!!";
        $this->session->set_userdata('notification', $confirm);
        return;

    }

}
?>