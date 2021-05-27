<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation', 'pagination'));
        $this->load->model(array('ContentModel', 'AboutModel'));
        $this->load->helper('url_helper');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        /**use model functions */
        $data = $this->ContentModel->getInfo();
        $this->load->view('home_page/header');
        $this->load->view('home_page/index', array('data' => $data), false);
        $this->load->view('home_page/footer');
    }
    public function aboutus()
    {
        $data = $this->AboutModel->getInfoAboutUs();
        $this->load->view('home_page/header');
        $this->load->view('home_page/about/public_index', array('data' => $data), false);
        $this->load->view('home_page/footer');
    }

}
