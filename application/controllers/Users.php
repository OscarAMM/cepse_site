<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper('users/users_rules');
    }
    public function index()
    {
        $this->load->view('users/index');
    }
    public function create()
    {
        $view = $this->load->view('users/create', '', true);
        $this->getTemplate($view);
    }
    public function store()
    {
        //form fields
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('password_c');
        $range = $this->input->post('range');
        $view = $this->load->view('users/create', '', true);
        //validation rules (at helpers/users)
        $this->form_validation->set_rules(getUserRules());
        //verification at form action
        if ($this->form_validation->run() === false) {
            ///
        } else {
            //user data session
            $user = array(
                'username' => $username,
                'email' => $email,
                'password' => random_string('alnum', 10),
                'range' => $range,
                'status' => 'activo',
            );
            //data session
            $this->session->set_flashdata('msg', 'El usuario ha sido registrado con éxito.');
            redirect(base_url('users/index'));
        }
        //load view
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
}
