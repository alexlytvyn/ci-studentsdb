<?php
class Students_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_students()
    {
        $query = $this->db->get('students');
        return $query->result();
    }

    public function order_by()
    {
        $param = $this->input->get('order_by');
        $this->db->order_by($param);
        $query = $this->db->get('students');
        return $query->result();
    }
}
