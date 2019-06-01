<?php
include '../../controller/cadastrarUsuario2Controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../../../css/sb-admin.css" rel="stylesheet">
  <link href="../../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../css/app.css"> 
</head>
<body class="bg-gradient-primary">
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crie sua conta</h1>
              </div>
            <?php if(isset($_SESSION["sucesso"])): ?>
            <div class="alert alert-success" role="alert">
              Informações enviadas com sucesso!
          </div>
          <?php elseif(isset($_SESSION["erro"])): ?>
          <div class="alert alert-danger" role="alert">
               <h4>Preencha todos os dados corretamente!</h4>
            </div>
          <?php endif; ?>
              <div>
                <p>Para realizar seu cadastro para acessar a área administrativa do Diretório das <abb
                    title="Empresas de Serviços Auxiliares ao Transporte Aéreo">Esatas</abb>, você precisará obter a
                  liberação do administrador.</p>
                <p>Preencha as informações abaixo. Caso aprovado, em breve receberá um email de confirmação. Clique <a href="http://www.abesata.org/br/contato/">aqui</a> para entrar em contato conosco.</p>
              </div>
              <?php if($validouCadastroU == 1): ?>
          <div class="alert alert-success" role="alert">
              Informações enviadas com sucesso!
          </div>
          <?php endif; ?>
          <?php if($validouCadastroU == 2): ?>
          <div class="alert alert-danger" role="alert">
               <h4>Preencha todos os dados corretamente!</h4>
            </div>
          <?php endif; ?>
          <form action="register.php" method="post" class="user">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="inputPrimeiroNome" name="inputPrimeiroNome"
                  placeholder="Primeiro Nome">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="inputUltimoNome" name="inputUltimoNome"
                  placeholder="Último Nome">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="email" class=" form-control form-control-user" id="inputEmail" name="inputEmail" placeholder="Email Address">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="inputTelefone" name="inputTelefone" placeholder="Telefone">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="inputCPF" placeholder="CPF" name="inputCPF">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="inputFuncao" placeholder="Função" name="inputFuncao">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <select class="custom-select my-1 mr-sm-2 b-radius" id="inputAeroporto" name="inputAeroporto">
                  <option select>Escolha o Aeroporto</option>
                  <?php foreach ($aeroportosArray as $key => $value): ?>
                    <option value="<?php echo $value["id_aeroporto"];?>"><?php echo $value["nome"] ; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="inputSenha" placeholder="Senha" name="inputSenha">
              </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-user btn-lg">Cadastrar</button>
            <hr>
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="../../../js/jquery.min.js"></script>
  <script src="../../../js/bootstrap.bundle.min.js"></script>
  <script src="../../../js/sb-admin-2.min.js"></script>
</body>
</html>