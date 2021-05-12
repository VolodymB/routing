<?php
require_once 'config/Db.php';
require_once 'vendor/Model.php';
require_once 'vendor/View.php';
require_once 'vendor/Controller.php';
require_once "routes.php";
require_once "Route.php";

Route::start();

// $uri=$_SERVER['REQUEST_URI'];

// if(isset($routes[$uri])){
//     $path='pages/'.$routes[$uri].'.php';
//     if(file_exists($path)){
//         include_once($path);
//     }
// }else{
//     echo 'its not';
// }

// switch($uri){
//     case '/':
//     echo 'index';
//     break;
//     case '/about':
//     echo 'about';
//     break;
//     case '/contacts':
//     echo 'contacts';
//     break; 
//     default:
//     echo 'doesnt find';
//     break;       
// }
?>