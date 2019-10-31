<?php

class GalleryController extends Controller
{
    public function __construct() {
        $this->model = new GalleryModel();
        $this->view = new View($this->model);
    }

    public function Index(){
    	$viewFields = $this->model->getImageDirectories();
    	$this->view->render('gallery/index.phtml', $viewFields);
    }

    public function Upload()
    {
    	$target_dir = "resources/images/gallery/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

        $this->redirect('Gallery', 'Index');
    }
}