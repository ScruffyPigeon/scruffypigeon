<?php

class TestController extends Controller
{
    public function __construct() {
        $this->model = new TestModel();
        $this->view = new View($this->model);
    }

    public function Index(){
    	$viewFields['Test'] = "this is a test";
    	$this->view->render('about_us/index.phtml', $viewFields);
    }
}