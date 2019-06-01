<?php
include '../model/database.php';
$mostrarErro = null;
$var3 = 1;

function editarEsata($arrayAssocEditarEsata){
    try{
        global $conexao;
        $query = $conexao->prepare("UPDATE esata 
        SET nomefantasia = :nomefantasia, cnpj = :cnpj, razaosocial = :razaosocial, endereco = :endereco, 
        telefoneEmp = :telefoneEmp, emailEmp = :emailEmp, nomeResp = :nomeResp,
        telefoneResp = :telefoneResp, emailResp = :emailResp
        WHERE id_esata = :id_esata");

    $query->execute([
        ':nomefantasia' => $arrayAssocEditarEsata["nomefantasia"],
        ':cnpj' => $arrayAssocEditarEsata["cnpj"],
        ':razaosocial' =>  $arrayAssocEditarEsata["razaosocial"],
        ':endereco' => $arrayAssocEditarEsata["endereco"],
        'telefoneEmp' => $arrayAssocEditarEsata["telefoneEmp"],
        ':emailEmp' =>  $arrayAssocEditarEsata["emailEmp"],
        ':nomeResp' => $arrayAssocEditarEsata["nomeResp"],
        ':telefoneResp' => $arrayAssocEditarEsata["telefoneResp"],
        ':emailResp' => $arrayAssocEditarEsata["emailResp"],
        ':id_esata' => $arrayAssocEditarEsata["id_esata"]

    ]);

    $esataEditado = $query->fetchAll(PDO::FETCH_ASSOC);

    $conexao = null;    

    } catch(PDOException $Exception){
        echo $Exception->getMessage();
    }

    return true;
    } 

if($_POST){
$inputNomeFantasia = $_POST["inputNomeFantasia"];
$inputCnpj = $_POST["inputCnpj"];
$inputRazaoSocial = $_POST["inputRazaoSocial"];
$inputEndereco = $_POST["inputEndereco"];
$inputTelefoneEmpresa = $_POST["inputTelefoneEmpresa"];
$inputEmailEmpresa = $_POST["inputEmailEmpresa"];
$inputNomeResp = $_POST["inputNomeResp"];
$inputTelefoneResp = $_POST["inputTelefoneResp"];
$inputEmailResp = $_POST["inputEmailResp"];
$inputIdEsata = $_POST["inputIdEsata"];
$enviouMudanca = 1;

if($inputNomeFantasia == null || $inputCnpj == null || 
$inputRazaoSocial == null || $inputEmailEmpresa == null || 
$inputNomeResp == null || $inputTelefoneResp == null 
|| $inputEmailResp == null){
$mostrarErro = 1;
    return;
 } else {
    $arrayAssocEditarEsata = [
        "nomefantasia" => $inputNomeFantasia,
        "cnpj" => $inputCnpj,
        "razaosocial" => $inputRazaoSocial,
        "endereco" => $inputEndereco, 
        "telefoneEmp" => $inputTelefoneEmpresa,
        "emailEmp" => $inputEmailEmpresa,
        "nomeResp" => $inputNomeResp, 
        "telefoneResp" => $inputTelefoneResp,
        "emailResp" => $inputEmailResp,
        "id_esata" => $inputIdEsata
    ];
    
    // var_dump($arrayAssocEditarEsata);
        editarEsata($arrayAssocEditarEsata);
        $var3=3;
}
}

$esataArray = [];
$atividadeArray = [];
$atividades = [];
$aeroportos = [];
$idEmAeroportos = [];


function esata($esataArray){

    try{
          global $conexao;
          global $esataArray;
               
          $query = $conexao->prepare("SELECT id_esata, nomefantasia, cnpj, razaosocial, 
          endereco, telefoneEmp, emailEmp, nomeResp, telefoneResp, 
          emailResp, id_adicionado_por from esata WHERE id_adicionado_por = :id_adicionado_por");
          
          $query->execute([
              ":id_adicionado_por" => $_SESSION["id_usuario"]
          ]);
          $esataArray = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $Exception){
              echo $Exception->getMessage();
          }
        }
    if($var3!=3){
     esata($esataArray);
    }

     function mostrarAtividade($id){
      try{
          global $conexao;
          global $atividades;
          
          $query = $conexao->prepare("SELECT atividades_tabela FROM atividade WHERE atividade.id_atividade = :id");
  
      $query->execute([
          ':id' => $id
      ]);
  
      $var = $query->fetchAll(PDO::FETCH_ASSOC);
      
      $atividades = $var;
      return $atividades; 
  
      } catch(PDOException $Exception){
          echo $Exception->getMessage();
      }
      }
      
      function mostrarAeroportos($id){
        try{
            global $conexao;
            global $aeroportos;
            
            $query = $conexao->prepare("SELECT id_aeroporto 
            FROM esataaeroporto WHERE esataaeroporto.id_esata = :id");
    
        $query->execute([
            ':id' => $id
        ]);
    
        $var = $query->fetchAll(PDO::FETCH_ASSOC);
        
        $aeroportos = $var;
        return $aeroportos; 
    
        } catch(PDOException $Exception){
            echo $Exception->getMessage();
        }
        }
        
        function idEmAeroportos($id){
          try{
              global $conexao;
              global $idEmAeroportos;
              
              $query = $conexao->prepare("SELECT nome FROM aeroportos 
              WHERE aeroportos.id_aeroporto = :id");
      
          $query->execute([
              ':id' => $id
          ]);
      
          $var = $query->fetch(PDO::FETCH_ASSOC);
          $idEmAeroportos = $var["nome"];
          return $idEmAeroportos;           
      
          } catch(PDOException $Exception){
              echo $Exception->getMessage();
          }
          }
          
     
?>