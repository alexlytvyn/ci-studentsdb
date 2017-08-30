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

		public function student_delete($id) {
			$this->db->where('id', $id);
			$this->db->delete('students');
		}

		public function get_student($id) {
			$this->db->select('*');
			$this->db->where('id', $id);
			$this->db->from('students');
			$query = $this->db->get();
			return $query->row();
		}

		public function student_update($id)
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
			$this->db->where('id', $id);
			$this->db->update('students', $data);
			return $id;
    }
}
