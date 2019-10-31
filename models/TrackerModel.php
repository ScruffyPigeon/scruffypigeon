<?php

class TrackerModel extends Model
{
    private $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        if(!$this->data){
            $this->data = json_decode(file_get_contents('resources/data/test.json'), true);
        }

        return $this->data;
    }

    public function addData($dataRow)
    {
        if(!$this->data){
            $this->data = json_decode(file_get_contents('resources/data/test.json'), true);
        }

        $this->data[] = $dataRow;

        file_put_contents('resources/data/test.json', json_encode($this->data));

        return $this->data;
    }
}