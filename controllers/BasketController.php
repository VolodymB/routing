<?php

require_once './models/Product.php';
require_once './models/Customer.php';
require_once './models/User.php';

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
        session_start();
        
        $data_page=array();
        $data_header=array();
        // [0]=> array(7) { ["product_id"]=> int(15) ["unit_id"]=> int(2) ["price"]=> float(250) ["quantity"]=> int(1) ["product_name"]=> string(22) "Білочунь, 2019" ["unit_name"]=> string(8) "0,1 кг" ["total_sum"]=> float(250) 
            if(isset($_SESSION['user_id'])){
               $data_page['user_id']=$_SESSION['user_id'];
                $user=new User();
                $data_page['user_info']=$user->findOne($_SESSION['user_id']);
                // var_dump($data_page['user_info']);
                // die;
            }
            
            $data_header['total_count']=$this->model->totalCount();
            $data_page['products']=$this->model->products();
        if($data_page['products']){
            foreach($data_page['products'] as $product){
            $total_sum+=$product['total_sum'];
        }
    }
        $data_page['total']=$total_sum;

        // if(!empty($data_page['products'])){

        //     echo '<pre>';
        //     var_dump($data_page['products']);
        //     echo '</pre>';
        //     die;
        // }

        

;
        

        $customer=new Customer();
        $data_page['delivery']=$customer->getListDelivery();

        $data_page['payment']=$customer->getListPayment();
        
        $data_page['city']=$customer->getListCity();

        
       
       
        return $this->view->render('basket',$data_page);
    }
    
    public function remove($data){
       $this->model->remove($data['product_id'],$data['unit_id']);
       header('Location:basket');
    }



    
    

}

?>