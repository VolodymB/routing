<?php
class Order extends Model{

    public $id;
    public $customer_id;
    public $status=null;
    public $worker=null;
    public $delivery;
    public $payment;
    public $city;
    public $street;

    public function create($data,$custom_id){
        if(isset($data) && !empty($data)){
            if($custom_id){
                    if($this->validation($data)){
                    $sql="INSERT INTO `order`(`customer_id`, `status_id`, `worker_id`, `delivery_id`, `payment_id`, `city_id`, `adress`) VALUES (:customer_id,:status_id,:worker_id,:delivery_id,:payment_id,:city_id,:adress)";
                    $array=array(
                        'customer_id'=>$custom_id,
                        'status_id'=>$this->status,
                        'worker_id'=>$this->worker,
                        'delivery_id'=>$this->delivery,
                        'payment_id'=>$this->payment,
                        'city_id'=>$this->city,
                        'adress'=>$this->street
                    );
                    $select=$this->db->prepare($sql);                
                    if($select->execute($array)){                
                     $order_id=$this->db->lastInsertId();   
                     return $order_id;                              
                    }
                }
            }
            
        }
    }

    public function validation($data){
        if(isset($data['delivery']) && !empty($data['delivery'])){
            $this->delivery=$data['delivery'];
        }
        if(isset($data['delivery']) && !empty($data['delivery'])){
            $this->delivery=$data['delivery'];
        }
        if(isset($data['payment']) && !empty($data['payment'])){
            $this->payment=$data['payment'];
        }
        if(isset($data['city']) && !empty($data['city'])){
            $this->city=$data['city'];
        }
        if(isset($data['order_street']) && !empty($data['order_street'])){
            $this->street=$data['order_street'];
        }
        return true;
    }

public function saveOrder($data){
        // array(5) { ["order_id"]=> string(2) "23" ["product_id"]=> int(2) ["unit_id"]=> int(2) ["quantity"]=> int(1) ["price"]=> float(300) }
        $sql="INSERT INTO `product_order`(`order_id`, `product_id`, `price`, `quantity`, `unit_id`) VALUES (:order_id,:product_id,:price,:quantity,:unit_id)";
        $array=array(
        'order_id'=>$data['order_id'],
        'product_id'=>$data['product_id'],
        'quantity'=>$data['quantity'],
        'price'=>$data['price'],
        'unit_id'=>$data['unit_id']
        );
        $select=$this->db->prepare($sql);
        if($select->execute($array)){
            return true;
        }
    }

}
?>