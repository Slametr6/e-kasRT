<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	public function getUser($id = '')
	{
		$this->db->select('*, b.role as role_id')
				->from('users a')
				->join('user_role b', 'b.id = a.role_id', 'inner');
		$data = $this->db->get();
		if ($id) {
			return $data->row_array();
		} else {
			return $data->result();
		}
	}

	public function save($data)
	{
		return $this->db->insert('users', $data);
	}

	public function update($data, $id)
	{
		return $this->db->update('users', $data, ['user_id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('users', ['user_id' => $id]);
	}

}

/* End of file M_auth.php */
