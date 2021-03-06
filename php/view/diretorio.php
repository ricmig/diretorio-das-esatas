<?php
    include '../controller/gerenciarEsataController.php';
    include '../controller/buscarDiretorioController.php';
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
  <link href="../../css/sb-admin.css" rel="stylesheet">
  <link href="../../css/style2.css" rel="stylesheet">
  
</head>
<body>          
      <div class="">                     
        <div class="div-diretorio">
            
          <div class="table-title">
            <div class="row">
              <div class="col-sm-8 header-dir mt-3"><h2>Diretório Eletrônico das Esatas do Brasil</b></h2></div>
          </div>

          <form action="diretorio.php" method="get">
    <div class="form-group">
        <div class="col-sm-8 mt-3"><h5>Filtrar por Aeroporto</b></h5></div>
          <div class="input-group">
            <select class="custom-select form-control" name="aeroportoFiltro" id="inputGroupSelect04">
            <option>Selecione Aeroporto</option>
            <?php foreach ($pegarAeroportos as $key => $value): ?>
                <option value="<?php echo $value["id_aeroporto"];?>"><?php echo $value["nome"] ; ?></option>
            <?php endforeach; ?>
            </select>

            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Filtrar</button>
            </div>
          </div>
      </div>
    </form>


    <table class="table" style="width:100%">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome Fantasia</th>
            <th scope="col">Endereço</th>
            <th scope="col" style="text-align:center;">Aeroportos</th>
            <th scope="col"style="text-align:center;">Atividades</th>
            <th scope="col" style="text-align:center;">Contatos</th>
        </tr>
    </thead>
    <tbody>
        <tr scope="row">
        <?php if($filtroAeroporto == 0):?>
          <?php foreach($esataArray as $key => $value) : ?>
           <td> <?php echo $value['nomefantasia']; ?></td>
            <td><?php echo $value['endereco']; ?></td>
            <td style="text-align:center;"><a class="btn btn-outline-light btn-sm" title="Aeroportos" data-toggle="modal" data-target='#modalAeroporto<?php echo $value['id_esata']; ?>' ><i class="fas fa-list"></i></i></a></td>
            <td style="text-align:center;"><a class="btn btn-outline-light btn-sm" title="Atividades" data-toggle="modal" data-target='#modalAtividade<?php echo $value['id_esata']; ?>' ><i class="fas fa-list"></i><a></td>
            <td style="text-align:center;"><a class="btn btn-outline-light btn-sm" title="Atividades" data-toggle="modal" data-target='#modalContatos<?php echo $value['id_esata']; ?>' ><i class="fas fa-list"></i><a></td>
                    
<!-- modal aeroporto -->
<div class="modal fade" id="modalAeroporto<?php echo $value['id_esata']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aeroportos da <?php echo $value["nomefantasia"]?>:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body card">
        <ul class="list-group list-group-flush">
        <?php mostrarAeroportos($value["id_esata"]); ?>
        <?php foreach($aeroportos as $aeroporto): ?>                                    
        <li class="list-group-item"><?php echo idEmAeroportos($aeroporto["id_aeroporto"]) ; ?></li>
        <?php endforeach; ?>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- fim no modal aeroporto -->
