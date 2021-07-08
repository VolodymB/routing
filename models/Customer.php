<?php 
class Customer extends Model{

    public $id;
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $user_id;
    
    
    public function getListDelivery(){
        $sql="SELECT * FROM `delivery`";
        $select=$this->db->query($sql);
        $result=$select->fetchAll();
        return $result;

    }


    public function getListPayment(){
        $sql="SELECT * FROM `payment`";
        $select=$this->db->query($sql);
        $result=$select->fetchAll();
        return $result; 
    }

    public function getListCity(){
        $sql="SELECT * FROM `city`";
        $select=$this->db->query($sql);
        $result=$select->fetchAll();
        return $result; 
    }

    public function save($data){
        // array(10) { ["user_id"]=> string(1) "1" ["delivery"]=> string(1) "2" ["payment"]=> string(1) "2" ["order_name"]=> string(14) "Бонкунko" ["order_surname"]=> string(14) "Павлонiv" ["order_email"]=> string(12) "fsfdhh@fhgfh" ["order_phone"]=> string(10) "3343543643" ["city"]=> string(1) "3" ["order_street"]=> string(7) "dfhhfhf" ["save"]=> string(16) "Замовити" }
        if(!empty($data)){
            if($this->validation($data)){
                $array=array(
                    'cus_user_id'=>$data['user_id'],
                    'cus_name'=>$data['order_name'],
                    'surname'=>$data['order_surname'],
                    'email'=>$data['order_email'],
                    'phone'=>$data['order_phone']
                );
                $sql="INSERT INTO `customer`(`user_id`,`name`, `surname`, `email`, `telephone`) VALUES (:cus_user_id,:cus_name,:surname,:email,:phone)";
                $select=$this->db->prepare($sql);                
                if($select->execute($array)){                
                 $custom_id=$this->db->lastInsertId();   
                 return $custom_id;                              
                }

                
            }
        }
        // array(8) { ["delivery"]=> string(1) "2" ["order_name"]=> string(7) "dfffhhg" ["order_surname"]=> string(12) "dddddddddddd" ["order_email"]=> string(12) "fsfdhh@fhgfh" ["order_phone"]=> string(10) "3343543643" ["city"]=> string(1) "1" ["order_street"]=> string(7) "dfhhfhf" ["coment_btn"]=> string(16) "Замовити" }
        
    }

    // не працює як треба
    public function validation($data){
        if(!empty($data)){
            if(isset($data['user_id']) && !empty($data['user_id'])){
                $this->user_id=$data['user_id'];
            }else{
                $this->user_id=0;
            }           
            if(isset($data['order_name']) && !empty($data['order_name'])){
                $this->name=$data['order_name'];
            }
            if(isset($data['order_surname']) && !empty($data['order_surname'])){
                $this->surname=$data['order_surname'];
            }
            if(isset($data['order_email']) && !empty($data['order_email'])){
                $this->email=$data['order_email'];
            }
            if(isset($data['order_phone']) && !empty($data['order_phone'])){
                $this->phone=$data['order_phone'];
            }            
            
        }
        return true;
    }
    
    

}

?>