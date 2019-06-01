<?php
include '../../model/database.php';

    function pegarLogin(){
    GLOBAL $login;
    GLOBAL $senha;
    GLOBAL $erro;
    $login = $_POST['inputLogin'];
    $senha = $_POST['inputSenha'];      
    
    if($login == null||$senha == null){
    $erro = 1;
    } elseif(isset($_POST["adm"])){
        include 'loginAdminController.php';
        loginAdmin();
    } else {
        include 'loginUserController.php';
        loginUser();
    }
}
?>