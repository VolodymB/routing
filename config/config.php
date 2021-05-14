<?php
// ключовий файл де підключаються всі необхідні файли
require_once 'config/Db.php';
require_once 'vendor/Model.php';
require_once 'vendor/View.php';
require_once 'vendor/Controller.php';
require_once "routes.php";
require_once "Route.php";

define('PATH_PRODUCT','web/img/product/');
?>