<?php

require_once 'View.php';

class Controller{

    public $view;

    public function __construct(){
        $this->view=new View();
    }

}
?>