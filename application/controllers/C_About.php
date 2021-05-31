<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper('about/about_rules');
        $this->load->model('AboutModel');
        if (!$this->session->userdata('is_logged')) {
            redirect('login');
        }
    }
    public function index()
    {
        $data = $this->AboutModel->getInfoAboutUs();
        $this->getTemplate($this->load->view('about/index', array('data' => $data), true));
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
        $view = $this->load->view('about/create', '', true);
        $this->getTemplate($view);
    }
    public function store()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $rules = getAboutRules();

            $objective_title = $this->input->post('objective_title');
            $objective_text = $this->input->post('objective_text');
            $mission_title = $this->input->post('mission_title');
            $mission_text = $this->input->post('mission_text');
            $vision_title = $this->input->post('vision_title');
            $vision_text = $this->input->post('vision_text');
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('about/create', '', true);
                $this->getTemplate($view);
            } else {
                $data = array(
                    'objective_title' => $objective_title,
                    'objective_text' => $objective_text,
                    'mission_title' => $mission_title,
                    'mission_text' => $mission_text,
                    'vision_title' => $vision_title,
                    'vision_text' => $vision_text,
                );
                if (!$this->AboutModel->save($data)) {
                    $this->output->set_status->header(500);
                } else {
                    $message = $this->session->set_flashdata('msg', 'Se ha agregado con éxito la información');
                    redirect(base_url('c_about/index'));
                }
            }
        } else {
            shos_404();
        }
    }
    public function edit($id)
    {
        $data = $this->AboutModel->getInfoId($id);
        $view = $this->load->view('about/edit', array('data' => $data), true);
        $this->getTemplate($view);
    }
    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $rules = getAboutRules();

            $objective_title = $this->input->post('objective_title');
            $objective_text = $this->input->post('objective_text');
            $mission_title = $this->input->post('mission_title');
            $mission_text = $this->input->post('mission_text');
            $vision_title = $this->input->post('vision_title');
            $vision_text = $this->input->post('vision_text');
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('about/edit' . $id, '', true);
                $this->getTemplate($view);
            } else {
                $data = array(
                    'objective_title' => $objective_title,
                    'objective_text' => $objective_text,
                    'mission_title' => $mission_title,
                    'mission_text' => $mission_text,
                    'vision_title' => $vision_title,
                    'vision_text' => $vision_text,
                );
                $this->AboutModel->updateInfoAbout($id, $data);
                $message = $this->session->set_flashdata('msg', 'Se ha agregado con éxito la información');
                redirect(base_url('c_about/index'));
            }
        } else {
            shos_404();
        }
    }
}
