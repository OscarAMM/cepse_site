<?php
class UserModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    /**
     * Functions to manage database (CRUD)
     */
    public function save($data)
    {
        if ($this->db->insert('users', $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function getUsers(){
        $sql = $this->db->get('users');
        return $sql->result();
    }
}
