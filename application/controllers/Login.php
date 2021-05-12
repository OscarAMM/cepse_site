<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users');
        $this->load->library('form_validation');
        $this->load->helper(array(
            'login_rules',
        ));
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
            $this->load->view('users/login');
        } else {

        }
    }
}
