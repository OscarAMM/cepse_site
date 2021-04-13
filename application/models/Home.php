<?php
class Home extends CI_Model
{
    /**table and pk home table**/
    public $table = 'home';
    public $table_id = 'home_id';

    public function __construct()
    {
        
    }
    function find($id)
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
}
