<?php 
include '../include/header-user.php';
include '../controller/gerenciarEsataUserController.php';
?>

<div class="table-title">
        <div class="row">
           <div class="col-sm-8 mt-3"><h2>Gerenciar Esatas</b></h2></div>
</div>
                                <?php if($var3==3):?>
                                <div class="alert alert-success" role="alert">
                                Dados cadastrados com sucesso! 
                                </div>
                                <h2><a href="gerenciar-esata-adm.php">Voltar</a></h2>       
                                <?php endif;?>
                <table class="table table-bordered"  id="tamanhoLetra">
                  <thead>
                  <tr>
                    <th style="text-align:center;">Nome da Empresa</th>
                    <th style="text-align:center;">Atividades que exerce</th>
                    <th style="text-align:center;">Aeroportos que atua</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($esataArray as $key => $value) : ?>
                  <tr>
                    <td style="text-align:center;"><?php echo $value["nomefantasia"]; ?></td>
                    <td style="text-align:center;"><button class="btn" title="Atividades" data-toggle="modal" data-target="#<?php echo 'atividade' . $value["id_esata"]; ?>" ><i class="fas fa-list"></i></button></td>
                          <!-- inicio modal atividades -->
                          <div class="modal fade" id="<?php echo 'atividade' . $value["id_esata"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Atividades que executa:</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                               <div class="modal-body">
                                  <ul>
                                    <?php mostrarAtividade($value["id_esata"]); ?>
                                    <?php foreach($atividades as $atividade): ?>                                    
                                    <li><?php echo $atividade["atividades_tabela"];                                  
                                    ?>
                                    </li>
                                    <?php endforeach; ?>
                                  </ul>
                                  <p>Editar atividades que executa:</p>
                                  <div class=col-12>
                                    <select multiple class="form-control " id="inputAtividade" name="inputAtividade[]">
                                        <optgroup class="esata1Hide" label="1 - Serviços de Natureza Operacional">
                                            <option value="modalidade-2"> 1.1 - Abastecimento de Combustível e Lubrificantes</option>
                                            <option value="modalidade-3"> 1.2 - Atendimento de Aeronaves</option>
                                            <option value="modalidade-4"> 1.3 - Atendimento e Controle de Desembarque de Passageiros</option>
                                            <option value="modalidade-5"> 1.4 - Atendimento e Controle de Embarque de Passageiros</option>
                                            <option value="modalidade-6"> 1.5 - Comissaria</option>
                                            <option value="modalidade-7"> 1.6 - Despacho Operacional de Voo</option>
                                            <option value="modalidade-8">- 1.7 - Limpeza de Aeronaves</option>
                                            <option value="modalidade-9"> 1.8 - Movimentação de Carga</option>
                                            <option value="modalidade-10"> 1.9 - Reboque de Aeronaves</option>
                                            <option value="modalidade-11"> 1.10 - Transporte de Superfície</option>
                                        </optgroup>
                                        <optgroup class="esata12Hide" label="2 - Serviços de Proteção">
                                            <option value="modalidade-13" > 2.1 - Entrevista de Passageiro</option>
                                            <option value="modalidade-14" > 2.2 - Inspeção de Passageiro, Tripulante, Bagagem de Mão e Pessoal de Serviço</option>
                                            <option value="modalidade-15" > 2.3 - Inspeção de Bagagem Despachada</option>
                                            <option value="modalidade-16" > 2.4 - Proteção de Aeronave Estacionada</option>
                                            <option value="modalidade-17" > 2.5 - Verificação de Segurança de Aeronave (Varredura)</option>
                                            <option value="modalidade-18" > 2.6 - Proteção da Carga e Outros Itens</option>
                                            <option value="modalidade-19" > 2.7 Controle de Acesso às Áreas Restritas de Segurança</option>
                                            <option value="modalidade-20" > 2.8 - Patrulha Móvel da Área Operacional</option>
                                        </optgroup>
                                      <optgroup class="esata21Hide" label="3 - Serviços Comerciais">
                                          <option value="modalidade-22" class="esata22Hide"> 3.1 - Agenciamento de Carga Aérea</option>
                                      </optgroup>
                                    </select>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                <input type="hidden" name="idEsataH" value="<?php echo $value["id_esata"];?>" >
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- final modal atividades -->
                    <td style="text-align:center;"><button class="btn" title="Aeroportos" data-toggle="modal" data-target="#<?php echo 'aeroportos' . $value["id_esata"]; ?>" ><i class="fas fa-plane-arrival"></i></button></td>
                          <!-- inicio modal aeroportos -->
                                <div class="modal fade" id="<?php echo 'aeroportos' . $value["id_esata"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Aeroportos:</h5>
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
                                        <button type="button" class="btn btn-primary">Savar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          <!-- final modal atividades -->
                    <td style="text-align:center;"><button class="btn" title="Edite" data-toggle="modal" data-target="#<?php echo 'modalEdit' . $value["id_esata"]; ?>"><i class="fas fa-edit"></i></button></td>
                    <td style="text-align:center;"><button class="btn" title="Delete" data-toggle="modal" data-target="#<?php echo 'modalDelete' . $value["id_esata"]; ?>"><i class="fas fa-trash-alt"></i></button></td>
                  <!-- início do modal para deletar esata -->
                  <div class="modal fade" id="<?php echo 'modalDelete' . $value["id_esata"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Deletar Esata</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseja realmente deletar a empresa :<?php echo $value["nomefantasia"]; ?> " ?</p>
                                        <p>Este processo é irreversível.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <a href="deleteEsata.php?delete=<?php echo $value["id_esata"]; ?>" class="btn btn-danger">Deletar Empresa</a>
                                    </div>
                                    </div>
                                </div>
                  </div>
                  <!-- final do modal para deletar esata -->
                  <!-- início do modal editar tabela esata -->
                  <div class="modal fade" id="<?php echo 'modalEdit' . $value["id_esata"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edite as informações abaixo</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <form method="post" action="gerenciar-esata-adm.php">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="inputNomeFantasia" value="<?php echo $value["nomefantasia"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="inputCnpj" value="<?php echo $value["cnpj"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="inputRazaoSocial" value="<?php echo $value["razaosocial"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="inputEndereco" value="<?php echo $value["endereco"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="inputTelefoneEmpresa" value="<?php echo $value["telefoneEmp"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" name="inputEmailEmpresa" value="<?php echo $value["emailEmp"] ; ?>">
                                                            </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="inputNomeResp" value="<?php echo $value["nomeResp"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="inputTelefoneResp" value="<?php echo $value["telefoneResp"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="inputEmailResp" value="<?php echo $value["emailResp"] ; ?>">
                                                            </div>
                                                            <input type="hidden" name="inputIdEsata" value="<?php echo $value["id_esata"] ; ?>">
                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                                                </div>
                                                              
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                        <!-- final do modal editar tabela esata -->
                        <!-- início modal aeroporto -->
                        <!-- final modal aeroporto -->
                        <!-- início modal atividade -->
                        <!-- final modal atividade -->
                  
                  
                  </tr>
                  <?php endforeach ; ?>
              </tbody>
              </table>


                            
<?php 
        include '../include/footer.php';
?>
