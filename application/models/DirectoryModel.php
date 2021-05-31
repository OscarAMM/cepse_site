<?php
class DirectoryModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function save($data)
    {
        if ($this->db->insert('directory', $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function getDirectoryData()
    {
        $query = $this->db->get('directory');
        return $query->result();
    }
    public function getPersonInfo($id)
    {
        $this->db->select();
        $this->db->from('directory');
        $this->db->where('directory_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function update($id, $data)
    {
        $this->db->where('directory_id', $id);
        $this->db->update('directory', $data);
        return $this->db->insert_id();
    }
    public function delete_data($id)
    {
        $this->db->where('directory_id', $id);
        $this->db->delete('directory');
    }
}
