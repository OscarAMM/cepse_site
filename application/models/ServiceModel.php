<?php
class ServiceModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function getServiceData()
    {
        $sql = $this->db->get('service');
        return $sql->result();
    }
    public function save($data)
    {
        $this->db->insert('service', $data);
    }
    public function getServiceById($id)
    {
        $this->db->select();
        $this->db->from('service');
        $this->db->where('service_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function updateServiceById($id, $data){
        $this->db->where('service_id', $id);
        $this->db->update('service', $data);
        return $this->db->insert_id();
    }
    public function getServiceLimit(){
        $query = $this->db->order_by('service_id', 'desc')->limit(3)->get('service');
        return $query->result();
    }
}
