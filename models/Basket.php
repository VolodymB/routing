<?php
    class Basket{

        public function add($product_id,$unit_id=0,$quantity=1){
           session_start();
           $basket=$_SESSION['basket'];
           if(isset($basket[$product_id])){
                if(isset($basket[$product_id][$unit_id])){
                    $basket[$product_id][$unit_id]+=$quantity;
                }else{
                    $basket[$product_id][$unit_id]=$quantity;
                }
           }else{
            $basket[$product_id] = array($unit_id=>$quantity);
           }
           $_SESSION['basket']=$basket;
           return true;
        }

        public function remove(){
            echo 'remove';
        }

        public function products(){
            session_start();
        return ($_SESSION['basket']);
        }


    }

?>