<?php
    if(!isset($_GET['produto'])){
        header("Location:../index.php");
    }
    require_once('array.php');
    $id = (int)$_GET['produto'];
    return $id;
?>