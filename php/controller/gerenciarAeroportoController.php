<?php
include '../model/database.php';
$mostrarErro = null;
$estadosBrasileiros = array('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO');
$aeroportosArray = [];
$enviouMudanca = 0;
$var = 0;

function editarAeroporto($arrayAssocEditarAeroporto){
    try{
        global $conexao;
        $query = $conexao->prepare("UPDATE aeroportos 
        SET nome = :nome, sigla = :sigla, cidade = :cidade, estado = :estado
        WHERE id_aeroporto = :id_aeroporto");

    $query->execute([
        ':nome' => $arrayAssocEditarAeroporto["nomeAeroporto"],
        ':sigla' => $arrayAssocEditarAeroporto["siglaAeroporto"],
        ':cidade' =>  $arrayAssocEditarAeroporto["cidadeAeroporto"],
        ':estado' => $arrayAssocEditarAeroporto["estadoAeroporto"],
        'id_aeroporto' => $arrayAssocEditarAeroporto["inputIdAeroporto"]
    ]);

    $novoAeroporto = $query->fetchAll(PDO::FETCH_ASSOC);

    $conexao = null;    

    } catch(PDOException $Exception){
        echo $Exception->getMessage();
    }

    return true;
    } 

if($_POST){
$inputNomeAeroporto = $_POST["inputNomeAeroporto"];
$inputSiglaAeroporto = $_POST["inputSiglaAeroporto"];
$inputCidadeAeroporto = $_POST["inputCidadeAeroporto"];
$inputEstadoAeroporto = $_POST["inputEstadoAeroporto"];
$inputIdAeroporto = $_POST["inputIdAeroporto"];
$enviouMudanca = 1;

if($inputNomeAeroporto == null || $inputSiglaAeroporto == null || 
$inputCidadeAeroporto == null || $inputEstadoAeroporto == null){
    $mostrarErro = 1;
    return;
 } else {
    $arrayAssocEditarAeroporto = [
        "nomeAeroporto" => $inputNomeAeroporto,
        "siglaAeroporto" => $inputSiglaAeroporto,
        "cidadeAeroporto" => $inputCidadeAeroporto, 
        "estadoAeroporto" => $inputEstadoAeroporto,
        "inputIdAeroporto" => $inputIdAeroporto
    ];
    
        editarAeroporto($arrayAssocEditarAeroporto);
        $var = 1; 
    }
}

function aeroporto($aeroportosArray){
    try{
          global $conexao;
          global $aeroportosArray;
               
          $query = $conexao->prepare("SELECT id_aeroporto, nome, sigla, cidade, estado from aeroportos");
          $query->execute();
          $aeroportosArray = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $Exception){
              echo $Exception->getMessage();
          }
        }

if($enviouMudanca == 0){
aeroporto($aeroportosArray);
}





?>