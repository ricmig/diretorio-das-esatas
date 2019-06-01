<?php
session_start();
$joinUsuariosArray = [];

function sendMail($de,$para,$mensagem,$assunto)
{
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    try {
      $mail->SMTPAuth   = true;
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPSecure = "tls"; #remova se nao usar gmail
     $mail->Port       = 587;                  #remova se nao usar gmail
      $mail->Username   = 'elevadorcultural@gmail.com';
      $mail->Password   = 'stargate';
      $mail->AddAddress($para);
     $mail->AddReplyTo($de);
     $mail->SetFrom($de);
      $mail->Subject = $assunto;
      $mail->MsgHTML($mensagem);
      $mail->Send();    
      $envio = true;
    } catch (phpmailerException $e) {
      $envio = false;
    } catch (Exception $e) {
      $envio = false;
    }
    return $envio;
}
$inputPrimeiroNome = $_REQUEST["inputPrimeiroNome"];
$inputUltimoNome = $_REQUEST["inputUltimoNome"];
$inputEmail = $_REQUEST["inputEmail"];
$endereco = $_REQUEST["inputTelefone"];
$inputCPF = $_REQUEST["inputCPF"];
$inputFuncao = $_REQUEST["inputFuncao"];
$inputText = $_REQUEST["inputText"];
$inputAeroporto = $_REQUEST["inputAeroporto"];

    if(
    $inputPrimeiroNome == null 
    || $inputUltimoNome == null 
    || $inputEmail == null
    || $endereco == null     
    ){
    $_SESSION["erro"] = 1;
    header('Location: register.php');
} else{
    $_SESSION["sucesso"] = 1;


    $arrayNovoUsuario = [
        "primeiroNome" => $inputPrimeiroNome,
        "ultimoNome" => $inputUltimoNome,
        "email" => $inputEmail, 
        "endereco" => $endereco,
        "cpf" => $inputCPF,
        "funcao" => $inputFuncao, 
        "texto" => $inputText,
        "aeroporto" => $inputAeroporto
    ];

    $de = 'administrativo@abesata.org';
    $para = 'administrativo@abesata.org';
    $mensagem = $arrayNovoUsuario;
    $assunto = "Solicitação de novo cadastro";
    sendMail($de,$para,$mensagem,$assunto);
    header('Location: register.php');
}









?>