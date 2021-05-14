<?php
class View{
    /**
     * вхідний параметр $tpl назва файла відображення контента
     * data масив з параметрами, який передається
     * return підключення файла відображення
     */
    // переведння частини адреси в назву файла
    public function render($tpl,$data=array()){
        $path='views/'.$tpl.'.php';        
        include_once $path;
        
    }

}
?>