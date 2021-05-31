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
                'email' => $response->email,
                'username' => $response->username,
                'password' => $response->password,
                'is_logged' => true,
            );
            $this->session->set_userdata($data);
            // $this->session->set_flashdata('msg', '¡Bienvenido al sistema ' .$data['username'] .' !');
            if ($this->session->range === 'admin') {
                echo json_encode(array("url" => base_url('c_users/index')));
            } else {
                echo json_encode(array("url" => base_url('welcome')));
            }

        }
    }
    public function logout()
    {
        $data = array('user_id', 'range', 'status', 'username', 'is_logged');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('login');
    }
}
