<?php
class ContentModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function insert($data)
    {
        if ($this->db->insert('home_content', $data)) {
            return true;
        } else {
            return false;
        }
    }
    public function getInfo()
    {
        $sql = $this->db->get('home_content');
        return $sql->result();
    }
    public function getPaginate($limit, $offset)
    {
        $sql = $this->db->order_by('content_id', 'DESC')->get('home_content', $limit, $offset);
        return $sql->result();
    }
    public function getContentInfo($id)
    {
        $this->db->select();
        $this->db->from('home_content');
        $this->db->where('content_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function updateContent($id, $content)
    {
        $this->db->where('content_id', $id);
        $this->db->update('home_content', $content);
        return $this->db->insert_id();
    }
}
