<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('home_page/header');
        $this->load->view('users/index');
    }
    public function create()
    {
        $this->load->view('home_page/header');
        $this->load->view('users/create');
    }
    public function store()
    {
        //gets data from the create form register users
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_c');
        //validation section
        $config = array(
            array(
                'field' => 'username',
                'label' => 'Nombre de usuario',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo de nombre de usuario no puede estar vacío.',
                ),
            ),
            array(
                'field' => 'email',
                'label' => 'Correo',
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => array(
                    'required' => 'El campo de correo no puede estar vacío.',
                    'valid_email' => 'El correo debe ser válido.',
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Contraseña',
                'rules' => 'required|min_length[6]',
                'errors' => array(
                    'required' => 'El campo de contraseña no puede ser vacío.',
                    'min_length' => 'La contraseña debe ser de al menos 6 caracteres.',
                ),
            ),
            array(
                'field' => 'password_c',
                'label' => 'Confirmar constraseña',
                'rules' => 'required|min_length[6]|matches[password]',
                'errors' => array(
                    'required' => 'El campo de %s no puede ser vacío',
                    'min_length' => 'El campo de %s debe ser de al menos 6 caracteres',
                    'matches' => 'El campo de %s no es el mismo que en password',
                ),
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == false) {
            $this->load->view('home_page/header');
            $this->load->view('messages/error');
            $this->load->view('users/create');
        } else {
            //save all the data into array and pass it to model  (Users) function (create) to insert data
            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'status' => 'activo',
            );
            $registred = $this->Users->create($data);
            if ($registred) {
                $message['msg'] = "El usuario se ha registrado correctamente";
                $this->load->view('home_page/header');
                $this->load->view('messages/success', $message);
                $this->load->view('users/create', $message);
            }
        }
    }
}
