<?php

class ContactosController {

    public function indexAction()
    {
        return new View('contactos',['titulo' => 'Mejorando.la' ,'h1' => 'Correo de atención',  'correo' => 'contactos@mejorando.la']);
    }

    public function ciudadAction($ciudad)
    {
        exit('contactos de ' . $ciudad);
    }
}