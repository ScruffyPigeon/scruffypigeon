<?php

class GalleryModel extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function getImageDirectories()
    {
    	$returnArray = array();

    	$i=0;
    	foreach (glob("resources/images/gallery/*") as $filename)
		{
			$returnArray['Images'][$i] = $filename;
			$i++;
		}

		return $returnArray;
	}
}