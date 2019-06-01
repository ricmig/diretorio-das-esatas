<?php 
   include '../model/database.php';

    $delete = intval($_GET["delete"]);
  

        try{
        global $conexao;
        
    $query = $conexao->prepare("DELETE FROM usuarios WHERE id_usuario = :id");

    $query->execute([
        "id" => $delete
        ]);

    $query->fetchAll(PDO::FETCH_ASSOC);

    $conexao = null;    

    } catch(PDOException $Exception){
        echo $Exception->getMessage();
    }

    header("location: gerenciar-usuario-adm.php");

?>