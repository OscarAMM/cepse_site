<?php
class Homex extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->helper('form');
    }
    public function index()
    {
        $this->load->model('Home');
        $this->load->view('home/index_cepse');
    }
    public function form_home()
    {
        $this->load->view('home/store');
    }
    public function store()
    {
        
    }
    public function delete()
    {
        //
    }
}
