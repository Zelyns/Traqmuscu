<?php
session_start();
if (isset($_SESSION['dhdTbzzoP5654'])){
    $_SESSION['dhdTbzzoP5654']=array();
    session_destroy();
    header("Location: index.php");
}else{
    header("Location: login.php");
}
?>