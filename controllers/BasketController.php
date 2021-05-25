<?php
require_once './models/Basket.php';
require_once './models/Product.php';

class BasketController{

    public function __construct(){
        $this->model=new Basket();
    }

    public function add(){
        // array(2) { ["product_id"]=> string(1) "9" ["unit_id"]=> string(1) "1" }
        $product=new Product();
        if(isset($_POST['product_id']) && !empty($_POST['product_id'])){
            $product_id=$_POST['product_id'];
        }else{
            return false;
        }
        if(isset($_POST['unit_id']) && !empty($_POST['unit_id'])){
            $unit_id=$_POST['unit_id'];
        }else{
            $unit_id=0;
        }
        if($product->getProductByIdByUnit($product_id,$unit_id)){
            $this->model->add($product_id,$unit_id);
            var_dump($this->model->products());  
        }
        
        
    }

}

?>