<?php 
include '../include/header-adm.php';
include '../controller/gerenciarAeroportoController.php';
?>

<div class="table-title">
        <div class="row">
           <div class="col-sm-8 mt-3"><h2>Gerenciar Aeroportos</b></h2></div>
        </div>
        <?php if($var==1):?>
        <div class="alert alert-success" role="alert">
        Dados cadastrados com sucesso! 
        </div>
        <h2><a href="gerenciar-aeroporto-adm.php">Voltar</a></h2>       
        <?php endif;?>
        <?php if($mostrarErro == 1) : ?>
        <div class="alert alert-danger" role="alert">
        Preencha os dados corretamente!
        </div>
        <?php endif;?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Aeroporto</th>
                                    <th>Sigla ICAO</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                          
                                <?php foreach($aeroportosArray as $key => $value) : ?>
                                <tr>
                                    <td><?php echo $value["nome"] ; ?></td>
                                    <td><?php echo $value["sigla"] ; ?></td>
                                    <td><?php echo $value["cidade"] ; ?></td>
                                    <td><?php echo $value["estado"] ; ?></td>
                                    <td  style="text-align:center;"><button class="btn" data-toggle="modal" data-target="#<?php echo 'model'.$value["id_aeroporto"]; ?>"><i class="fas fa-edit"></button></td>
                                            <div class="modal fade" id="<?php echo 'model'.$value["id_aeroporto"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edite as informações abaixo</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <form method="post" action="gerenciar-aeroporto-adm.php">
                                                            <div class="form-group">
                                                                <input type="texto" class="form-control" name="inputNomeAeroporto" value="<?php echo $value["nome"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="texto" class="form-control" name="inputSiglaAeroporto" value="<?php echo $value["sigla"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="texto" class="form-control" name="inputCidadeAeroporto" value="<?php echo $value["cidade"] ; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                            <select class="custom-select" name="inputEstadoAeroporto">
                                                                    <option value="<?php echo $value["estado"];?>"selected><?php echo $value["estado"];?></option>
                                                                    <?php foreach($estadosBrasileiros as $key) : ?>
                                                                        <?php if($key != $value["estado"]) : ?>
                                                                        <option value="<?php echo $key;?>"><?php echo $key;?></option>
                                                                        <?php endif; ?> 
                                                                    <?php endforeach; ?>
                                                            </select>
                                                            </div>
                                                            </div>
                                                            <input type="hidden" name="inputIdAeroporto" value="<?php echo $value["id_aeroporto"];?>">
                                            
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                  </tr>
                                <?php endforeach ; ?>
                            </tbody>
                        </table>                            
<?php 
        include '../include/footer.php';
?>
