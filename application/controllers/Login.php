<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('users/login');
    }
    public function validate()
    {
        
    }
}
