<?php

class AboutUsController extends Controller
{
    public function __construct() {
        $this->model = new AboutUsModel();
        $this->view = new View($this->model);
    }

    public function Index(){
    	$viewFields['AboutUs'] = "NYEH";
    	$this->view->render('about_us/index.phtml', $viewFields);
    }
}