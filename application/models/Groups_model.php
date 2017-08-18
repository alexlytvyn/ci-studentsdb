<?php
class Groups_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_groups()
    {
        $query = $this->db->query("SELECT * FROM groups");
        return $query->result_array();
    }
}
