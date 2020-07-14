<?php

namespace Mvc\Controller;

use Mvc\Model\Phone;
use Mvc\Model\PhoneManager;

class ProductController
{
    protected $productController;

    public function __construct()
    {
        $this->productController = new PhoneManager();
    }

    function viewProduct()
    {
        $listPhone = $this->productController->getAll();
        include_once 'src/View/list.php';
    }

    function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/View/add.php';
        } else {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $color = $_POST['color'];
            $image = $_POST['image'];

            $phone = new Phone($id,$name,$price,$color,$image);
            $this->productController->addProduct($phone);
            header('location:index.php');
        }
    }
    function resetProduct(){
        $this->productController->reset();
        header('location:index.php');
    }

    function deleteProduct(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $id = $_REQUEST['id'];
            $this->productController->delete($id);
            header('location:index.php');
        }
    }
    function updateProduct(){
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_REQUEST['id'];
            $phone = $this->productController->getProductById($id);
            include_once 'src/View/update.php';
        } else {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $color = $_POST['color'];
            $image = $_POST['image'];

            $this->productController->update($id,$name,$price,$color,$image);
            header('location:index.php');
        }
    }


}