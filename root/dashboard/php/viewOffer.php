<?php
session_start();
require_once "../../default/php/dbconfig.php";
require_once "../../default/php/convar.php";
echo $_POST['id'];
$_SESSION['id'] = $_POST['id'];
        if(isset($_SESSION['id'])){
            header('Location: ../../jofferpage'); 
        }
?>