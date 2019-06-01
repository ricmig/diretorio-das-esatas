<?php
include '../model/database.php';

function adicionarAeroporto($arrayAssocAeroporto){
    try{
        global $conexao;
        
        $query = $conexao->prepare("INSERT INTO aeroportos(nome, sigla, cidade, estado)  
                                    VALUES(:nome, :sigla, :cidade, :estado);");

    $query->execute([
        ':nome' => $arrayAssocAeroporto["nome"],
        ':sigla' => $arrayAssocAeroporto["icao"],
        ':cidade' =>  $arrayAssocAeroporto["cidade"],
        ':estado' => $arrayAssocAeroporto["estado"]
    ]);

    $novoAeroporto = $query->fetchAll(PDO::FETCH_ASSOC);

    $conexao = null;    

    } catch(PDOException $Exception){
        echo $Exception->getMessage();
    }

    return true;
    } 

$validouCadastro = null;
if($_REQUEST)
{
    $inputNomeAeroporto = $_REQUEST["inputNomeAeroporto"];
    $inputSiglaIcao = $_REQUEST["inputSiglaIcao"];
    $inputCidadeAeroporto = $_REQUEST["inputCidadeAeroporto"];
    $inputEstadoAeroporto = $_REQUEST["inputEstadoAeroporto"];


    if($inputNomeAeroporto == null || $inputSiglaIcao == null || 
    strlen($inputSiglaIcao) != 4  || $inputCidadeAeroporto == null 
    || $inputEstadoAeroporto == null ){
        $validouCadastro = 2;
    } else {

        $arrayAssocAeroporto = [
            "nome" => $inputNomeAeroporto,
            "icao" => $inputSiglaIcao,
            "cidade" => $inputCidadeAeroporto, 
            "estado" => $inputEstadoAeroporto
        ];

    $adicionou = adicionarAeroporto($arrayAssocAeroporto);

            if ($adicionou == true){
                $validouCadastro = 1;
            }
    }
}
?>