<?php
session_start();
session_destroy();
$sair = $_GET["sair"];
if($sair=='1'){
header("Location: ../view/login/login-admin.php");
} else {
header("Location: ../view/login/login.php"); 
}
?>
