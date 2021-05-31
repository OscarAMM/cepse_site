<?php
function getDirectoryRules()
{
    return array(
        array(
            'field' => 'employee_name',
            'label' => 'Nombre',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
        ),
        array(
            'field' => 'employee_charge',
            'label' => 'Cargo',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
        ),
        array(
            'field' => 'employee_email',
            'label' => 'Correo de contacto',
            'rules' => 'required|valid_email|trim',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
                'valid_email' => 'El %s debe válido',
            ),
        ),
        array(
            'field' => 'employee_phone',
            'label' => 'Teléfono de contacto',
            'rules' => 'required|exact_length[10]',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
                'exact_length' => 'El %s debe contener 10 números',
            ),
        ),
    );
}
