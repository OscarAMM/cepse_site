<?php
function getAnnouncementRules()
{
    return array(
        array(
            'field' => 'notice_title',
            'label' => 'Título',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
        ),
        array(
            'field' => 'notice_content',
            'label' => 'Contenido',
            'rules' => 'required',
            'errors' => array(
                'required' => 'El campo %s no debe estar vacío',
            ),
        ),
    );
}
