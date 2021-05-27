<?php
if (!function_exists('getAboutRules')) {
    function getAboutRules()
    {
        return array(
            'field' => 'objective_title',
            'label' => 'Título del objetivo',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
            array(
                'field' => 'objective_text',
                'label' => 'Descripción del objetivo',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                ),
            ),
            array(
                'field' => 'mission_title',
                'label' => 'Título de misión',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                ),
            ),
            array(
                'field' => 'mission_text',
                'label' => 'Descripción de misión',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                ),
            ),
            array(
                'field' => 'vision_title',
                'label' => 'Título de visión',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío.',
                ),
            ),
            array(
                'field' => 'vision_text',
                'label' => 'Descripción de visión',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío.',
                ),
            ),
        );
    }
}
