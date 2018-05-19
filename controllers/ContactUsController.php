<?php

class ContactUsController extends Controller
{
    public function __construct() {
        $this->model = new ContactUsModel();
        $this->view = new View($this->model);
    }

    public function Index(){
    	$viewFields['AboutUs'] = "NYEH";
    	$this->view->render('contact_us/index.phtml', $viewFields);
    }
}