<?php
class Users extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    /**
     * Functions to manage database (CRUD)
     */
    public function create($data)
    {
        if ($this->db->insert('users', $data)) {
            return true;
        } else {
            return false;
        }
    }
}
