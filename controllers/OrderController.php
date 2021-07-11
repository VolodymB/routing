<?php
require_once "./models/Order.php";
require_once './models/Customer.php';
require_once './models/Product.php';

class OrderController extends Controller{

    public function add($data){
        if(isset($_POST['save'])){
            session_start();

        //     [2]=>
        //     array(1) {
        //       [2]=>
        //       int(1)
        //     }
        //     [9]=>
        //     array(1) {
        //       [8]=>
        //       int(1)
        //     }
        //     [8]=>
        //     array(1) {
        //       [3]=>
        //       int(1)
        //     }
        //     [4]=>
        //     array(1) {
        //       [2]=>
        //       int(1)
        //     }
        //   }
            
            // echo '<pre>';
            // var_dump($_SESSION['basket']);
            // echo '</pre>';
            // die;
             /**
                 * зберігання в таблицю order
                 * і отримання order_id
                 */
            $customer=new Customer();
            $custom_id=$customer->save($_POST);
                if($custom_id){                    
                    $order=new Order();
                    $order_info=array();
                    $order_info['order_id']=$order->create($_POST,$custom_id);
                    if($order_info['order_id']){                        
                        // зберігання в таблицю product_order
                        foreach($_SESSION['basket'] as $product_id=>$units){ 
                            foreach($units as $unit_id=>$quantity){
                                if(isset($product_id)){                                    
                                    $order_info['product_id']=$product_id;
                                    if(isset($unit_id)){
                                        $order_info['unit_id']=$unit_id;
                                        if(isset($quantity)){
                                            $order_info['quantity']=$quantity;
                                             $product=new Product();
                                             $order_info['price']=$product->getPriceByProductIdUnitId($product_id,$unit_id);
                                             if(isset($order_info['price'])){
                                                 
                                                 $order=new Order();
                                                 $order->saveOrder($order_info);
                                                 
                                                 echo '<pre>';
                                            var_dump($order);
                                            echo '</pre>';
                                                die;
                                             }
                                            // як дістати ціну?
                                            
                                        }
                                    }
                                }
                               
                            }                              
                            
                        }
                    }
                }    
            // array(8) { ["delivery"]=> string(1) "2" ["order_name"]=> string(7) "dfffhhg" ["order_surname"]=> string(12) "dddddddddddd" ["order_email"]=> string(12) "fsfdhh@fhgfh" ["order_phone"]=> string(10) "3343543643" ["city"]=> string(1) "1" ["order_street"]=> string(7) "dfhhfhf" ["coment_btn"]=> string(16) "Замовити" }
            
        }
        
    }

    
    

}


?>