<?php
    include '../include/header-user.php';
    include '../controller/gerenciarEsataController.php';
    include '../controller/buscarAeroportosController.php';


?> 
<div class="table-title">
        <div class="row">
           <div class="col-sm-8 mt-3"><h2>Diretório das Esatas</b></h2></div>
        </div>

    <form action="diretorio-user.php" method="get">
    <div class="form-group">
          <!-- <div class="row"> -->
            <div class="input-group">
              <select class="custom-select form-control" name="aeroportoFiltro" id="inputGroupSelect04">
                <?php if($selectAeroporto == 0): ?>
                  <option value="todas">Filtrar por Aeroporto</option>
                <?php endif;?>
                <?php if($selectAeroporto == 1): ?>
                      <option value="<?php echo $_GET["aeroportoFiltro"];?>"><?php echo $nomeAero; ?></option>
                      <?php endif; ?>                
                <?php foreach ($pegarAeroportos as $key => $value): ?>
                    <?php if($_GET["aeroportoFiltro"] != $value["id_aeroporto"]):?>
                       <option value="<?php echo $value["id_aeroporto"];?>"><?php echo $value["nome"] ; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
              </select>
              <select class="custom-select form-control" name="modalidadeFiltro">
                <?php if($selectModalidade == 0): ?>
                  <option value="todas">Filtrar por Atividade</option>
                <?php endif; ?>
                <?php if($selectModalidade == 1): ?>
                  <option value="<?php echo $_GET["modalidadeFiltro"];?>" class="esata2Hide"><?php 
                    if($_GET["modalidadeFiltro"] == 'modalidade-2'){
                    echo 'Abastecimento de Combustível e Lubrificantes';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-3'){
                      echo 'Atendimento de Aeronaves';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-4'){
                      echo 'Atendimento e Controle de Desembarque de Passageiros';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-5'){
                      echo 'Atendimento e Controle de Embarque de Passageiros';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-6'){
                      echo 'Comissaria';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-7'){
                      echo 'Despacho Operacional de Voo';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-8'){
                      echo 'Limpeza de Aeronaves';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-9'){
                      echo 'Movimentação de Carga';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-10'){
                      echo 'Reboque de Aeronaves';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-11'){
                      echo 'Transporte de Superfície';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-13'){
                      echo 'Entrevista de Passageiro';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-14'){
                      echo 'Inspeção de Passageiro, Tripulante, Bagagem de Mão e Pessoal de Serviço';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-15'){
                      echo 'Inspeção de Bagagem Despachada';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-16'){
                      echo 'Proteção de Aeronave Estacionada';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-17'){
                      echo 'Verificação de Segurança de Aeronave (Varredura)';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-18'){
                      echo 'Proteção da Carga e Outros Itens';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-19'){
                      echo 'Controle de Acesso às Áreas Restritas de Segurança';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-20'){
                      echo 'Patrulha Móvel da Área Operacional';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-22'){
                      echo 'Agenciamento de Carga Aérea';
                    }else{
                      echo 'erro';
                    }                  
                  ?></option>
                  <?php endif; ?>
                <optgroup class="esata1Hide" label="Serviços de Natureza Operacional">
                          <option value="modalidade-2" class="esata2Hide">Abastecimento de Combustível e Lubrificantes</option>
                          <option value="modalidade-3" class="esata3Hide">Atendimento de Aeronaves</option>
                          <option value="modalidade-4" class="esata4Hide">Atendimento e Controle de Desembarque de Passageiros</option>
                          <option value="modalidade-5" class="esata5Hide">Atendimento e Controle de Embarque de Passageiros</option>
                          <option value="modalidade-6" class="esata6Hide">Comissaria</option>
                          <option value="modalidade-7" class="esata7Hide">Despacho Operacional de Voo</option>
                          <option value="modalidade-8" class="esata8Hide">Limpeza de Aeronaves</option>
                          <option value="modalidade-9" class="esata9Hide">Movimentação de Carga</option>
                          <option value="modalidade-10" class="esata10Hide">Reboque de Aeronaves</option>
                          <option value="modalidade-11"class="esata11Hide">Transporte de Superfície</option>
                      </optgroup>
                      <optgroup class="esata12Hide" label="Serviços de Proteção">
                          <option value="modalidade-13" class="esata13Hide">Entrevista de Passageiro</option>
                          <option value="modalidade-14" class="esata14Hide">Inspeção de Passageiro, Tripulante, Bagagem de Mão e Pessoal de Serviço</option>
                          <option value="modalidade-15" class="esata15Hide">Inspeção de Bagagem Despachada</option>
                          <option value="modalidade-16" class="esata16Hide">Proteção de Aeronave Estacionada</option>
                          <option value="modalidade-17" class="esata17Hide">Verificação de Segurança de Aeronave (Varredura)</option>
                          <option value="modalidade-18" class="esata18Hide">Proteção da Carga e Outros Itens</option>
                          <option value="modalidade-19" class="esata19Hide">Controle de Acesso às Áreas Restritas de Segurança</option>
                          <option value="modalidade-20" class="esata20Hide">Patrulha Móvel da Área Operacional</option>
                      </optgroup>
                      <optgroup class="esata21Hide" label="Serviços Comerciais">
                          <option value="modalidade-22" class="esata22Hide">Agenciamento de Carga Aérea</option>
                      </optgroup>

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
        <?php if($filtroAeroporto == 0):?>
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
          <?php endif;?>
