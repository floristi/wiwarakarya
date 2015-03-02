<?php

class m_event extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_all_event() {
        $query = "SELECT e.*, c.name as company_name ".
                "FROM events e JOIN companies c ON e.created_by = c.id";
        $result = $this->db->query($query)->result();
        $ret = array();
        foreach ($result as $data) {
            $ret[] = $data;
        }
        return $ret;
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

        $data = array (
            'name' => ucwords($name), 
            'description' => ucfirst($this->input->post('description')),
            'location' => ucwords($this->input->post('location')),
            'quota' => $this->input->post('quota'),
            'speaker' => ucwords($this->input->post('speaker')),
            'price' => $this->input->post('price'),
            'created_by' => $this->input->post('company_id')
            //'status' => 'TRUE'
        );

        print_r($data);

        if ($this->db->insert('wiwarakarya.events', $data)) {
            $confirm = "Event <b>". $name . "</b> successfully added";
            $this->session->set_userdata('notification', $confirm);
            return;
        }

        $confirm = "Event<b>". $name . "</b> add error!!!";
        $this->session->set_userdata('notification', $confirm);
        return;
    }

    function edit_event($id) {
        $name = $this->input->post('name');
        $data = array (
            'name' => ucwords($name), 
            'description' => ucfirst($this->input->post('description')),
            'location' => ucwords($this->input->post('location')),
            'quota' => $this->input->post('quota'),
            'speaker' => ucwords($this->input->post('speaker')),
            'price' => $this->input->post('price'),
            'created_by' => $this->input->post('company_id')
            //'status' => 'TRUE'
        );

        $this->db->where('id', $id);
        if ($this->db->update('wiwarakarya.events', $data)) {
            $confirm = "Event <b>". $name . "</b> successfully edited";
            $this->session->set_userdata('notification', $confirm);
            return;
        }

        $confirm = "Event<b>". $name . "</b> add error!!!";
        $this->session->set_userdata('notification', $confirm);
        return;
    }

    function delete_event($id) {
        $this->db->where('id', $id);
        $this->db->delete('events');
    }

    function register_event() {
        $data = array(
            'user_id' => $this->input->post('user_id'),
            'event_id' => $this->input->post('event_id')
        );

        $this->db->insert('event_registrations', $data);
    }

    function get_registered_events_by_user_id($user_id) {
        $event_ids = $this->db->get_where('event_registrations', array('user_id' => $user_id))->result();

        $events = array();
        foreach($event_ids as $event_id) {
            $this->db->where('id', $event_id);
            $events[] = $this->db->get('event')->row();
        }

        return $events;
    }
}
?>