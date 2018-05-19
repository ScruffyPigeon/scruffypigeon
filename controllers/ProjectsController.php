<?php

class ProjectsController extends Controller
{
    public function __construct() {
        $this->model = new ProjectsModel();
        $this->view = new View($this->model);
    }

    public function Index(){
    	$viewFields['Test'] = "this is a test";
    	$this->view->render('projects/index.phtml', $viewFields);
    }
}