<?php 
session_start();
if(isset($_SESSION["nome"])){ 
}else {
header("Location: ../view/login/login.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin - Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../../css/sb-admin.css" rel="stylesheet">
  <link href="../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/app.css"> 
</head>
<body id="page-top">
    <div id="wrapper">
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../view/diretorio-adm.php">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-plane"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Diretório das Esatas
                        </div>
                    </a>
                    <hr class="sidebar-divider my-0">
                    <hr class="sidebar-divider">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                            aria-expanded="true" aria-controls="collapseUtilities2">
                            <i class="fas fa-user"></i>
                            <span>Olá <?php echo $_SESSION["nome"]; ?>!</span>
                        </a>
                        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="../controller/logoutController.php?sair=1">Logout</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Gerenciar</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="../view/gerenciar-aeroporto-adm.php">Aeroportos</a>
                                <a class="collapse-item" href="../view/gerenciar-usuario-adm.php">Usuários</a>
                                <a class="collapse-item" href="../view/gerenciar-esata-adm.php">Esatas</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                            aria-expanded="true" aria-controls="collapseUtilities">
                            <i class="fab fa-wpforms"></i>
                            <span>Cadastrar</span>
                        </a>
                        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="../view/cadastrar-aeroporto-adm.php">Aeroportos</a>
                                <a class="collapse-item" href="../view/cadastrar-usuario-adm.php">Usuários</a>
                                <a class="collapse-item" href="../view/cadastrar-esata-adm.php">Esatas</a>
                            </div>
                        </div>
                    </li>
                    <hr class="sidebar-divider">
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
                </ul>
            <!-- final da navbar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="table-wrapper">
                        <!-- final da view includeHeader -->