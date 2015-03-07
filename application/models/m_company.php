<?php

class M_company extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_data_company($id) {
        return  $this->db->get_where('wiwarakarya.companies', array('id' => $id))->row();
    }

    function insert_company(){
        $name = $this->input->post('name');

        $cek = $this->db->where('name', $name)->get('wiwarakarya.companies')->num_rows();
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

    function get_cities() {
        $query = "SELECT DISTINCT city FROM companies";
        return $this->db->query($query)->result();
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

    function update_data_company($id){
        $name = ucwords($this->input->post('name'));
        $address =  ucfirst($this->input->post('address'));
        $city = ucwords($this->input->post('city'));
        $phone = $this->input->post('phone');
        $contact_name = ucwords($this->input->post('contact_name'));
        $description = $this->input->post('description');
        $web = $this->input->post('web');
        $email = $this->input->post('email');

        $this->db->where('id', $id);
        //$this->db->where('kota', $kota);
        $idcompany = $this->db->get('wiwarakarya.companies');

        if ($idcompany->num_rows() <= 0) {
            $confirm = "Company <b>". $name. "</b> tidak ada dalam database supplier";
            $this->session->set_userdata('notification', $confirm);
            return;
        }

        $data = array(
            'name' => $name,
            'address' => $address,
            'city' => $city,
            'phone' => $phone,
            'contact_name' => $contact_name,
            'description' => $description,
            'web' => $web,
            'email' => $email,

        );

        print_r($data);

        //$id = $idsupplier->row()->id;
        $this->db->where('id', $id);
        $this->db->update('wiwarakarya.companies', $data);

        $confirm = "Data <b>".  $name ."</b> berhasil di-update";
        $this->session->set_userdata('notification', $confirm);
        return;
    }


    function delete_company($id){
        $name = $this->input->post('name');
        $city = $this->input->post('city');
        $stat = array('status' => 'false');
        $this->db->where('id', $id);
        $this->db->update('wiwarakarya.companies', $stat);

        $confirm = "Company <b>". $name. "</b> telah berhasil di non-aktifkan";
        $this->session->set_userdata('notification', $confirm);
        return;
    }

    function company_activation($id) {
        $name = $this->input->post('name');
        $city = $this->input->post('city');
        $stat = array('status' => 'true');

        $this->db->where('id', $id);
        $this->db->update('wiwarakarya.companies', $stat);

        $confirm = "Company <b>". $nama. "</b> telah berhasil diaktifkan";
        $this->session->set_userdata('notification', $confirm);
        return;
    }

    /** count()
    */
    // function company_count() {
    //     $this->db->from('wiwarakarya.companies');
    //     return $this->db->count_all_results();
    // }
}

?>