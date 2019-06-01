<?php
    include '../include/header-user.php';
    include '../controller/gerenciarEsataController.php';
?> 


<div class="table-title">
        <div class="row">
           <div class="col-sm-8 mt-3"><h2>Diretório das Esatas</b></h2></div>
        </div>

        <table class="table" style="width:100%">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome Fantasia</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Endereço</th>
            <th scope="col" style="text-align:center;">Aeroportos</th>
            <th scope="col"style="text-align:center;">Atividades</th>
            <th scope="col" style="text-align:center;">Contatos</th>
        </tr>
    </thead>
    <tbody>
        <tr scope="row">
        <?php foreach($esataArray as $key => $value) : ?>
            <td> <?php echo $value['nomefantasia']; ?></td>
            <td> <?php echo $value['cnpj']; ?> </td>
            <td> <?php echo $value['razaosocial']; ?> </td>
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
            <li class="list-group-item"><b>Nome do Responsável:</b> <?php echo $value['nomeResp']; ?></li>
            <li class="list-group-item"><b>Telefone do Responsável:</b> <?php echo $value['telefoneResp']; ?></li>
            <li class="list-group-item"><b>Email do Responsável:</b> <?php echo $value['emailResp']; ?></li>
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
</table>                            
<?php 
    include '../include/footer.php';
?>

