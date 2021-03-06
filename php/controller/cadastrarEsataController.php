<?php
include '../model/database.php';
$aeroportosArrayE = [];
$validouCadastro = null;

function aeroportoEsata($aeroportosArrayE){
  try{
        global $conexao;
        global $aeroportosArrayE;
             
        $query = $conexao->prepare("SELECT id_aeroporto, nome from aeroportos");
        $query->execute();
        $aeroportosArrayE = $query->fetchAll(PDO::FETCH_ASSOC);
      } catch(PDOException $Exception){
            echo $Exception->getMessage();
        }
      }
if($validouCadastro != 1){
aeroportoEsata($aeroportosArrayE);
}

function adicionarEsata($arrayAssocEsata){
    try{
      global $conexao;
      global $arrayAssocEsata;
      $query = $conexao->prepare("INSERT INTO esata(nomefantasia, cnpj, razaosocial, endereco, telefoneEmp, emailEmp, nomeResp, telefoneResp, emailResp, id_adicionado_por)  
                                    VALUES(:nomefantasia, :cnpj, :razaosocial, :endereco,  :telefoneEmp, :emailEmp, :nomeResp, :telefoneResp, :emailResp, :id_adicionado_por);");

    $query->execute([
        ':nomefantasia' => $arrayAssocEsata["nomeFantasia"],
        ':cnpj' => $arrayAssocEsata["CNPJ"],
        ':razaosocial' =>  $arrayAssocEsata["razaoSocial"],
        ':endereco' => $arrayAssocEsata["endereco"],
        ':telefoneEmp' => $arrayAssocEsata["telefoneEmpresa"],
        ':emailEmp' => $arrayAssocEsata["emailEmpresa"],
        ':nomeResp' => $arrayAssocEsata["nomeResponsavel"],
        ':telefoneResp' => $arrayAssocEsata["telefoneResponsavel"],
        ':emailResp' => $arrayAssocEsata["emailResponsavel"],
        ':id_adicionado_por' => 0
    ]);
    $novaEsata = $query->fetchAll(PDO::FETCH_ASSOC);
    $query = $conexao->prepare("SELECT id_esata FROM esata order by id_esata desc limit 1;");
    $query->execute([]);
    $var = $query->fetchAll(PDO::FETCH_ASSOC);
    $var = intval($var[0]["id_esata"]);
              
  foreach ($arrayAssocEsata['aeroporto'] as $value ){         
  $query = $conexao->prepare("INSERT INTO esataaeroporto(id_aeroporto, id_esata) VALUES(:id_aeroporto, :id_esata);");            
  $query->execute([
      ':id_aeroporto' => $value,
      ':id_esata' => $var
    ]);
    $novoinput2 = $query->fetchAll(PDO::FETCH_ASSOC);            
    }

    foreach($arrayAssocEsata['tipoEsata'] as $key => $value2){
    $query = $conexao->prepare("INSERT INTO atividade(id_atividade, atividades_tabela) VALUES(:id_atividade, :atividades_tabela);");            
    $query->execute([
          ':id_atividade' => $var,
          ':atividades_tabela' => $value2
        ]);
    $novoinput2 = $query->fetchAll(PDO::FETCH_ASSOC);    
    }
    $conexao = null;  
    } catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
    return true;
    } 

    if($_REQUEST){
    $inputNomeFantasia = $_REQUEST["inputNomeFantasia"];
    $inputCNPJ = $_REQUEST["inputCNPJ"];
    $inputRazaoSocial = $_REQUEST["inputRazaoSocial"];
    $inputEndereco = $_REQUEST["inputEndereco"];
    $inputAeroporto = $_REQUEST["inputAeroporto"];
    $inputEsata = $_REQUEST["inputEsata"];
    $inputTelefoneEmpresa = $_REQUEST["inputTelefoneEmpresa"];
    $inputEmailEmpresa = $_REQUEST["inputEmailEmpresa"];
    $inputNomeResponsavel = $_REQUEST["inputNomeResponsavel"];
    $inputTelefoneResponsavel = $_REQUEST["inputTelefoneResponsavel"];
    $inputEmailResponsavel = $_REQUEST["inputEmailResponsavel"];

    if($inputNomeFantasia == null || $inputCNPJ == null || 
        $inputRazaoSocial == null || $inputEmailEmpresa == null
        || !filter_var($inputEmailEmpresa, FILTER_VALIDATE_EMAIL) 
        || $inputEndereco == null || $inputAeroporto == null || $inputEsata == null 
        || $inputNomeResponsavel == null){
        $validouCadastro = 2;
    } else {

    $arrayAssocEsata = [
        "nomeFantasia" => $inputNomeFantasia,
        "CNPJ" => $inputCNPJ,
        "razaoSocial" => $inputRazaoSocial, 
        "endereco" => $inputEndereco,
        "aeroporto" => $inputAeroporto,
        "tipoEsata" => $inputEsata,
        "telefoneEmpresa" => $inputTelefoneEmpresa, 
        "emailEmpresa" => $inputEmailEmpresa,
        "nomeResponsavel" => $inputNomeResponsavel,
        "telefoneResponsavel" => $inputTelefoneResponsavel,
        "emailResponsavel" => $inputEmailResponsavel
    ];
    $adicionou = adicionarEsata($arrayAssocEsata);
    if ($adicionou == true){
        $validouCadastro = 1;
    }
}
}
?>