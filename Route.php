<?php
include_once 'controllers/IndexController.php';
class Route{
    private static function getUri(){
        return $_SERVER['REQUEST_URI'];
    }
    public static function start(){
        global $routes;
        $uri=self::getUri();
        /**http://teastore/
        http://teastore/products
        http://teastore/product/index
        http://teastore/product?product_id=5
        http://teastore/product?product_id=5&category_id=3 */
        $controller='IndexController';
        $action='index';
        $array_uri=explode('?',$uri);
        if(isset($routes[$array_uri[0]])){            
            $exp=explode('/',$routes[$array_uri[0]]);
            // $exp[0] - контролер, $exp[1]->action
            $class_name= ucfirst($exp[0]).'Controller';//exp, ProductController
            $path='controllers/'.$class_name.'.php';
            // $class_controller=new IndexController();
            // $action='index';
            if(file_exists($path)){
                include_once($path);
                if(class_exists($class_name)){     
                    $controller = $class_name; 
                    if(isset($exp[1]) && method_exists($controller,$exp[1])){
                        $action=$exp[1];

                    }
                }                  
            }
        }
        $array_param=array();
        if(isset($array_uri[1]) && !empty($array_uri[1])){
            $params=explode('&',$array_uri[1]);            
            foreach($params as $param){
                $array=explode('=',$param);
                $array_param[$array[0]]=$array[1];
            }
        }
        $object_controller=new $controller();
        // звернення до змінної 
        $object_controller->$action($array_param);    
        }
}
?>