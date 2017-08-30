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

		public function group_add()
    {
			$data = array(
							'group_name' => $this->input->post('group_name'),
							'leader_name' => $this->input->post('leader_name'),
							'notes' => $this->input->post('notes')
					);
			$this->db->insert('groups', $data);
      $id = $this->db->insert_id();
      return $id;
    }
}
