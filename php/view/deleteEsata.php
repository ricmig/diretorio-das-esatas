<?php 
include '../model/database.php';
$delete = intval($_GET["delete"]);
  

        try{
        global $conexao;
        
    $query = $conexao->prepare("DELETE FROM esata WHERE id_esata = :id");

    $query->execute([
        "id" => $delete
        ]);

    $query->fetchAll(PDO::FETCH_ASSOC);

    $conexao = null;    

    } catch(PDOException $Exception){
        echo $Exception->getMessage();
    }

    header("location: gerenciar-esata-adm.php");

?>