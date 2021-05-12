<?php
function getLoginRules()
{
    return array(
        array(
            'field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email|trim',
            'errores' => array(
                'required' => 'El %s no debe estar vacío',
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
    );
}
