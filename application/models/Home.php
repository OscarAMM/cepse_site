<?php
class Home extends CI_Model
{
    /**table and pk home table**/
    public $table = 'home_content';
    public $table_id = 'content_id';

    public function __construct()
    {

    }
    public function find($id)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function findAll()
    {
        $this->db->select();
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }
    public function store($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function update($id, $data)
    {
        $this->db->update($this->table, $data);
        $this->db->where($this->table_id, $id);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->delete($this->table);
        $this->db->where($this->table_id, $id);
    }
}
