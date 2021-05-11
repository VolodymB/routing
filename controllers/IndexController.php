<?php
    require_once './vendor/Controller.php';

    class IndexController extends Controller{

        public function index(){
            $data['title']='hello';
            return $this->view->render('index',$data);
        }

        public function about(){
            $data['title']='About Us';
            return $this->view->render('index',$data);
        }

        public function contact(){
            $data['title']='Our Contacts';
            return $this->view->render('index',$data);
        }



    }
?>