
<!DOCTYPE html>
<html>
<head>
  <title>Casa do Empreendedor</title>
  <meta charset="utf-8">
</head>
<body>
  <br>
  <h4 style=" text-align: right; margin-right: 115px;">
      <a href="inicio.php"><input type="submit" name="voltar" value="Voltar" class="btn btn-primary" />
      </a> 
  </h4>
<center><h1>Cadastro de Currículos</h1></center>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<br>
<br>

<div class="container">
       <table class="table table-striped">
          <tbody>

             <tr>
                <td colspan="1">

                   <form class="well form-horizontal" role="form" action="cadform.php" method="POST">
                    <br>
                    <center><h2>Dados de Identificação</h2></center>
                    <br>
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Nome</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="nome" name="nome" placeholder="Nome" class="form-control" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Data de nascimento</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="data" name="data" placeholder="Data de Nascimento" class="form-control" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Sexo</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span><input id="sexo" name="sexo" placeholder="Sexo" class="form-control" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Nacionalidade</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade" class="form-control" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Naturalidade</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="naturalidade" name="naturalidade" placeholder="Naturalidade" class="form-control" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Bairro/Cidade</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="bairro" name="bairro" placeholder="Bairro/Cidade/Estado" class="form-control" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Endereço Residencial</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="endereco" name="endereco" placeholder="Endereço Residencial" class="form-control" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">CEP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-home"></i></span>
                                  <input id="cep" name="cep" placeholder="CEP" class="form-control" type="text">
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Estado</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="endereco" name="estado" placeholder="Estado" class="form-control" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Estado Civil</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-user"></i></span>
                                  <input id="estado" name="estadocivil" placeholder="Estado Civil" class="form-control" type="text">
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Contato</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-earphone"></i></span>
                                  <input id="contato" name="contato" placeholder="Contato" class="form-control" type="text">
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">PIS</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span><input id="pis" name="pis" placeholder="PIS" class="form-control" type="text"></div>
                            </div>
                         </div>


                        <br>
                        <center><h2>Formação Acadêmica</h2></center>
                        <br>
                              <div class="container">
                                <table class="table table-striped">
                                    <tbody>
                                      <tr>
                                          <td colspan="1">

                                                <fieldset>
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Escolaridade</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><textarea id="fullName" name="escolaridade" placeholder="Escolaridade" class="form-control" type="text"></textarea></div>
                                                    </div>
                                                  </div>
                                                </fieldset>
                                              </fieldset>

                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>


                        <br>
                        <center><h2>Experiência Profissional</h2></center>
                        <br>
                              <div class="container">
                                 <table class="table table-striped">
                                    <tbody>
                                       <tr>
                                          <td colspan="1">
                                             
                                                <fieldset>
                                                 <center><label style="color:#836FFF;">*Selecione uma categoria que corresponda a sua experiência, é possivel selecionar mais de uma opção.</label></center> 
                                                  <!-- Div Serviços Sociais-->
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Serviços Sociais</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group">

                                                          <input type="checkbox" name="sc" value="1"> 
                                                        <br>
                                                        <label>
                                                          Recepcionista <br>
                                                          Markenting Empresarial e Pessoal <br>
                                                          Técnico em Vendas <br>
                                                          Técnico em Logística <br>
                                                          Secretário(a) <br>
                                                          Condutor de Turismo <br>
                                                          Supervisores <br>
                                                          Tradutor <br>
                                                          Bombeiro Hidráulico <br>
                                                          *Entre outros que se encaixem nessa categoria <br>
                                                        </label>
                                                        </div>                                                            
                                                      </div>
                                                   </div>
                                                   <!-- Div Tecnologia-->
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Tecnologia</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group">

                                                          <input type="checkbox" name="tc" value="2">
                                                          <br>
                                                        <label>
                                                          Informática - Basica <br>
                                                          Informática - Intermediária <br>
                                                          Informática - Avançada <br>
                                                          Informática Comercial <br>
                                                          Montador e Reparador de computadores <br>
                                                          Operador de Sistemas <br>
                                                          Telemarketing <br>
                                                          Curso Técnico de informática <br>
                                                          Técnico em Mecânica <br>
                                                          Fotografia e Design <br>
                                                          Engenharia Civil <br>
                                                          Técnico em Metalurgia <br>
                                                          Técnico em Segurança do Trabalho <br>
                                                          Desenvolvedor Web <br>
                                                          *Entre outros que se encaixem nessa categoria <br>
                                                        </label>
                                                        </div>                                                            
                                                      </div>
                                                   </div>
                                                   <!-- Div Educação-->
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Educação</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group">

                                                          <input type="checkbox" name="ed" value="3">
                                                          <br>
                                                          <label>
                                                            Educação Infantil e Lúdico <br>
                                                            Educação Especial <br>
                                                            Educação e Gestão de Pessoas <br>
                                                            Educação Fiscal e Cidadania <br>
                                                            Educação Ambiental <br>
                                                            Educação Inclusiva <br>
                                                            Professor <br>
                                                            *Entre outros que se encaixem nessa categoria <br>
                                                          </label>
                                                        </div>                                                            
                                                      </div>
                                                   </div>
                                                    <!-- Div Saúde-->
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Saúde</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group">

                                                          <input type="checkbox" name="sd" value="4">
                                                          <br>
                                                          <label>
                                                            Técnico em Enfermagem <br>
                                                            Enfermagem <br>
                                                            Psicologia <br>
                                                            *Entre outros que se encaixem nessa categoria <br>
                                                          </label>
                                                        </div>                                                            
                                                      </div>
                                                   </div>
                                                    <!-- Div Auxiliar-->
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Auxiliar</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group">

                                                          <input type="checkbox" name="ax" value="5">
                                                          <br>
                                                          <label>
                                                            Auxiliar Administrativo <br>
                                                            Auxiliar de Indústria <br>
                                                            Auxiliar de Escritório <br>
                                                            Auxiliar de Logística <br>
                                                            Auxiliar de Produção <br>
                                                            Auxiliar de Mineração e Geologia <br>
                                                            Auxiliar Jurídico <br>
                                                            Auxiliar de Recursos Gerais <br>
                                                            Auxiliar Operacional <br>
                                                            Auxiliar de Carpinteiro <br>
                                                            Auxiliar de Bombeiro Hidráulico <br>
                                                            Auxiliar de Almoxarife <br>
                                                            Auxiliar de Edificações <br>
                                                            *Entre outros que se encaixem nessa categoria <br>
                                                          </label>
                                                        </div>                                                            
                                                      </div>
                                                   </div>
                                                    <!-- Div Serviços Gerais-->
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Serviços Gerais</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group">

                                                          <input type="checkbox" name="sg" value="6">
                                                          <br>
                                                          <label>
                                                          Ajudante de Serviços <br>
                                                          Vendedor Autônomo <br>
                                                          Operador de Caixa <br>
                                                          Avulso <br>
                                                          Vigilante <br>
                                                          Servente <br>
                                                          Pintor <br>
                                                          Pedreiro <br>
                                                          *Entre outros que se encaixem nessa categoria <br>

                                                        </label>
                                                        </div>                                                            
                                                      </div>
                                                   </div>
                                                   <center><label style="color:#836FFF;">*Informe aqui locais onde trabalhou e outras informações sobre sua experiência.</label></center> 
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Experiência</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-ok-circle"></i></span><textarea id="fullName" name="experiencia" placeholder="Experiência" class="form-control" type="text"></textarea></div>
                                                   
                                                      </div>
                                                   </div>
                                                   

                                                </fieldset>
                                                </fieldset>

                                          </td>
                                        </tr>
                                    </tbody>
                                 </table>
                              </div>


                        <br>
                        <center><h2>Objetivo Profissional</h2></center>
                        <br>
                              <div class="container">
                                 <table class="table table-striped">
                                    <tbody>
                                       <tr>
                                          <td colspan="1">
                                            
                                                <fieldset>
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Objetivo</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span><textarea id="fullName" name="objetivo" placeholder="Objetivo" class="form-control" type="text"></textarea></div>
                                                      </div>
                                                   </div>
                                                 </fieldset>
                                                </fieldset>

                                          </td>
                                         </tr>
                                    </tbody>
                                 </table>
                              </div>


                          <br>
                          <center><h2>Cursos Profissionalizantes</h2></center>
                          <br>
                              <div class="container">
                                 <table class="table table-striped">
                                    <tbody>
                                       <tr>
                                          <td colspan="1">
                                             
                                                <fieldset>
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Cursos</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span><textarea id="fullName" name="cursos" placeholder="Cursos" class="form-control" type="text"></textarea></div>
                                                      </div>
                                                    </div>
                                                 </fieldset>
                                                </fieldset>
                                           
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>


                          <br>
                          <center><h2>Perfil/Observações</h2></center>
                          <br>
                              <div class="container">
                                 <table class="table table-striped">
                                    <tbody>
                                       <tr>
                                          <td colspan="1">
                                             
                                                <fieldset>
                                                   <div class="form-group">
                                                      <label class="col-md-4 control-label">Perfil/Oservações</label>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><textarea id="fullName" name="perfil" placeholder="Perfil/Oservações" class="form-control" type="text"></textarea></div>
                                                      </div>
                                                   </div>
                                                </fieldset>
                                                </fieldset>
                                         
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>

                      </fieldset>
                      </fieldset>


                    <div class="box-footer" style="border-color: #9966FF#96F">
                    <button type="submit" class="btn btn-primary" style="float: right;">Cadastrar</button>
                    </div>

                </form>
                </td>
             </tr>

          </tbody>
       </table>

  </body>

</html>