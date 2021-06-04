<?php
function getServiceRules()
{
    return array(
        array(
            'field' => 'service_title',
            'label' => 'Título',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
        ),
        array(
            'field' => 'service_content',
            'label' => 'Contenido',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
        ),
        array(
            'field' => 'service_directed',
            'label' => 'dirigido a',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
        ),
        array(
            'field' => 'service_requirements',
            'label' => 'requisitos',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
        ),
    );
}
