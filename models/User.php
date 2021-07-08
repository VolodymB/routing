<?php
    class User extends Model{
        public $user_id;
        public $name;
        public $surname;
        public $email;
        public $login;
        public $password;


        public function log_in($data){
            if(!empty($data)){
               $sql="SELECT `id` FROM `user` WHERE `email`=:email AND `password`=:user_password";
                $array=array(
                    'email'=>$data['email'],
                    'user_password'=>$data['password']
                   );
                $select=$this->db->prepare($sql);
                $select->execute($array);
                $result=$select->fetchAll();
                return $result[0]['id'];   
            }
            // array(3) { ["email"]=> string(14) "emar@gmail.com" ["password"]=> string(10) "cccccccccc" ["send"]=> string(20) "Продовжити" }
                    
        }

        public function save($data,$user_id=false){
            if(!empty($data)){
                if($this->validation($data)){
                    $array=array(
                        'userName'=>$this->name,
                        'surname'=>$this->surname,
                        'email'=>$this->email,
                        'userLogin'=>$this->login,
                        'userPassword'=>$this->password);
                
                if(!$user_id){
                    $sql="INSERT INTO `user`(`name`, `surname`, `email`, `login`, `password`) VALUES (:userName,:surname,:email,:userLogin,:userPassword)";
                }else{
                    $array['userId']=$user_id;
                    // var_dump($array);
                    // die;
                    $sql="UPDATE `user` SET `name`=:userName,`surname`=:surname,`email`=:email,`login`=:userLogin,`password`=:userPassword WHERE `id`=:userId";
                }
                $select=$this->db->prepare($sql);
                if($select->execute($array)){
                    if($user_id){                    
                    $this->user_id=$user_id;  
                    }else{
                      $this->user_id=$this->db->lastInsertId();  
                    }
                    
                    return true;
                }
                    
                }else{
                   echo 'oops';
                }
            }
        }

        public function validation($data){
                $error=array();
            // array(7) { ["user_id"]=> string(0) "" ["name"]=> string(4) "Forr" ["surname"]=> string(6) "Gontar" ["email"]=> string(12) "fsfdhh@fhgfh" ["login"]=> string(16)
                if(isset($data['name']) && !empty($data['name'])){
                    $this->name=$data['name'];
                }else{
                    $error['name']='Введіть імя будь ласка';
                }
                if(isset($data['surname']) && !empty($data['surname'])){
                    $this->surname=$data['surname'];
                }else{
                    $error['surname']='Введіть фамілію будь ласка';
                }
                if(isset($data['email']) && !empty($data['email'])){
                    $this->email=$data['email'];
                }else{
                    $error['email']='Введіть правильну електронну пошту';

                }
                if(isset($data['login']) && !empty($data['login'])){
                    if($this->getUserByLogin($data['user_id'],$data['login'])){
                       $this->login=$data['login']; 
                    }else{                        
                            $error['login']='Оберіть інший логін';
                    }
                    
                }else{
                    $error['login']='Введіть login будь ласка';
                }
                if(isset($data['password']) && !empty($data['password'])){
                    $this->password=$data['password'];
                }else{
                    $error['password']='Введіть пароль будь ласка';
                }
                if(!$error){
                   return true; 
                }else{
                    $data['error']=$error;
                    return $data;
                }
                
                
        }

        public function getUserByUserId($user_id){
            $sql="SELECT * FROM `user` WHERE `id`=:userId";
            $data=array(
                'userId'=>$user_id
            );
            $select=$this->db->prepare($sql);
            $select->execute($data);
            $result=$select->fetchAll();
            return $result;            
        }

        public function getUserByLogin($user_id, $login){
            // string(1) "1" string(4) "emar"
            // string(0) "" string(8) "bigHomer"
            // var_dump($user_id,$login);
            // die;
            if(!$user_id){
               $sql="SELECT * FROM `user` WHERE `login`=:userLogin";
                $data=array(
                    'userLogin'=>$login
                );
                $select=$this->db->prepare($sql);
                // var_dump($select->execute($data));
                // die;
                if(!$select->execute($data)){
                    return true;
                } 
            }else{
                $sql="SELECT * FROM `user` WHERE `login`=:userLogin";
                $data=array(
                    'userLogin'=>$login
                );
                $select=$this->db->prepare($sql);
                // var_dump($select->execute($data));
                // die;
                $select->execute($data);

                if($result = $select->fetchAll()){
                    
                        // var_dump($result);
                        // die;
                        // array(1) { [0]=> array(6) { ["id"]=> int(1) ["name"]=> string(4) "Mark" ["surname"]=> string(4) "Solo" ["email"]=> string(14) "emar@gmail.com" ["login"]=> string(4) "emar" ["password"]=> string(9) "12345root" } }
                    if($user_id==$result[0]['id']){

                        return true;
                    }else{
                        return false;
                    }                    
               }else{
                   return true;
               } 
            }
        }

        public function findOne($user_id){
            $sql="SELECT `name`,`surname`,`email` FROM `user` WHERE `id`=:id";
            $data=array(
                'id'=>$user_id
            );
            $select=$this->db->prepare($sql);
            $select->execute($data);
            $result=$select->fetchAll();
            return $result[0];
        }
        





    }
?>