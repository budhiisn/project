<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function get()
	{
		return $this->db->get('order');
	}

	public function insert($insert)
	{
		return $this->db->insert('order', $insert);
	}

}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */