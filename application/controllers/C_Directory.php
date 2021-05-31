<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Directory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('directory/directory_rules'));
        $this->load->model(array('DirectoryModel'));
        if (!$this->session->userdata('is_logged')) {
            redirect('login');
        }
    }
    public function index()
    {
        $data = $this->DirectoryModel->getDirectoryData();
        $view = $this->load->view('directory/index', array('data' => $data), true);
        $this->getTemplate($view);
    }

    public function create()
    {
        $view = $this->load->view('directory/create', '', true);
        $this->getTemplate($view);
    }
    public function store()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $rules = getDirectoryRules();

            $name = $this->input->post('employee_name');
            $charge = $this->input->post('employee_charge');
            $email = $this->input->post('employee_email');
            $phone = $this->input->post('employee_phone');
            $view = $this->load->view('directory/create', '', true);

            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('directory/create', '', true);
                $this->getTemplate($view);
            } else {
                $data = array(
                    'employee_name' => $name,
                    'employee_charge' => $charge,
                    'employee_email' => $email,
                    'employee_phone' => $phone,
                );
                if (!$this->DirectoryModel->save($data)) {
                    $this->output->set_status_header(500);
                } else {
                    $message = $this->session->set_flashdata('msg', 'El dato se ha creado con éxito.');
                    redirect(base_url('c_directory/index'));
                }
            }
        } else {
            show_404();
        }
    }
    public function edit($id)
    {
        $person = $this->DirectoryModel->getPersonInfo($id);
        $view = $this->load->view('directory/edit', array('person' => $person), true);
        $this->getTemplate($view);
    }
    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $person = $this->DirectoryModel->getPersonInfo($id);
            $rules = getDirectoryRules();

            $name = $this->input->post('employee_name');
            $charge = $this->input->post('employee_charge');
            $email = $this->input->post('employee_email');
            $phone = $this->input->post('employee_phone');
            $view = $this->load->view('directory/edit', '', true);
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() === false) {
                $this->output->set_status_header(500);
                $view = $this->load->view('directory/edit', array('person' => $person), true);
                $this->getTemplate($view);

            } else {
                $data = array(
                    'employee_name' => $name,
                    'employee_charge' => $charge,
                    'employee_email' => $email,
                    'employee_phone' => $phone,
                );
                if (!$this->DirectoryModel->update($id, $data)) {
                    $this->output->set_status_header(500);
                } else {
                    $message = $this->session->set_flashdata('msg', 'El dato se ha actualizado con éxito.');
                    redirect(base_url('c_directory/index'));
                }
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
    public function delete($id)
    {
        $this->DirectoryModel->delete_data($id);
        $message = $this->session->set_flashdata('msg', 'El dato se ha eliminado con éxito.');
        redirect(base_url('c_directory/index'));
    }
}
