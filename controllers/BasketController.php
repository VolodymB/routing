<?php
require_once './models/Basket.php';
require_once './models/Product.php';

class BasketController{

    public function __construct(){
        $this->model=new Basket();
        $this->view=new View();
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
            header("location:basket");
            // $products=$this->model->products();
            // var_dump($products);
            // die;        
            
        }        
    }

    public function index(){
        $data_page=array();
        // [0]=> array(7) { ["product_id"]=> int(15) ["unit_id"]=> int(2) ["price"]=> float(250) ["quantity"]=> int(1) ["product_name"]=> string(22) "Білочунь, 2019" ["unit_name"]=> string(8) "0,1 кг" ["total_sum"]=> float(250) 
        $data_page['products']=$this->model->products();
        if($data_page['products']){
            foreach($data_page['products'] as $product){
            $total_sum+=$product['total_sum'];
        }
    }
        $data_page['total']=$total_sum;
        // var_dump($data_page['products']);
        // die;
        $data_page['header']=$this->view->render('header');
        $data_page['footer']=$this->view->render('footer');
        return $this->view->render('basket',$data_page);
    }
    
    public function remove($data){
       $this->model->remove($data['product_id'],$data['unit_id']);
       header('Location:basket');
    }

    

}

?>