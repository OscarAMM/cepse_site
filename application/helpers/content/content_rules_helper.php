<?php
if (!function_exists('getContentRules')) {
    function getContentRules()
    {
        return array(
            'field' => 'title_one',
            'label' => 'Título uno',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
            array(
                'field' => 'title_two',
                'label' => 'Título dos',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                ),
            ),
            array(
                'field' => 'title_three',
                'label' => 'Título tres',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                ),
            ),
            array(
                'field' => 'paragraph_one',
                'label' => 'Párrafo uno',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                ),
            ),
            array(
                'field' => 'paragraph_two',
                'label' => 'Párrafo dos',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                ),
            ),
            array(
                'field' => 'paragraph_three',
                'label' => 'Párrafo tres',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El campo %s no debe estar vacío',
                ),
            ),
        );
    }
}
