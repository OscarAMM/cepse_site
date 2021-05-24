<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation', 'pagination'));
        $this->load->helper(array('users/users_rules'));
        $this->load->model('UserModel');
        if (!$this->session->userdata('is_logged')) {
            redirect('login');
        }
    }
    public function index($offset = 0)
    {
        $data = $this->UserModel->getUsers();
        /**
         * Pagination configuration [pagination-tag] = Bootstrap classes
         */
        $config['base_url'] = base_url('users/index');
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
        /**
         * gets data from getPaginate function at user model
         */
        $page = $this->UserModel->getPaginate($config['per_page'], $offset);
        /**
         * Data pagination passed to template
         */
        $this->getTemplate($this->load->view('users/index', array('data' => $page), true));

    }
    public function create()
    {
        $view = $this->load->view('users/create', '', true);
        $this->getTemplate($view);
    }
    public function store()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $rules = getUserRules();
            /**
             * Form fields inputs
             */
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
                //$this->load->view('messages/error');
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
        } else {
            show_404();
        }

    }
    public function edit($id = 0)
    {
        $user = $this->UserModel->getUser($id);
        $view = $this->load->view('users/edit', array('user' => $user), true);
        $this->getTemplate($view);
    }
    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $user = $this->UserModel->getUser($id);
            $rules = getUpdateUserRules();
            /**
             * Form fields inputs
             */
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $range = $this->input->post('range');
            $view = $this->load->view('users/edit', '', true);
            //validation rules (at helpers/users)
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('users/edit', array('user' => $user), true);
                $this->getTemplate($view);
            } else {
                //user data session
                $user = array(
                    'username' => $username,
                    'email' => $email,
                    'range' => $range,
                    'status' => 'activo',
                );
                $this->UserModel->updateUser($id, $user);
                $this->session->set_flashdata('msg', 'El usuario ' . $username . ' ha sido actualizado correctamente.');
                redirect('users');
            }
        } else {
            show_404();
        }
    }
    public function profile($id)
    {
        $user = $this->UserModel->getUser($id);
        $view = $this->load->view('users/profile', array('user' => $user), true);
        $this->getTemplate($view);
    }
    public function update_profile($id){
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $user = $this->UserModel->getUser($id);
            $rules = getUserProfile();
            /**
             * Form fields inputs
             */
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $view = $this->load->view('users/profile', '', true);
            //validation rules (at helpers/users)
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('users/profile', array('user' => $user), true);
                $this->getTemplate($view);
            } else {
                //user data session
                $user = array(
                    'username' => $username,
                    'email' => $email,
                );
                $this->UserModel->updateUser($id, $user);
                $this->session->set_flashdata('msg', 'Su perfil ha sido actualizado correctamente.');
                redirect('users/profile/'.$this->session->user_id);
            }
        } else {
            show_404();
        }
    }
    public function update_password($id){
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $user = $this->UserModel->getUser($id);
            $rules = getUserPassword();
            /**
             * Form fields inputs
             */
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');
            $view = $this->load->view('users/profile', '', true);
            //validation rules (at helpers/users)
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('users/profile', array('user' => $user), true);
                $this->getTemplate($view);
            } else {
                //user data session
                $user = array(
                    'password' => $password,
                );
                $this->UserModel->updateUser($id, $user);
                $this->session->set_flashdata('msg', 'Su contraseña ha sido actualizado correctamente.');
                redirect('users/profile/'.$this->session->user_id);
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
}
