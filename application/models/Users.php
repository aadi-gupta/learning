<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_info($data)
	{
        // $query = $this->db->get('user');
        // $sql = "INSERT INTO user (name, email,password,phone,id) VALUES (".$data['name'].", ".$data['email'].",".$data['password'].",".$data['phone'].",1)";
        // $this->db->query($sql);
        // $this->db->insert('users', $data);
        // echo $this->db->affected_rows();

	}
}
?>