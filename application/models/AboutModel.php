<?php
class AboutModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function save($data)
    {
        if ($this->db->insert('aboutus', $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function getInfoId($id)
    {
        $this->db->select();
        $this->db->from('aboutus');
        $this->db->where('about_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function getInfoAboutUs()
    {
        $sql = $this->db->get('aboutus');
        return $sql->result();
    }
    public function updateInfoAbout($id, $data)
    {
        $this->db->where('about_id', $id);
        $this->db->update('aboutus', $data);
        return $this->db->insert_id();
    }
}
