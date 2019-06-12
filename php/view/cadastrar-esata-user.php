<?php 
include '../include/header-user.php';
include '../controller/cadastrarEsataUsuarioController.php';
?>


<div class="table-title">
        <div class="row">
           <div class="col-sm-8 mt-3"><h2>Cadastrar Esata</b></h2></div>
        </div>
        <ul id="erros">
        
        </ul>
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
          <form action="cadastrar-esata-user.php" method="post" class="user" id="form">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="inputNomeFantasia" name="inputNomeFantasia"
                  placeholder="Nome Fantasia">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="inputCNPJ" name="inputCNPJ"  placeholder="CNPJ">
              </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="inputRazaoSocial" name="inputRazaoSocial" placeholder="Razão Social">
            </div>
            <div class="form-group">
            <input type="text" class="form-control form-control-user" id="inputEndereco" name="inputEndereco" placeholder="Endereço">
            </div>
            <p>Segure a tecla Ctrl/Command para selecionar mais de uma opção.</p>
            <h4 class="alert-heading">Selecione as atividades:</h4>
            <p>Passe o mouse por cima de cada uma das 22 atividades para ler sua descrição segundo a Resolução N° 116, de 20 de Outubro de 2009.</p>
            <div class="form-group row">
                     <h1 id="display"></h1>
                  <div class=col-6>
                    <select multiple class="form-control " id="inputEsata" name="inputEsata[]">
                    <p>Escolha a atividade</p>
                    <option selected value="1"></option>
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
                  </div>
                  <div class="col-6 displayHide">
                        <div class="alert alert-light" id="esata1Display" role="alert">
                        <h4 class="alert-heading">Descrição da Atividade:</h4>
                        <p>Serviços destinados à orientação, organização, preparação e deslocamento de aeronaves,
                        aeronautas, passageiros, bagagens e cargas quando em solo.</p></div>
                        
                        <div class="alert alert-light" id="esata2Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Serviço de armazenagem, abastecimento e transporte de combustíveis e
                        lubrificantes no sítio aeroportuário e seu fornecimento à aeronave segundo
                        padrões e procedimentos certificados pela Autoridade de Aviação Civil ou
                        entidade reguladora competente para dispor sobre a matéria.</p></div>
                        
                        <div class="alert alert-light" id="esata3Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        Apoio na chegada ou saída de voos, envolvendo: Orientação de tripulantes para o cumprimento de formalidades legais;
                        Representação perante às autoridades públicas de imigração, de alfândega, de vigilância sanitária e de agricultura, no que couber a aplicação da
                        legislação pertinente; Operação de pontes de embarque; Sinalização para manobras de aeronaves no solo; Coordenação do atendimento das necessidades de abastecimento de
                        combustíveis, de provisões de serviço de bordo (“comissária”) e de manutenção.</div>
                        
                        <div class="alert alert-light" id="esata4Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Atendimento aos passageiros no desembarque,
                        envolvendo o acompanhamento, orientação e controle, desde a saída da
                        aeronave até a saída da área de acesso restrito, onde as bagagens são
                        recolhidas, conferidas e restituídas aos passageiros.</p></div>

                        <div class="alert alert-light" id="esata5Display" role="alert">
                        <h4 class="alert-heading">Descrição da Atividade:</h4>
                        <p>Atendimento aos passageiros que se apresentam para embarque,
                        verificação de seus bilhetes de passagem e confrontação com seus
                        documentos, conciliação de bagagem, emissão do cartão de embarque,
                        orientação e controle, desde o ponto de recepção até o seu embarque na
                        aeronave.</p></div>

                        <div class="alert alert-light" id="esata6Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Serviço de preparo e ou aquisição, transporte por veículo apropriado e colocação no espaço designado na cabine da aeronave de
                        alimentos e bebidas para consumo dos aeronautas, mecânicos e passageiros embarcados.</p></div>

                        <div class="alert alert-light" id="esata7Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Serviço de apoio técnico à tripulação, que visa ao planejamento operacional do voo, compreendendo
                        cálculos de parâmetros para decolagem, navegação em rota e informações
                        correlatas, tais como dados meteorológicos, NOTAM etc.</p></div>

                        <div class="alert alert-light" id="esata8Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Remoção de lixo, dejetos sanitários, higienização, arrumação e limpeza externa de aeronaves.</p>
                        </div>

                        <div class="alert alert-light" id="esata9Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Transporte entre aeronaves e terminais aeroportuários, manuseio e movimentação nos terminais aeroportuários e
                        áreas de transbordo, bem como a colocação, arrumação e retirada de cargas,
                        bagagens, correios e outros itens, em aeronaves.</p></div>

                        <div class="alert alert-light" id="esata10Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Deslocamento de aeronaves entre pontos da área operacional mediante a utilização de veículos rebocadores.
                        </p></div>

                        <div class="alert alert-light" id="esata11Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Atendimento às necessidades de transporte de passageiros e tripulantes entre aeronaves e terminais
                        aeroportuários.
                        </p></div>
                        <div class="alert alert-light" id="esata12Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Serviços destinados à vigilância, detecção, identificação, proteção e outros aplicados sobre aeronaves,
                        aeronautas, passageiros, bagagens e cargas para segurança da aviação civil contra atos de interferência ilícita executados no sítio
                        aeroportuário.</p>
                        </div>

                        <div class="alert alert-light" id="esata13Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Método preventivo de segurança para verificação de documentos de viagem, identificação de pessoa nãoadmissível, exame visual com a finalidade de garantir que a bagagem do
                        entrevistado seja identificada, permanecendo íntegra e livre de materiais perigosos e/ou proibidos em seu interior.
                        </p></div>

                        <div class="alert alert-light" id="esata14Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Aplicação de meios técnicos ou de outro tipo para detectar armas, explosivos ou outros artefatos perigosos e/ou
                        proibidos que possam ser utilizados para cometer um ato de interferência ilícita que, em caráter eventual, também aplica a metodologia preventiva
                        de segurança, denominada Perfil de Passageiro.</p>
                        </div>

                        <div class="alert alert-light" id="esata15Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Exame do conteúdo da bagagem, por equipamento de Raios X e/ou outros meios, para detecção de
                        materiais perigosos e ou proibidos.</p>
                        </div>

                        <div class="alert alert-light" id="esata16Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Conjunto de medidas, compreendendo a inspeção de pessoas, veículos e equipamentos
                        envolvidos na execução dos serviços de apoio ao voo, bem como da área onde a aeronave se encontra estacionada, com o objetivo de garantir sua
                        integridade.</p>
                        </div>

                        <div class="alert alert-light" id="esata17Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Inspeção de aeronave para busca e detecção de armas, artefatos explosivos, substâncias nocivas ou outros dispositivos que possam ser utilizadas para
                        cometer atos de interferência ilícita contra a aviação civil.</p> 
                        </div>

                        <div class="alert alert-light" id="esata18Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Supervisão e controle de segurança de toda a atividade relacionada com a carga aérea e outros itens,
                        desde a sua origem até o embarque na aeronave, através de métodos e
                        procedimentos de proteção.</p>
                        </div>

                        <div class="alert alert-light" id="esata19Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Verificação das credenciais de pessoas e veículos nos acessos às áreas restritas de segurança, de acordo com os procedimentos estabelecidos ou
                        previstos no Programa de Segurança Aeroportuária (PSA).</p>
                        </div>

                        <div class="alert alert-light" id="esata20Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Atividade de proteção da área operacional, envolvendo os serviços de fiscalização do
                        credenciamento de pessoas e veículos para o trânsito e/ou permanência nessa área, bem como a verificação de suas operações, de acordo com os
                        procedimentos previstos no Programa de Segurança Aeroportuária (PSA)</p>
                        </div>

                        <div class="alert alert-light" id="esata21Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Serviços aos aeronautas, passageiros e remetentes de cargas, para facilitação da aviação civil.</p>
                        </div>

                        <div class="alert alert-light" id="esata22Display" role="alert">
                        <h4 class=" alert-heading">Descrição da Atividade:</h4>
                        <p>Serviço prestado por sociedade empresária organizada para intermediar a venda de transporte de
                        carga aérea, mediante a emissão do respectivo conhecimento aéreo.</p>
                        </div>
                      </div>
                      </div>
                      <hr>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" id="telefoneEmpresa" name="inputTelefoneEmpresa"
                            placeholder="Telefone da Empresa">
                        </div>
                        <div class="col-sm-6">
                          <input type="email" class="form-control form-control-user" name="inputEmailEmpresa" 
                            placeholder="Email da Empresa">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <input type="text" class="form-control form-control-user" name="inputNomeResponsavel" placeholder="Nome do Responsável">
                        </div>
                      </div>      
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" class="form-control form-control-user" id="telefoneResponsavel" name="inputTelefoneResponsavel" 
                            placeholder="Telefone do Responsável">
                        </div>
                        <div class="col-sm-6">
                          <input type="email" class="form-control form-control-user" name="inputEmailResponsavel" 
                            placeholder="Email do Responsável">
                        </div>
                      </div>
                      <input type="hidden" name="inputId" value="<?php echo $_SESSION["id_usuario"];?>">
                      <hr>
                      <button type="submit" id="" class="btn btn-primary btn-user btn-lg">Cadastrar</button>
                      <hr>
          </form>
        </div>
      </div>
      <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

      <script src="../../js/main.js"></script>
      
                   
<?php 
        include '../include/footer.php';
?>
