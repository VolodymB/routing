<?php
    

    class IndexController extends Controller{

        public function index(){
            $data['title']='hello';
            return $this->view->render('index',$data);
        }

        public function about(){
            $data['title']='About Us';
            return $this->view->render('about',$data);
        }

        public function contact(){
            $data['title']='Our Contacts';
            // var_dump($_POST);
            return $this->view->render('contact',$data);

        }



    }
?>