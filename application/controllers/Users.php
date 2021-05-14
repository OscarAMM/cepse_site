<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('users/users_rules'));
        $this->load->model('UserModel');
        if (!$this->session->userdata('is_logged')) {
            redirect('login');
        }
    }
    public function index()
    {
        $data = $this->UserModel->getUsers();
        $this->getTemplate($this->load->view('users/index', array('data'=>$data),true));
        
    }
    public function create()
    {
        $view = $this->load->view('users/create', '', true);
        $this->getTemplate($view);
    }
    public function store()
    {
        $rules = getUserRules();
        //form fields
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('password_c');
        $range = $this->input->post('range');
        $view = $this->load->view('users/create', '', true);
        //validation rules (at helpers/users)
        $this->form_validation->set_rules($rules);
        //verification at form action
        if ($this->form_validation->run() === false) {
            $this->output->set_status_header(500);
            $view = $this->load->view('users/create', '', true);
            $this->load->view('messages/error');
            $this->getTemplate($view);
        } else {
            //user data session
            $user = array(
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'range' => $range,
                'status' => 'activo',
            );
            //insert data into users table
            if (!$this->UserModel->save($user)) {
                $this->output->set_status_header(500);
            } else {
                //data session
                $message = $this->session->set_flashdata('msg', 'El usuario ha sido registrado con éxito.');
                redirect(base_url('users/index'));
            }
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
}
