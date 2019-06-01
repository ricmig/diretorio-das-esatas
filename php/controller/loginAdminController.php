<?php
function loginAdmin(){
    try{
      global $conexao;
      global $login;
      global $senha;
      global $erro;
           
      $query = $conexao->prepare("SELECT * FROM usuario_adm");
      $query->execute();
      $admLogin = $query->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $Exception){
          echo $Exception->getMessage();
      }  

    foreach($admLogin as $key => $value){
        if($login == $value["login"] && $senha == $value["senha"]){
            session_start();
            $_SESSION["nome"] = $value["login"];
            header("Location: ../diretorio-adm.php");
        }   else{
            $erro = 1;  
        }
    }
}
?>


