<?php
class Auth extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function login($user, $password)
    {
        $data = $this->db->get_where('users', array('email' => $user, 'password' => $password), 1);
        if (!$data->result()) {
            return false;
        }
        return $data->row();
    }
}
