<?php 
include '../include/header-adm.php';
include '../controller/cadastrarAeroportoController.php';
?>
<div class="table-title">
        <div class="row">
           <div class="col-sm-8 mt-3"><h2>Cadastrar Aeroporto</b></h2></div>
        </div>
        <br>
        <?php if($validouCadastro == 1): ?>
            <div class="alert alert-success" role="alert">
                Informações enviadas com sucesso!
            </div>
          <?php endif; ?>
          <?php if($validouCadastro == 2): ?>
          <div class="alert alert-danger" role="alert">
               Preencha os dados corretamente! 
          </div>
          <?php endif; ?>
        <form action="cadastrar-aeroporto-adm.php" method="post" class="user">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="inputNomeAeroporto" name="inputNomeAeroporto" 
                  placeholder="Nome do Aeroporto">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="inputSiglaIcao" name="inputSiglaIcao" placeholder="Sigla IATA">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class=" form-control form-control-user" id="inputCidadeAeroporto" name="inputCidadeAeroporto"
                  placeholder="Cidade">
              </div>
              <div class="col-sm-6">
                <select class="custom-select my-1 mr-sm-2 b-radius" id="inputEstadoAeroporto" name="inputEstadoAeroporto">
                  <option selected>Escolha o Estado</option>
                  <option value="AC">AC</option>
                  <option value="AL">AL</option>
                  <option value="AM">AM</option>
                  <option value="AP">AP</option>
                  <option value="BA">BA</option>
                  <option value="CE">CE</option>
                  <option value="DF">DF</option>
                  <option value="ES">ES</option>
                  <option value="GO">GO</option>
                  <option value="MA">MA</option>
                  <option value="MT">MT</option>
                  <option value="MS">MS</option>
                  <option value="MG">MG</option>
                  <option value="PA">PA</option>
                  <option value="PB">PB</option>
                  <option value="PR">PR</option>
                  <option value="PE">PE</option>
                  <option value="PI">PI</option>
                  <option value="RN">RN</option>
                  <option value="RS">RS</option>
                  <option value="RO">RO</option>
                  <option value="RR">RR</option>
                  <option value="SC">SC</option>
                  <option value="SP">SP</option>
                  <option value="SE">SE</option>
                  <option value="TO">TO</option>
                </select>
              </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-user btn-lg">Cadastrar</button>
            <hr>
          </form>
                            
<?php 
        include '../include/footer.php';
?>
