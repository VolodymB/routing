<?php
class View{
    /**
     * вхідний параметр $tpl назва файла відображення контента
     * data масив з параметрами, який передається
     * return підключення фацйла відображення
     */
    public function render($tpl,$data){
        $path=$path='views/'.$tpl.'.php';        
        include_once $path;
        
    }

}
?>