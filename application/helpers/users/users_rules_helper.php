<?php
if (!function_exists('getUserRules')) {
    function getUserRules()
    {
        return array(
            array(
                'field' => 'username',
                'label' => 'Nombre de usuario',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                ),
            ),
            array(
                'field' => 'email',
                'label' => 'Correo',
                'rules' => 'required|valid_email|trim',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                    'valid_email' => 'El %s debe ser válido',
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío.',
                ),
            ),
            array(
                'field' => 'range',
                'label' => 'Perfil',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío.',
                ),
            ),
        );
    }
}
