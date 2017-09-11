<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Journal_model extends CI_Model
{
    public function get_full_student_name()
    {
			$this->db->select('id, last_name, first_name');
			$query = $this->db->get('students');
			return $query->result();
    }
}
