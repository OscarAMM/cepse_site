<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
    }
    public function index(){
        if($this->session->userdata('is_logged')){
           $view = $this->load->view('users/index','', true);
           $this->getTemplate($view);
        }else{
            redirect('login');
        }
    }
    public function getTemplate($view){
        $data = array(
            'head' => $this->load->view('template/head', '', true),
            'nav' => $this->load->view('template/nav','', true),
            'aside' => $this->load->view('template/aside', '', true),
            'content'=>$view,
            'footer' => $this->load->view('template/footer', '', true),
        );
        $this->load->view('template/dashboard', $data);
    }
}