<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Announcement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('announcement/announcement_rules', 'date'));
        $this->load->model(array('AnnouncementModel'));
        if (!$this->session->userdata('is_logged')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = $this->AnnouncementModel->getAnnouncement();
        $view = $this->load->view('announcement/index', array('data' => $data), true);
        $this->getTemplate($view);
    }
    public function create()
    {
        $view = $this->load->view('announcement/create', array('error' => ''), true);
        $this->getTemplate($view);
    }
    public function store()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $rules = getAnnouncementRules();
            $title = $this->input->post('notice_title');
            $content = $this->input->post('notice_content');
            $place = $this->input->post('place');
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('announcement/create', '', true);
                $this->getTemplate($view);
            } else {

                $data = array(
                    'notice_title' => $title,
                    'notice_content' => $content,
                    'place' => $place,
                    'time' => date('Y-m-d H:i:s'),
                );
                $config['upload_path'] = './assets/uploads/files/';
                $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                if ($this->input->post('file_name')) {
                    if (!$this->upload->do_upload('file_name')) {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('announcement/create', $error, true);
                    } else {
                        $upload_data = $this->upload->data();
                        $path = base_url() . 'assets/uploads/' . $_FILES['file_name']['name'];
                        $file['file_name'] = $upload_data['file_name'];
                        $file['file_path'] = $path;
                        $this->AnnouncementModel->save_with_file($data, $file);
                        redirect(base_url('c_announcement/index'));
                    }
                } else {
                    $this->AnnouncementModel->save($data);
                    redirect(base_url('c_announcement/index')); 
                }
            }
        } else {
            show_404();
        }
    }
    public function edit($id)
    {
        $data = $this->AnnouncementModel->getEditNotice($id);
        $file = $this->AnnouncementModel->getFile($id);
        $view = $this->load->view('announcement/edit', array('data' => $data, 'file' => $file), true);
        $this->getTemplate($view);
    }
    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $rules = getAnnouncementRules();
            $title = $this->input->post('notice_title');
            $content = $this->input->post('notice_content');
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('announcement/edit/' . $id, '', true);
                $this->getTemplate($view);
            } else {
                $data = array(
                    'notice_title' => $title,
                    'notice_content' => $content,
                );
                $this->AnnouncementModel->update_announcement($id, $data);
                $message = $this->session->set_flashdata('msg', 'Se ha agregado con éxito la información');
                redirect(base_url('c_announcement/index'));
            }
        } else {
            show_404();
        }
    }
    public function getTemplate($view)
    {
        $data = array(
            'head' => $this->load->view('template/head', '', true),
            'nav' => $this->load->view('template/nav', '', true),
            'aside' => $this->load->view('template/aside', '', true),
            'content' => $view,
            'footer' => $this->load->view('template/footer', '', true),
        );
        $this->load->view('template/dashboard', $data);
    }

    // to be done later
    public function upload_files($id)
    {
        $data = array();
        $errorUploadType = $statusMsg = '';
        if (!empty($_FILES['file_name']['name']) && count(array_filter($_FILES['file_name']['name'])) > 0) {
            $files_count = count($_FILES['files']['name']);
            for ($i = 0; $i < $files_count; $i++) {
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                $uploadPath = 'assets/uploads/files/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('file_name')) {
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $path = base_url() . 'assets/uploads/' . $_FILES['file_name']['name'];
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $upload_data[$i]['file_path'] = $path;
                } else {
                    $errorUploadType .= $_FILES['file']['name'] . ' | ';
                }
            }
            $errorUploadType = !empty($errorUploadType) ? '<br/>File Type Error: ' . trim($errorUploadType, ' | ') : '';
            if (!empty($uploadData)) {
                // Insert files data into the database
                $insert = $this->file->insert($id, $uploadData);

                // Upload status message
                $statusMsg = $insert ? 'Files uploaded successfully!' . $errorUploadType : 'Some problem occurred, please try again.';
                redirect(base_url('c_announcement/index'));
            } else {
                $statusMsg = "Sorry, there was an error uploading your file." . $errorUploadType;
            }
        } else {
            $statusMsg = 'Please select image files to upload.';
        }

    }
}
