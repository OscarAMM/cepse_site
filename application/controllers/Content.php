<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
    }
}
