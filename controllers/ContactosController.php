<?php

class ContactosController {

    public function indexAction()
    {
        $view = new View('contactos');
        $view->execute();
    }

    public function ciudadAction($ciudad)
    {
        exit('contactos de ' . $ciudad);
    }
}