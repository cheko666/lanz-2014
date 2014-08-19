<?php

class HomeController {

    public function indexAction()
    {
        return $view = new View('home',['titulo' => 'MejorandoPHP','h1' => 'Mejorando.la']);
    }

}