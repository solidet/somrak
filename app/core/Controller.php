<?php

class Controller
{
    public function model($model)
    {
       require_once '../app/models/'. $model .'.php';
       return new $model();
    }

    public function view($view, $data  = [])
    {
        require_once '../app/views/'. $view .'.php';
    }

    public function viewTpl($template, $params )
    {
        $loader = new Twig_Loader_Filesystem('../app/views');
        $twig = new Twig_Environment($loader);
        echo ($twig->render( $template, $params ));
        // require_once '../app/views/'. $template .'.html';

    }
}