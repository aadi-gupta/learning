<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_info($data)
	{
        print_r($data);
        $this->db->insert('users', $data);
        echo $this->db->last_query();

	}
}
?>