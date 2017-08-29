<?php
class Groups_model extends CI_Model
{
    public function get_all_groups()
    {
        $query = $this->db->get('groups');
        return $query->result();
    }

    public function order_by()
    {
        $param = $this->input->get('order_by');
        $this->db->order_by($param);
        $query = $this->db->get('groups');
        return $query->result();
    }
}
