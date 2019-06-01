<?php
include '../../controller/loginController.php';
if($_POST){
  pegarLogin();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../../../css/sb-admin.css" rel="stylesheet">
  <link href="../../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../css/app.css"> 
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-admin-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div>          
                    <img class="rounded mx-auto d-block adminLogo" src="../../../img/logo.png" width="100px">
                  </div>
                  <br>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Área administrativa do diretório das Esatas</h1>
                  </div>
                  <?php if(isset($erro)) : ?>
                      <div class="alert alert-danger" role="alert">
                          Preencha os dados corretamente!
                      </div>
                  <?php endif ; ?>
                  <form method="post" action="login-admin.php" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="inputLogin" name="inputLogin" placeholder="login...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="inputSenha" name="inputSenha" placeholder="senha">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Lembrar minha senha</label>
                      </div>
                    </div>
                    <input type="hidden" name="adm" value="1">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  </form>
                  <hr>
                </div>
              </div>
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
