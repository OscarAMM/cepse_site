<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('service/service_rules', 'date'));
        $this->load->model(array('ServiceModel'));
        if (!$this->session->userdata('is_logged')) {
            redirect('login');
        }
    }
    public function index()
    {
        $services = $this->ServiceModel->getServiceData();
        $view = $this->load->view('service/index', array('services' => $services), true);
        $this->getTemplate($view);
    }
    public function create()
    {
        $view = $this->load->view('service/create', array('error' => ''), true);
        $this->getTemplate($view);
    }
    public function store()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $rules = getServiceRules();

            $service_title = $this->input->post('service_title');
            $service_content = $this->input->post('service_content');
            $service_directed = $this->input->post('service_directed');
            $service_requirements = $this->input->post('service_requirements');
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('service/create', '', true);
                $this->getTemplate($view);
            } else {
                $data = array(
                    'service_title' => $service_title,
                    'service_content' => $service_content,
                    'service_directed' => $service_directed,
                    'service_requirements' => $service_requirements,
                );
                $this->ServiceModel->save($data);
                $message = $this->session->set_flashdata('msg', 'Se ha agregado con éxito la información');
                redirect(base_url('c_service/index'));
            }
        } else {
            shos_404();
        }
    }
    public function edit($id)
    {

        $service = $this->ServiceModel->getServiceById($id);
        $view = $this->load->view('service/edit', array('service' => $service),true);
        $this->getTemplate($view);
    }
    public function update($id){
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $rules = getServiceRules();

            $service_title = $this->input->post('service_title');
            $service_content = $this->input->post('service_content');
            $service_directed = $this->input->post('service_directed');
            $service_requirements = $this->input->post('service_requirements');
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('service/edit/'.$id, '', true);
                $this->getTemplate($view);
            } else {
                $data = array(
                    'service_title' => $service_title,
                    'service_content' => $service_content,
                    'service_directed' => $service_directed,
                    'service_requirements' => $service_requirements,
                );
                $this->ServiceModel->updateServiceById($id,$data);
                $message = $this->session->set_flashdata('msg', 'Se ha actaulizado con éxito la información');
                redirect(base_url('c_service/index'));
            }
        } else {
            shos_404();
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
