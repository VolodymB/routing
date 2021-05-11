<?php
class Db{
    const USER='root';
    const PASS='root';
    const HOST='localhost';
    const DB='tea_store';

    public static function connect(){
        $hosting=self::HOST;
        $db=self::DB;
        $charset='utf8';
        $user=self::USER;
        $password=self::PASS;
        $dsn="mysql:host=$hosting;dbname=$db;charset=$charset";
    $option=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES=>false,
        ];
        $connect=new PDO($dsn,$user,$password,$option);
        return $connect;
    }





}
?>