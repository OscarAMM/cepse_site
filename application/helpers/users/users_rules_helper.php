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
                'rules' => 'required|valid_email|trim|is_unique[users.email]',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                    'valid_email' => 'El %s debe ser válido',
                    'is_unique' => 'El %s debe ser único. Ya se encuentra registrado dicho correo.',
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
                'field' => 'password_c',
                'label' => 'Confirmación de contraseña',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo de %s no debe estar vacío.',
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
