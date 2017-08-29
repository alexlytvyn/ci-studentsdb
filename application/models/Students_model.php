<?php
class Students_model extends CI_Model
{
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

    public function student_add()
    {
			$data = array(
							'last_name' => $this->input->post('last_name'),
							'middle_name' => $this->input->post('middle_name'),
							'first_name' => $this->input->post('first_name'),
							'birthday' => $this->input->post('birthday'),
							'ticket' => $this->input->post('ticket'),
							'notes' => $this->input->post('notes'),
							'photo' => base_url().'assets/img/'.$_FILES['photo']['name']
					);

						$this->db->insert('students', $data);
		        $id = $this->db->insert_id();
		        return $id;
    }
}
