<?php 
include '../include/header-adm.php';
include '../controller/gerenciarUsuarioController.php';
?>

                                <div class="table-title">
                                        <div class="row">
                                        <div class="col-sm-8 mt-3"><h2>Gerenciar Usuário</b></h2></div>
                                </div>
                                <?php if($mostrarErro == 1) : ?>
                            <div class="alert alert-danger" role="alert">
                              Preencha os dados corretamente!
                            </div>
                       <?php endif;?>
                       <?php if($var2==2):?>
                                <div class="alert alert-success" role="alert">
                                Dados cadastrados com sucesso! 
                                </div>
                                <h2><a href="gerenciar-usuario-adm.php">Voltar</a></h2>       
                                <?php endif;?>
                <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Nome</th>
                              <th>Telefone</th>
                              <th>Email</th>
                              <th>CPF</th>
                              <th>Função</th>
                              <th>Aeroporto</th>
                              <th>Senha</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php if($var2==1): ?>
                        <?php foreach($usuariosArray as $key => $value) : ?>
                          <tr>
                              <td><?php echo $value["nome"] . " " . $value["sobrenome"] ;?></td>
                              <td><?php echo $value["telefone"] ;?></td>
                              <td><?php echo $value["email"] ;?></td>
                              <td><?php echo $value["cpf"] ;?></td>
                              <td><?php echo $value["funcao"] ;?></td>
                              
                              <td>
                                <?php foreach($joinUsuariosArray as $key2 => $value2) : ?>
                                    <?php if($value2["id_aeroporto"] == $value["aeroporto"]) : ?>
                                    <?php echo $value2["sigla"]; ?>
                                    <?php endif; ?> 
                                <?php endforeach; ?>                               
                              </td>
                              <td><?php echo $value["senha"] ;?></td>
                              <td style="text-align:center;">
                                  <button class="edit btn" title="Edit" data-target="#<?php echo 'modelEdit'.$value["id_usuario"]; ?>" data-toggle="modal"><i class="fas fa-edit"></i></button>
                                  <button class="delete btn" title="Delete" data-target="#<?php echo 'modelDelete'.$value["id_usuario"]; ?>" data-toggle="modal" ><i class="fas fa-trash-alt"></i></button>
                              </td>
                                          <!-- início do modal deletar usuario -->
                            <div class="modal fade" id="<?php echo 'modelDelete'.$value["id_usuario"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Deletar Usuário</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p> Deseja realmente deletar o usuário: "<?php echo $value["nome"] . " " . $value["sobrenome"] ;?>" ?</p>
                                        <p>Este processo é irreversível.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="deleteUsuarios.php?delete=<?php echo $value["id_usuario"]; ?>" class="btn btn-danger">Save changes</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            <!-- final do modal deletar tabela usuarios -->
                            <!-- início do modal editar tabela usuarios -->
                                         <div class="modal fade" id="<?php echo 'modelEdit'.$value["id_usuario"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edite as informações abaixo</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <form method="post" action="gerenciar-usuario-adm.php">
                                                            <div class="form-group">
                                                                <input type="texto" class="form-control" name="inputNomeUsuario" value="<?php echo $value["nome"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="texto" class="form-control" name="inputSobrenomeUsuario" value="<?php echo $value["sobrenome"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="texto" class="form-control" name="inputTelefoneUsuario" value="<?php echo $value["telefone"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" name="inputEmailUsuario" value="<?php echo $value["email"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="texto" class="form-control" name="inputCpfUsuario" value="<?php echo $value["cpf"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="texto" class="form-control" name="inputFuncaoUsuario" value="<?php echo $value["funcao"] ; ?>">
                                                            </div>
                                                
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="texto" class="form-control" name="inputSenhaUsuario" value="<?php echo $value["senha"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                    <p>   
                                                                    <?php if( $value['aut'] == 1 ){
                                                                    echo "Usuário autenticado";
                                                                    } else{
                                                                    echo 'Usuário não autenticado';
                                                                };
                                                                ?></p>
                                                                <select class="form-control" name="inputAut">
                                                                    <option value="1">Autenticar</option>
                                                                    <option value="0">Desautenticar</option>
                                                                </select>
                                                            </div>
                                                                <input type="hidden" name="inputIdUsuario" value="<?php echo $value["id_usuario"];?>">
                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                            <!-- final do modal editar tabela usuarios -->
                
                                               </tr>
                          <?php endforeach ; ?>
                                 
                      </tbody>
                <?php endif; ?>
                  </table>
                            
<?php 
        include '../include/footer.php';
?>
