<?php
include '../../model/database.php';
$aeroportosArray = [];
$validouCadastroU = null;



    function aeroportoUsuario($aeroportosArray){
        try{
          global $conexao;
          global $aeroportosArray;
               
          $query = $conexao->prepare("SELECT id_aeroporto, nome from aeroportos");
          $query->execute();
          $aeroportosArray = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $Exception){
              echo $Exception->getMessage();
          }
        }
    
    function adicionarUsuario($arrayAssocUsuario){
        try{
            global $conexao;
            
        $query = $conexao->prepare("INSERT INTO usuarios(nome, sobrenome, email, telefone, cpf, funcao, aeroporto, senha, aut)  
                                        VALUES(:nome, :sobrenome, :email, :telefone, :cpf, :funcao, :aeroporto, :senha, :aut);");
    
        $query->execute([
            ':nome' => $arrayAssocUsuario["primeiroNome"],
            ':sobrenome' => $arrayAssocUsuario["ultimoNome"],
            ':email' =>  $arrayAssocUsuario["email"],
            ':telefone' => $arrayAssocUsuario["telefone"],
            ':cpf' => $arrayAssocUsuario["CPF"],
            ':funcao' => $arrayAssocUsuario["funcao"],
            ':aeroporto' => $arrayAssocUsuario["aeroporto"],
            ':senha' => $arrayAssocUsuario["senha"],
            ':aut' => 0
        ]);
    
        $novoUsuario = $query->fetchAll(PDO::FETCH_ASSOC);
    
        $conexao = null;  
          
        } catch(PDOException $Exception){
            echo $Exception->getMessage();
        }
        return true;
        }

    if($validouCadastroU != 1){
        aeroportoUsuario($aeroportosArray);
        }

    if($_REQUEST){
    $inputPrimeiroNome = $_REQUEST["inputPrimeiroNome"];
    $inputUltimoNome = $_REQUEST["inputUltimoNome"];
    $inputEmail = $_REQUEST["inputEmail"];
    $inputTelefone = $_REQUEST["inputTelefone"];
    $inputCPF = $_REQUEST["inputCPF"];
    $inputFuncao = $_REQUEST["inputFuncao"];
    $inputAeroporto = $_REQUEST["inputAeroporto"];
    $inputSenha = $_REQUEST["inputSenha"];
        

    if($inputPrimeiroNome == null || $inputUltimoNome == null || 
    strlen($inputTelefone) != 9 || $inputAeroporto == null 
    || $inputEmail == null || $inputSenha == null || !filter_var($inputEmail, FILTER_VALIDATE_EMAIL)
    ){
        $validouCadastroU = 2;
    } else {

    $arrayAssocUsuario = [
        "primeiroNome" => $inputPrimeiroNome,
        "ultimoNome" => $inputUltimoNome,
        "email" => $inputEmail, 
        "telefone" => $inputTelefone,
        "CPF" => $inputCPF, 
        "funcao" => $inputFuncao,
        "aeroporto" => $inputAeroporto, 
        "senha" => $inputSenha
];
    $adicionou = adicionarUsuario($arrayAssocUsuario);
    if ($adicionou == true){
        $validouCadastroU = 1;
    }
}
}


    
        
?>