<!-- modal atividades -->
<div class="modal fade" id="modalAtividade<?php echo $value['id_esata']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atividades da <?php echo $value["nomefantasia"]; ?>:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body card">
        <ul class="list-group list-group-flush">
        <?php mostrarAtividade($value["id_esata"]); ?>
        <?php foreach($atividades as $atividade): ?>                                    
            <li class="list-group-item"><?php 
            if($atividade["atividades_tabela"] == 'modalidade-2'){
            echo 'Abastecimento de Combustível e Lubrificantes';
            } elseif($atividade["atividades_tabela"] == 'modalidade-3'){
              echo 'Atendimento de Aeronaves';
            } elseif($atividade["atividades_tabela"] == 'modalidade-4'){
              echo 'Atendimento e Controle de Desembarque de Passageiros';
            } elseif($atividade["atividades_tabela"] == 'modalidade-5'){
              echo 'Atendimento e Controle de Embarque de Passageiros';
            } elseif($atividade["atividades_tabela"] == 'modalidade-6'){
              echo 'Comissaria';
            }elseif($atividade["atividades_tabela"] == 'modalidade-7'){
              echo 'Despacho Operacional de Voo';
            }elseif($atividade["atividades_tabela"] == 'modalidade-8'){
              echo 'Limpeza de Aeronaves';
            }elseif($atividade["atividades_tabela"] == 'modalidade-9'){
              echo 'Movimentação de Carga';
            }elseif($atividade["atividades_tabela"] == 'modalidade-10'){
              echo 'Reboque de Aeronaves';
            }elseif($atividade["atividades_tabela"] == 'modalidade-11'){
              echo 'Transporte de Superfície';
            }elseif($atividade["atividades_tabela"] == 'modalidade-13'){
              echo 'Entrevista de Passageiro';
            }elseif($atividade["atividades_tabela"] == 'modalidade-14'){
              echo 'Inspeção de Passageiro, Tripulante, Bagagem de Mão e Pessoal de Serviço';
            }elseif($atividade["atividades_tabela"] == 'modalidade-15'){
              echo 'Inspeção de Bagagem Despachada';
            }elseif($atividade["atividades_tabela"] == 'modalidade-16'){
              echo 'Proteção de Aeronave Estacionada';
            }elseif($atividade["atividades_tabela"] == 'modalidade-17'){
              echo 'Verificação de Segurança de Aeronave (Varredura)';
            }elseif($atividade["atividades_tabela"] == 'modalidade-18'){
              echo 'Proteção da Carga e Outros Itens';
            }elseif($atividade["atividades_tabela"] == 'modalidade-19'){
              echo 'Controle de Acesso às Áreas Restritas de Segurança';
            }elseif($atividade["atividades_tabela"] == 'modalidade-20'){
              echo 'Patrulha Móvel da Área Operacional';
            }elseif($atividade["atividades_tabela"] == 'modalidade-22'){
              echo 'Agenciamento de Carga Aérea';
            }else{
              echo 'erro';
            }
            ?> 
            </li>
        <?php endforeach; ?>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- fim modal atividades --> 
<!-- modal contatos -->
<div class="modal fade" id="modalContatos<?php echo $value['id_esata']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content card">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contatos da <?php echo $value['nomefantasia']; ?>:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      
          <ul class="list-group list-group-flush">         
            <li class="list-group-item"><b>Telefone da empresa:</b> <?php echo $value['telefoneEmp']; ?></li>
            <li class="list-group-item"><b>Email da Empresa:</b>  <?php echo $value['emailEmp']; ?></li>
          <ul>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- fim modal contatos -->
</tr>
</tbody>
<?php endforeach ; ?>
          <?php endif;?>
<!-- início do filtro -->
<?php if($filtroAeroporto == 1):?>
            <a href="diretorio.php">limpar filtro</a>
            <br>
            <h2>Esatas no <?php echo $nomeAero; ?>:</h2>
            
           <?php foreach($esatasBuscadasPorAeroporto as $key => $value) : ?>
           <td> <?php echo $value['nomefantasia']; ?></td>
            <td><?php echo $value['endereco']; ?></td>
            <td style="text-align:center;"><a class="btn btn-outline-light btn-sm" title="Aeroportos" data-toggle="modal" data-target='#modalAeroporto<?php echo $value['id_esata']; ?>' ><i class="fas fa-list"></i></i></a></td>
            <td style="text-align:center;"><a class="btn btn-outline-light btn-sm" title="Atividades" data-toggle="modal" data-target='#modalAtividade<?php echo $value['id_esata']; ?>' ><i class="fas fa-list"></i><a></td>
            <td style="text-align:center;"><a class="btn btn-outline-light btn-sm" title="Atividades" data-toggle="modal" data-target='#modalContatos<?php echo $value['id_esata']; ?>' ><i class="fas fa-list"></i><a></td>
                    
<!-- modal aeroporto -->
<div class="modal fade" id="modalAeroporto<?php echo $value['id_esata']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aeroportos da <?php echo $value["nomefantasia"]?>:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body card">
        <ul class="list-group list-group-flush">
        <?php mostrarAeroportos($value["id_esata"]); ?>
        <?php foreach($aeroportos as $aeroporto): ?>                                    
        <li class="list-group-item"><?php echo idEmAeroportos($aeroporto["id_aeroporto"]) ; ?></li>
        <?php endforeach; ?>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- fim no modal aeroporto -->
