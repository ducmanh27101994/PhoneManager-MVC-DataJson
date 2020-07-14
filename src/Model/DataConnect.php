<?php


namespace Mvc\Model;


class DataConnect
{
    protected $dataProduct;

    public function __construct()
    {
        $this->dataProduct = 'src/Model/data.json';
    }

    function readFileJson(){
        $data = file_get_contents($this->dataProduct);

        return json_decode($data,true);
    }
    function saveFileJson($arr){
        $dataJson = json_encode($arr);

        file_put_contents($this->dataProduct,$dataJson);
    }

    function resetFileJson(){
        file_put_contents($this->dataProduct,json_encode([]));
    }

}