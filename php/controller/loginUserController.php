<?php
function loginUser(){
    try{
      global $conexao;
      global $login;
      global $senha;
      global $erro;
           
      $query = $conexao->prepare("SELECT id_usuario, nome, email, aeroporto, senha, aut from usuarios");
      $query->execute();
      $userLogin = $query->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $Exception){
          echo $Exception->getMessage();
      }
      
 
    foreach($userLogin as $key => $value){
        if($login == $value["email"] && $senha == $value["senha"] && $value['aut'] == 1){
            session_start();
            $_SESSION["id_usuario"] = $value["id_usuario"];
            $_SESSION["nome"] = $value["nome"];
            $_SESSION["aeroporto"] = $value["aeroporto"];           
            header("Location:../diretorio-user.php");
        }   else{
            $erro = 1;              
        }
    }
}
?>
