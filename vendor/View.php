<?php
class View{
    public function render($tpl,$data){
        $path=$path='views/'.$tpl.'.php';        
        include_once $path;
        
    }

}
?>