<!-- modal atividades -->
<div class="modal fade" id="modalAtividade<?php echo $value['id_esata']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atividades da <?php echo $value["nomefantasia"]; ?>:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body card">
        <ul class="list-group list-group-flush">
        <?php mostrarAtividade($value["id_esata"]); ?>
        <?php foreach($atividades as $atividade): ?>                                    
            <li class="list-group-item"><?php 
            if($atividade["atividades_tabela"] == 'modalidade-2'){
            echo 'Abastecimento de Combustível e Lubrificantes';
            } elseif($atividade["atividades_tabela"] == 'modalidade-3'){
              echo 'Atendimento de Aeronaves';
            } elseif($atividade["atividades_tabela"] == 'modalidade-4'){
              echo 'Atendimento e Controle de Desembarque de Passageiros';
            } elseif($atividade["atividades_tabela"] == 'modalidade-5'){
              echo 'Atendimento e Controle de Embarque de Passageiros';
            } elseif($atividade["atividades_tabela"] == 'modalidade-6'){
              echo 'Comissaria';
            }elseif($atividade["atividades_tabela"] == 'modalidade-7'){
              echo 'Despacho Operacional de Voo';
            }elseif($atividade["atividades_tabela"] == 'modalidade-8'){
              echo 'Limpeza de Aeronaves';
            }elseif($atividade["atividades_tabela"] == 'modalidade-9'){
              echo 'Movimentação de Carga';
            }elseif($atividade["atividades_tabela"] == 'modalidade-10'){
              echo 'Reboque de Aeronaves';
            }elseif($atividade["atividades_tabela"] == 'modalidade-11'){
              echo 'Transporte de Superfície';
            }elseif($atividade["atividades_tabela"] == 'modalidade-13'){
              echo 'Entrevista de Passageiro';
            }elseif($atividade["atividades_tabela"] == 'modalidade-14'){
              echo 'Inspeção de Passageiro, Tripulante, Bagagem de Mão e Pessoal de Serviço';
            }elseif($atividade["atividades_tabela"] == 'modalidade-15'){
              echo 'Inspeção de Bagagem Despachada';
            }elseif($atividade["atividades_tabela"] == 'modalidade-16'){
              echo 'Proteção de Aeronave Estacionada';
            }elseif($atividade["atividades_tabela"] == 'modalidade-17'){
              echo 'Verificação de Segurança de Aeronave (Varredura)';
            }elseif($atividade["atividades_tabela"] == 'modalidade-18'){
              echo 'Proteção da Carga e Outros Itens';
            }elseif($atividade["atividades_tabela"] == 'modalidade-19'){
              echo 'Controle de Acesso às Áreas Restritas de Segurança';
            }elseif($atividade["atividades_tabela"] == 'modalidade-20'){
              echo 'Patrulha Móvel da Área Operacional';
            }elseif($atividade["atividades_tabela"] == 'modalidade-22'){
              echo 'Agenciamento de Carga Aérea';
            }else{
              echo 'erro';
            }
            ?> 
            </li>
        <?php endforeach; ?>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- fim modal atividades --> 
<!-- modal contatos -->
<div class="modal fade" id="modalContatos<?php echo $value['id_esata']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content card">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contatos da <?php echo $value['nomefantasia']; ?>:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      
          <ul class="list-group list-group-flush">         
            <li class="list-group-item"><b>Telefone da empresa:</b> <?php echo $value['telefoneEmp']; ?></li>
            <li class="list-group-item"><b>Email da Empresa:</b>  <?php echo $value['emailEmp']; ?></li>
          <ul>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- fim modal contatos -->
</tr>          
</tbody>
<?php endforeach; ?>
<?php endif; ?>
<!-- final do filtro -->
<!-- final da tabela -->
</table>

          <a href="../../index.php">voltar</a>                     
         </div>                   
      </div>
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/bootstrap.bundle.min.js"></script>
  <script src="../../js/sb-admin-2.min.js"></script>
  <script>
</script>
</body>
</html>