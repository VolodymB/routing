<?php
require_once './models/Basket.php';

class View{

    public $data=array();
    /**
     * вхідний параметр $tpl назва файла відображення контента
     * data масив з параметрами, який передається
     * return підключення файла відображення
     */
    // переведння частини адреси в назву файла
    public function renderPart($tpl,$data=array()){
        $path='views/'.$tpl.'.php';        
        include_once $path;
        
    }

    public function getParam(){
        $data_header=array();

        $data_header['total_count']=Basket::totalCount();
        $this->data['header']=$this->renderPart('header',$data_header);
        $this->data['footer']=$this->renderPart('footer');

    }

    public function render($tpl,$data=array()){
        $this->getParam();
        $this->data['content']=$this->renderPart($tpl,$data);
        return $this->renderPart('layout',$this->data);
    }

}
?>