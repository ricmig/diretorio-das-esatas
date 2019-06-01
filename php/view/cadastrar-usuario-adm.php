<?php 
include '../include/header-adm.php';
include '../controller/cadastrarUsuarioController.php';
?>

<div class="table-title">
        <div class="row">
           <div class="col-sm-8 mt-3"><h2>Cadastrar Usuário</b></h2></div>
        </div>
        <?php if($validouCadastroU == 1): ?>
          <div class="alert alert-success" role="alert">
              Informações enviadas com sucesso!
          </div>
          <?php endif; ?>
          <?php if($validouCadastroU == 2): ?>
          <div class="alert alert-danger" role="alert">
               <h4>Preencha todos os dados corretamente!</h4>
            </div>
          <?php endif; ?>
          <form action="cadastrar-usuario-adm.php" method="post" class="user">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="inputPrimeiroNome" name="inputPrimeiroNome"
                  placeholder="Primeiro Nome">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="inputUltimoNome" name="inputUltimoNome"
                  placeholder="Último Nome">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="email" class=" form-control form-control-user" id="inputEmail" name="inputEmail" placeholder="Email Address">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="inputTelefone" name="inputTelefone" placeholder="Telefone">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="inputCPF" placeholder="CPF" name="inputCPF">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="inputFuncao" placeholder="Função" name="inputFuncao">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <select class="custom-select my-1 mr-sm-2 b-radius" id="inputAeroporto" name="inputAeroporto">
                  <option select>Escolha o Aeroporto</option>
                  <?php foreach ($aeroportosArray as $key => $value): ?>
                    <option value="<?php echo $value["id_aeroporto"];?>"><?php echo $value["nome"] ; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="inputSenha" placeholder="Senha" name="inputSenha">
              </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-user btn-lg">Cadastrar</button>
            <hr>
          </form>
                            
<?php 
        include '../include/footer.php';
?>
