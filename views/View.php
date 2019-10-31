<?php

class View
{
    private $model;
    public $viewFields;

    public function __construct($model = null) {
        $this->model = $model;
        $this->viewFields = array();
    }
	
    public function render($path, $data=null)
    {
        if ($data != null)
        {
            $this->viewFields = $data;
        }
        require_once($path);
    }
}