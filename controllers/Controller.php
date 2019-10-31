<?php

class Controller
{
	public $view;
    public $model;

    public function renderView()
    {

    }

    public function redirect($controller, $action)
    {
        header('Location: /index.php?controller=' . $controller . '&action=' . $action);
    }
}