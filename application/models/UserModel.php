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
    public function getUsers()
    {
        $sql = $this->db->get('users');
        return $sql->result();
    }
    public function getPaginate($limit, $offset)
    {
        $sql = $this->db->order_by('user_id', 'DESC')->get('users', $limit, $offset);
        return $sql->result();
    }
    public function getUser($id)
    {
        $this->db->select();
        $this->db->from('users');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function updateUser($id, $user)
    {
        $this->db->where('user_id', $id);
        $this->db->update('users', $user);
        return $this->db->insert_id();
    }
}
