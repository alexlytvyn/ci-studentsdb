<?php
class Students_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_students()
    {
        $query = $this->db->query("SELECT * FROM students");
        return $query->result_array();
    }
}
