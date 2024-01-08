<?php


try{
    $access=new pdo("mysql:host=localhost;dbname=traqmuscu;charset=utf8","root","");

}
catch (Exception $e){
    $e->getMessage();
}