<!-- início do filtro -->
<?php if($filtroAeroporto == 1):?>
            <a href="diretorio-user.php">limpar filtro</a>
            <br>
            <h2>Esatas no <?php echo $nomeAero; ?>:</h2>
            <?php if(!$esatasBuscadasPorAeroporto): ?>
           <td>Nenhum empresa foi cadastrada neste aeroporto. </td>
           <?php endif; ?>
           <?php foreach($esatasBuscadasPorAeroporto as $key => $value) : ?>
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
<?php endforeach; ?>
<?php endif; ?>
<!-- final do filtro aeroportos -->
<!-- inicio filtro modalidades -->

<?php if($filtroAeroporto == 2):?>
            <a href="diretorio-user.php">limpar filtro</a>
            <br>
            <h2>
            <?php 
                    if($_GET["modalidadeFiltro"] == 'modalidade-2'){
                    echo 'Abastecimento de Combustível e Lubrificantes';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-3'){
                      echo 'Atendimento de Aeronaves';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-4'){
                      echo 'Atendimento e Controle de Desembarque de Passageiros';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-5'){
                      echo 'Atendimento e Controle de Embarque de Passageiros';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-6'){
                      echo 'Comissaria';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-7'){
                      echo 'Despacho Operacional de Voo';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-8'){
                      echo 'Limpeza de Aeronaves';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-9'){
                      echo 'Movimentação de Carga';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-10'){
                      echo 'Reboque de Aeronaves';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-11'){
                      echo 'Transporte de Superfície';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-13'){
                      echo 'Entrevista de Passageiro';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-14'){
                      echo 'Inspeção de Passageiro, Tripulante, Bagagem de Mão e Pessoal de Serviço';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-15'){
                      echo 'Inspeção de Bagagem Despachada';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-16'){
                      echo 'Proteção de Aeronave Estacionada';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-17'){
                      echo 'Verificação de Segurança de Aeronave (Varredura)';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-18'){
                      echo 'Proteção da Carga e Outros Itens';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-19'){
                      echo 'Controle de Acesso às Áreas Restritas de Segurança';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-20'){
                      echo 'Patrulha Móvel da Área Operacional';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-22'){
                      echo 'Agenciamento de Carga Aérea';
                    }else{
                      echo 'erro';
                    }                  
                  ?>      
                       
            </h2>

            <?php if(!$esatasBuscadasporModalidade): ?>
           <td>Nenhuma empresa foi cadastrada. </td>
           <?php endif; ?>
           <?php foreach($esatasBuscadasporModalidade as $key => $value) : ?>
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
<?php endforeach; ?>
<?php endif; ?>
<!-- final do filtro modalidade -->
<!-- inicio do filtro aeroporto / modalidade -->

<?php if($filtroAeroporto == 3):?>
            <a href="diretorio-user.php">limpar filtro</a>
            <br>
            <h2>
            <?php 
                    if($_GET["modalidadeFiltro"] == 'modalidade-2'){
                    echo 'Abastecimento de Combustível e Lubrificantes';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-3'){
                      echo 'Atendimento de Aeronaves';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-4'){
                      echo 'Atendimento e Controle de Desembarque de Passageiros';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-5'){
                      echo 'Atendimento e Controle de Embarque de Passageiros';
                    } elseif($_GET["modalidadeFiltro"] == 'modalidade-6'){
                      echo 'Comissaria';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-7'){
                      echo 'Despacho Operacional de Voo';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-8'){
                      echo 'Limpeza de Aeronaves';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-9'){
                      echo 'Movimentação de Carga';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-10'){
                      echo 'Reboque de Aeronaves';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-11'){
                      echo 'Transporte de Superfície';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-13'){
                      echo 'Entrevista de Passageiro';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-14'){
                      echo 'Inspeção de Passageiro, Tripulante, Bagagem de Mão e Pessoal de Serviço';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-15'){
                      echo 'Inspeção de Bagagem Despachada';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-16'){
                      echo 'Proteção de Aeronave Estacionada';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-17'){
                      echo 'Verificação de Segurança de Aeronave (Varredura)';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-18'){
                      echo 'Proteção da Carga e Outros Itens';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-19'){
                      echo 'Controle de Acesso às Áreas Restritas de Segurança';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-20'){
                      echo 'Patrulha Móvel da Área Operacional';
                    }elseif($_GET["modalidadeFiltro"] == 'modalidade-22'){
                      echo 'Agenciamento de Carga Aérea';
                    }else{
                      echo 'erro';
                    }                  
                  ?>      
            no aeroporto <?php echo $nomeAero; ?>   
            </h2>
           <?php if(!$esatasModAero): ?>
           <td>Nenhuma empresa foi cadastrada. </td>
           <?php endif; ?>
            <?php foreach($esatasModAero as $key => $value) : ?>
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
<?php endforeach; ?>
<?php endif; ?>
<!-- final do filtro aeroporto / modalidade -->
<!-- final da tabela -->
</table>

<?php 
    include '../include/footer.php';
?>

