<?php
include '../model/database.php';
$mostrarErro = null;
$var2 = 1;
$usuariosArray = [];
$joinUsuariosArray = [];


function usuarios($usuariosArray){
    try{
          global $conexao;
          global $usuariosArray;
               
          $query = $conexao->prepare("SELECT id_usuario, nome, sobrenome, email, telefone, cpf, funcao, aeroporto, senha, aut from usuarios");
          
          $query->execute();
          $usuariosArray = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $Exception){
              echo $Exception->getMessage();
          }
        }

     if($var2==1){   
     usuarios($usuariosArray);        
}


     function arrayUsuariosAeroporto($joinUsuariosArray){

      try{
            global $conexao;
            global $joinUsuariosArray;
                 
            $query = $conexao->prepare("SELECT id_aeroporto, sigla from aeroportos");
            
            $query->execute();
            $joinUsuariosArray = $query->fetchAll(PDO::FETCH_ASSOC);
          } catch(PDOException $Exception){
                echo $Exception->getMessage();
            }
          }
          if($var2==1){
         arrayUsuariosAeroporto($joinUsuariosArray);
        }


function editarUsuarios($arrayAssocEditarUsuario){
    try{
        global $conexao;
        $query = $conexao->prepare("UPDATE usuarios 
        SET nome = :nome, sobrenome = :sobrenome, email = :email, telefone = :telefone, 
        cpf = :cpf, funcao = :funcao, senha = :senha, aut = :aut
        WHERE id_usuario = :id_usuario");

    $query->execute([
        ':nome' => $arrayAssocEditarUsuario["nomeUsuario"],
        ':sobrenome' => $arrayAssocEditarUsuario["sobrenomeUsuario"],
        ':email' =>  $arrayAssocEditarUsuario["emailUsuario"],
        ':telefone' => $arrayAssocEditarUsuario["telefoneUsuario"],
        'cpf' => $arrayAssocEditarUsuario["cpfUsuario"],
        ':funcao' =>  $arrayAssocEditarUsuario["funcaoUsuario"],
        ':senha' => $arrayAssocEditarUsuario["senhaUsuario"],
        ':id_usuario' => $arrayAssocEditarUsuario["idUsuario"],
        ':aut' => $arrayAssocEditarUsuario["aut"]
    ]);

    $usuarioEditado = $query->fetchAll(PDO::FETCH_ASSOC);

    $conexao = null;    

    } catch(PDOException $Exception){
        echo $Exception->getMessage();
    }

    return true;
    } 

if($_POST){
$inputNomeUsuario = $_POST["inputNomeUsuario"];
$inputSobrenomeUsuario = $_POST["inputSobrenomeUsuario"];
$inputEmailUsuario = $_POST["inputEmailUsuario"];
$inputTelefoneUsuario = $_POST["inputTelefoneUsuario"];
$inputCpfUsuario = $_POST["inputCpfUsuario"];
$inputFuncaoUsuario = $_POST["inputFuncaoUsuario"];
$inputSenhaUsuario = $_POST["inputSenhaUsuario"];
$inputIdUsuario = $_POST["inputIdUsuario"];
$inputAut = $_POST["inputAut"];
$enviouMudanca = 1;

if($inputNomeUsuario == null || $inputSobrenomeUsuario == null || 
$inputTelefoneUsuario == null || $inputCpfUsuario == null || 
$inputFuncaoUsuario == null || $inputSenhaUsuario == null){
$mostrarErro = 1;
    return;
 } else {
    $arrayAssocEditarUsuario = [
        "nomeUsuario" => $inputNomeUsuario,
        "sobrenomeUsuario" => $inputSobrenomeUsuario,
        "emailUsuario" => $inputEmailUsuario,
        "telefoneUsuario" => $inputTelefoneUsuario, 
        "cpfUsuario" => $inputCpfUsuario,
        "funcaoUsuario" => $inputFuncaoUsuario,
        "senhaUsuario" => $inputSenhaUsuario,
        "idUsuario" => $inputIdUsuario,
        "aut" => $inputAut
    ];
    
    // var_dump($arrayAssocEditarUsuario);
        editarUsuarios($arrayAssocEditarUsuario);
        $var2 = 2;
}
}




?>