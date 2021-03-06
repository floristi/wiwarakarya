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
        return $result;
    }

    function get_data_event($id) {
        return  $this->db->get_where('events', array('id' => $id))->row();
    }

    function insert_event(){
        $name = $this->input->post('name');

        $cek = $this->db->where('name', $name)->get('events')->num_rows();
        if($cek > 0) {
            $confirm = "Event <b>". $name . "</b> already exsist!";
            $this->session->set_userdata('notification', $confirm);
            return;
        }

        $data = array (
            'name'        => ucwords($name),
            'description' => ucfirst($this->input->post('description')),
            'location'    => ucwords($this->input->post('location')),
            'quota'       => $this->input->post('quota'),
            'quota_remaining'=> $this->input->post('quota'),
            'speaker'     => ucwords($this->input->post('speaker')),
            'price'       => $this->input->post('price'),
            'created_by'  => $this->input->post('company_id'),
            'time'        => $this->input->post('time-year').'-'.
                             $this->input->post('time-month').'-'.
                             $this->input->post('time-day').' '.
                             $this->input->post('time-hour').':'.
                             $this->input->post('time-minute')
            //'status' => 'TRUE'
        );

        if ($this->db->insert('events', $data)) {
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
            'created_by' => $this->input->post('company_id'),
            'time'    => $this->input->post('time-year').'-'.
                             $this->input->post('time-month').'-'.
                             $this->input->post('time-day').' '.
                             $this->input->post('time-hour').':'.
                             $this->input->post('time-minute')
            //'status' => 'TRUE'
        );

        $this->db->where('id', $id);
        if ($this->db->update('events', $data)) {
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

    function join_event() {
        $this->db->trans_start();

        $data = array(
            'user_id' => $this->session->userdata('id'),
            'event_id' => $this->input->post('event_id')
        );

        $this->db->insert('event_registrations', $data);

        $quota_remaining = $this->db->get_where('events', array('id' => $this->input->post('event_id')))->row()->quota_remaining;

        $this->db->where('id', $this->input->post('event_id'));
        $this->db->update('events', array('quota_remaining' => $quota_remaining - 1));

        $this->db->trans_complete();
    }

    function get_joined_events_by_user_id() {
		$user_id = $this->session->userdata('id');

        $query = "SELECT e.*, c.name as company_name ".
            "FROM event_registrations er ".
            "JOIN events e ON er.event_id = e.id ".
            "JOIN companies c ON e.created_by = c.id ".
            "WHERE er.user_id = " . $user_id;

        return $this->db->query($query)->result();
    }
}
?>