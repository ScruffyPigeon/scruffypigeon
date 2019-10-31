<?php

class TrackerController extends Controller
{

    public function __construct()
    {
        $this->model = new TrackerModel();
        $this->view = new View($this->model);
    }

    public function Index()
    {
    	$viewFields['rows'] = $this->model->getData();
    	$this->view->render('tracker/index.phtml', $viewFields);
    }

    public function Add()
    {
        //$viewFields['rows'] = $this->model->setData();
        $this->model->addData(array('title' => 'TEST', 'calories' => '200'));
        $this->redirect('Tracker', 'Index');
    }
}