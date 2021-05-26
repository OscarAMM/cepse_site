<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation', 'pagination'));
        $this->load->helper(array('content/content_rules'));
        $this->load->model('ContentModel');
        if (!$this->session->userdata('is_logged')) {
            $this->load->library(array('session', 'form_validation', 'pagination'));
            redirect('login');
        }
    }
    public function index($offset = 0)
    {
        $data = $this->ContentModel->getInfo();
        $config['base_url'] = base_url('content/index');
        $config['per_page'] = 20;
        $config['full_tag_open'] = '<div class="text-center"> <nav> <ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"> <span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"> <span class="page-link">';
        $config['next_tag_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close'] = '</span></li>';
        $config['total_rows'] = count($data);
        $this->pagination->initialize($config);
        $page = $this->ContentModel->getPaginate($config['per_page'], $offset);
        $this->getTemplate($this->load->view('content/index', array('data' => $page), true));
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
    public function create()
    {
        $view = $this->load->view('content/create', '', true);
        $this->getTemplate($view);
    }
    public function store()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //helper rules
            $rules = getContentRules();
            //form fields
            $title_one = $this->input->post('title_one');
            $title_two = $this->input->post('title_two');
            $title_three = $this->input->post('title_three');
            $paragraph_one = $this->input->post('paragraph_one');
            $paragraph_two = $this->input->post('paragraph_two');
            $paragraph_three = $this->input->post('paragraph_three');
            //set validation rules before insertion
            $this->form_validation->set_rules($rules);
            //verification at rules. false = return to create view / true insert into db
            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('content/create', '', true);
                $this->getTemplate($view);
            } else {
                $content = array(
                    'title_one' => $title_one,
                    'title_two' => $title_two,
                    'title_three' => $title_three,
                    'paragraph_one' => $paragraph_one,
                    'paragraph_two' => $paragraph_two,
                    'paragraph_three' => $paragraph_three,
                );
                if (!$this->ContentModel->insert($content)) {
                    $this->output->set_status_header(500);
                } else {
                    $message = $this->session->set_flashdata('msg', 'El contenido ha sido agregado con éxito.');
                    redirect(base_url('content/index'));
                }
            }
        } else {
            show_404();
        }
    }
    public function edit($id)
    {
        $data = $this->ContentModel->getContentInfo($id);
        $view = $this->load->view('content/edit', array('data' => $data), true);
        $this->getTemplate($view);
    }
    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //helper rules
            $rules = getContentRules();
            //form fields
            $title_one = $this->input->post('title_one');
            $title_two = $this->input->post('title_two');
            $title_three = $this->input->post('title_three');
            $paragraph_one = $this->input->post('paragraph_one');
            $paragraph_two = $this->input->post('paragraph_two');
            $paragraph_three = $this->input->post('paragraph_three');
            //set validation rules before insertion
            $this->form_validation->set_rules($rules);
            //verification at rules. false = return to create view / true insert into db
            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('content/edit/' . $id, '', true);
                $this->getTemplate($view);
            } else {
                $content = array(
                    'title_one' => $title_one,
                    'title_two' => $title_two,
                    'title_three' => $title_three,
                    'paragraph_one' => $paragraph_one,
                    'paragraph_two' => $paragraph_two,
                    'paragraph_three' => $paragraph_three,
                );

                $this->ContentModel->updateContent($id, $content);
                $message = $this->session->set_flashdata('msg', 'El contenido ha sido actualizado con éxito.');
                redirect(base_url('content/index'));

            }
        } else {
            show_404();
        }
    }
}
