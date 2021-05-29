<?php
    
    // action частина яка відповідає за підключення файлів view
    class IndexController extends Controller{

        // підключення файла index.php і обробка інформації, яка може вийти з нього
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