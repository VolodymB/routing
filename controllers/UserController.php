<?php
require_once "./models/User.php";

class UserController extends Controller{

    public function index(){
        session_start();
        if(isset($_SESSION['user_id'])){
            $data_page=array();
            $data_page['user_id']=$_SESSION['user_id'];
            // var_dump($user_id);
            session_start();
            return $this->view->render('cabinet',$data_page);
        }
    }

    public function log_in(){
        if(isset($_POST)){            
           $user=new User();           
           if($id=$user->log_in($_POST)){
               session_start();
                $_SESSION['user_id']=$id;
                // var_dump($_SESSION['user_id']);
                header("Location:/user_main");
           }
           
        //    var_dump($user); 
        }
        return $this->view->render('log_in');
    }

    public function create(){
        if(isset($_POST)){
            $user=new User();
            if($user->save($_POST)){
                header("Location:/user_log_in");
            }
            
        }

        return $this->view->render('user_form');
    }

    public function log_out(){
        session_start();
        unset($_SESSION['user_id']);
        header("location:/user_log_in");
    }

    public function update(){
        session_start();
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $data_page=array();
            $data_page['user']=$this->findOne($user_id);
            // array(1) { ["user"]=> array(6) { ["id"]=> int(1) ["name"]=> string(4) "Mark" ["surname"]=> string(4) "Solo" ["email"]=> string(14) "emar@gmail.com" ["login"]=> string(4) "emar" ["password"]=> string(9) "12345root" } }
            if(isset($_POST['save'])){
                $user=new User();
                if($user->save($_POST,$user_id)){
                    header("Location:/user_main");
                }
            }
        }
        

        return $this->view->render('user_form',$data_page);
    }

    public function findOne($user_id){
        if(isset($user_id) && !empty($user_id)){
            $user_info=array();
            $user=new User();
            $user_info=$user->getUserByUserId($user_id);
            return $user_info[0];
        }
        
    }

}
?>