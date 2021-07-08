<?php
require_once "./models/Order.php";
require_once './models/Customer.php';

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
                    $order_id=$order->create($_POST,$custom_id);
                    if($order_id){
                        // зберігання в таблицю product_order
                        $basket_info=array();
                        foreach($_SESSION['basket'] as $product_id=>$units){ 
                            foreach($units as $unit_id=>$quantity){
                                // як дістати ціну?
                                echo '<pre>';
                                var_dump($unit_id);
                                echo '</pre>';
                                    die;
                            }                              
                            
                        }
                    }
                }    
            // array(8) { ["delivery"]=> string(1) "2" ["order_name"]=> string(7) "dfffhhg" ["order_surname"]=> string(12) "dddddddddddd" ["order_email"]=> string(12) "fsfdhh@fhgfh" ["order_phone"]=> string(10) "3343543643" ["city"]=> string(1) "1" ["order_street"]=> string(7) "dfhhfhf" ["coment_btn"]=> string(16) "Замовити" }
            
        }
        
    }

    
    

}


?>