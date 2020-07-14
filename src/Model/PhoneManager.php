<?php

namespace Mvc\Model;


class PhoneManager
{
    protected $phoneData;

    public function __construct()
    {
        $this->phoneData = new DataConnect();
    }

    function getAll()
    {
        $data = $this->phoneData->readFileJson();
        $arr = array();
        foreach ($data as $item) {
            $phone = new Phone($item['id'], $item['name'], $item['price'], $item['color'], $item['image']);
            array_push($arr, $phone);
        }
        return $arr;
    }

    function addProduct($phone)
    {
        $data = $this->phoneData->readFileJson();
        $arr = [
            'id' => $phone->getId(),
            'name' => $phone->getName(),
            'price' => $phone->getPrice(),
            'color' => $phone->getColor(),
            'image' => $phone->getImage()
        ];
        array_push($data, $arr);
        $this->phoneData->saveFileJson($data);
    }

    function reset()
    {
        $this->phoneData->resetFileJson();
    }

    function getIndexById($id)
    {
        $data = $this->getAll();
        foreach ($data as $key => $phone) {
            if ($phone->getId() == $id) {
                return $key;
            }
        }
    }

    function delete($id)
    {
        $data = $this->phoneData->readFileJson();
        $index = $this->getIndexById($id);
        array_splice($data, $index, 1);
        $this->phoneData->saveFileJson($data);
    }

    function getProductById($id){
        $data = $this->getAll();
        foreach ($data as $phone){
            if ($phone->getId() == $id){
                return new Phone($phone->getId(),$phone->getName(),$phone->getPrice(),$phone->getColor(),$phone->getImage());
            }
        }
    }
    function update($id,$name,$price,$color,$image){
        $data = $this->phoneData->readFileJson();
        $index = $this->getIndexById($id);
        $data[$index]['name'] = $name;
        $data[$index]['price'] = $price;
        $data[$index]['color'] = $color;
        $data[$index]['image'] = $image;
        $this->phoneData->saveFileJson($data);
    }

}