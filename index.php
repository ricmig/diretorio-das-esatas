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
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">  
  <link rel="stylesheet" href="css/app.css"> 
</head>
<body>          
              <div class="classe">
                  <div>  
                    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="http://www.abesata.org/br/contato/">Fale Conosco</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#teste">Saiba Mais</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="php/view/login/login.php">Adicionar Esata</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="php/view/login/login-admin.php">Admin</a>
                            </li>
                            
                          </ul>
                      </nav>
                    </div>         
                  <div class="div">
                    <div class="card text-center" id="cartao" style="width: 34rem;">
                    <img src="img/aircrafts-ground-handling.jpg" width="130px" class="card-img-top img-index" alt="...">
                        <div class="card-body">
                        <h1 class="card-title"id="display-1">Diretório das Empresas<br> de Ground Handling no Brasil</h1>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat provident neque fugiat, porro nesciunt quaerat esse autem veritatis repellendus  </p>                        
                          <a href="php/view/diretorio.php"><button class="btn btn-primary btn-lg  ">Acessar Diretório</button></a>
                        </div>
                      </div>
                      <a href="#teste"><i class="fas fa-chevron-down arrow-down"></i></a>
                  </div>
          </div>
      <div id="teste" class="div-fot">
        <div class="primary-content card shadow-sm rounded" id="foot">
        <div class="card-body">
                <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nulla ligula lorem, viverra eget sodales eget, luctus ut risus. Nulla purus 
                sem, eleifend ut justo at, finibus bibendum ex. Duis mollis condimentum metus nec mollis. In nisl eros, elementum non porttitor quis, tristique quis justo. Integer sed facilisis ex. Curabitur dignissim mi semper, pharetra justo vitae, pharetra nunc. Etiam tincidunt neque id dolor vehicula tincidunt vel suscipit lectus. <br> <br>Idealizado e administrado pela<br> <img class='abesata' src="img/logo.png"/></p>
                </div>               
        </div>
          <footer><span> Copyright &copy; Abesata</span></footer>
        </div>                  
     </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
  <script>
var $doc = $('html, body');
$('a').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
</script>
</body>
</html>