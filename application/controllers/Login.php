<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array(
            'login_rules',
        ));
        $this->load->model('Auth');
    }
    public function index()
    {
        $this->load->view('users/login');
    }
    public function validate()
    {
        $rules = getLoginRules();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() === false) {
            $errors = array(
                'email' => form_error('email'),
                'password' => form_error('password'),
            );
            echo json_encode($errors);
            $this->output->set_status_header(400);
        } else {
            $user = $this->input->post('email');
            $password = $this->input->post('password');
            $response = $this->Auth->login($user, $password);
            if (!$response) {
                echo json_encode(array('msg' => 'Las credenciales no coinciden con ninguno registrado. Intente nuevamente.'));
                $this->output->set_status_header(401);
                exit;
            } 
            $data = array(
                'user_id' => $response->user_id,
                'range' => $response->range,
                'status' => $response->status,
                'username' => $response->username,
                'is_logged' => TRUE,
            );
            $this->session->set_userdata($data);
            echo json_encode(array("url" => base_url('dashboard')));
        }
    }
}
