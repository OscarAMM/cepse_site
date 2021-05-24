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
    public function index()
    {
        $view = $this->load->view('content/index', '', true);
        $this->getTemplate($view);
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
        
    }
}
