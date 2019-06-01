<?php
    include '../include/header-adm.php';
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
        <h5 class="modal-title" id="exampleModalLabel">Aeroportos que a empresa atua:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
        <?php mostrarAeroportos($value["id_esata"]); ?>
        <?php foreach($aeroportos as $aeroporto): ?>                                    
        <li><?php echo idEmAeroportos($aeroporto["id_aeroporto"]) ; ?></li>
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
        <h5 class="modal-title" id="exampleModalLabel">Atividades quea empresa executa:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
        <?php mostrarAtividade($value["id_esata"]); ?>
        <?php foreach($atividades as $atividade): ?>                                    
            <li><?php echo $atividade["atividades_tabela"];?></li>
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
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contatos da Empresa:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <ul>
            <li><b>Telefone da empresa:</b> <?php echo $value['telefoneEmp']; ?></li>
            <li><b>Email da Empresa:</b>  <?php echo $value['emailEmp']; ?></li>
            <li><b>Nome do Responsável:</b> <?php echo $value['nomeResp']; ?></li>
            <li><b>Telefone do Responsável:</b> <?php echo $value['telefoneResp']; ?></li>
            <li><b>Email do Responsável:</b> <?php echo $value['emailResp']; ?></li>
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


