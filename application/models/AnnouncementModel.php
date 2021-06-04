<?php
class AnnouncementModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function getThreeAnnouncement()
    {
        $sql = $this->db->order_by('notice_id', 'DESC')->limit(3)->get('notice');
        return $sql->result();
    }
    public function save_with_file($data, $file)
    {
        $this->db->trans_start();
        $inser_data['file_name'] = $file['file_name'];
        $inser_data['file_path'] = $file['file_path'];
        $this->db->insert('file', $inser_data);
        $file_id = $this->db->insert_id();

        $in_data['notice_title'] = $data['notice_title'];
        $in_data['notice_content'] = $data['notice_content'];
        $this->db->insert('notice', $in_data);
        $notice_id = $this->db->insert_id();

        $sql = "INSERT INTO p_notice_file (id,notice_id, file_id) VALUES(null, " . $notice_id . ", " . $file_id . ")";
        $this->db->query($sql);
        $this->db->trans_complete();
    }
    public function save($data)
    {
        $in_data['notice_title'] = $data['notice_title'];
        $in_data['notice_content'] = $data['notice_content'];
        $in_data['place'] = $data['place'];
        $this->db->insert('notice', $in_data);
    }
    public function getAnnouncement()
    {
        $sql = $this->db->order_by('notice_id', 'DESC')->get('notice');
        return $sql->result();
    }
    public function getEditNotice($id)
    {
        $this->db->select();
        $this->db->from('notice');
        $this->db->where('notice_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function getSingleNotice($id)
    {
        $this->db->select();
        $this->db->from('notice');
        $this->db->where('notice_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function update_announcement($id, $data)
    {
        $this->db->where('notice_id', $id);
        $this->db->update('notice', $data);
        return $this->db->insert_id();
    }
    public function getFile($id)
    {
        $this->db->select('*');
        $this->db->from('file');
        $this->db->join('p_notice_file', ' p_notice_file.file_id = file.file_id');
        $this->db->join('notice', 'notice.notice_id = p_notice_file.notice_id');
        $this->db->where('p_notice_file.notice_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function insert_file($id, $data = array())
    {
        $insert = $this->db->insert_batch('file', $data);
        return $insert ? true : false;
    }
}
