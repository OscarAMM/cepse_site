<?php
class FileModel extends CI_Model
{
    public function __construct()
    {
        $this->db->database();
    }
    public function save_file($data)
    {
        if ($this->db->insert('file', $data)) {
            return true;
        } else {
            return false;
        }
    }
}
