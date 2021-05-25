<?php
class ContentModel extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }
    public function insert($data){
        if($this->db->insert('home_content', $data)){
            return true;
        }else{
            return false;
        }
    }
    public function getInfo(){
        $sql = $this->db->get('home_content');
        return $sql->result();
    }
    public function getPaginate($limit, $offset)
    {
        $sql = $this->db->order_by('content_id', 'DESC')->get('home_content', $limit, $offset);
        return $sql->result();
    }
}
