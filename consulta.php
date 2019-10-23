
<?php
  include_once("conexao.php");
  $result_p = "SELECT * FROM tb_dadospessoais ORDER BY id DESC";
  $resultado_cursos = mysqli_query($conexao, $result_p);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Casa do Empreendedor</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
    <br>
    <h4 style=" text-align: right; margin-right: 115px;">
      <a href="categorias.php"><input type="submit" name="voltar" value="Voltar" class="btn btn-primary" />
      </a> 
    </h4>

   <h4>
        <a href="form.php" style=" text-align: right; margin-left: 115px; text-decoration: none">Adicionar novos curriculos</a>
   </h4> 
  
    <form name="" action="buscar.php" method="POST" align="Right" style="margin-right: 115px;">
        <input type="text" name="busca" placeholder="Digite para localizar um curriculo" size="40"/>
        <input type="submit" name="buscar" value="Buscar"/>
    </form>

    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Currículos</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Experiência</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              <?php while($rows_p = mysqli_fetch_assoc($resultado_cursos)){?>
                <tr>
                  <td><?php echo $rows_p['id']; ?></td>
                  <td><?php echo $rows_p['nome']; ?></td>
                  <td><?php echo $rows_p['exp']; ?></td>
                  <td>
                    <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_p['id']; ?>">Consultar curriculo</button>

                    <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $rows_p['id']; ?>" data-whatevernome="<?php echo $rows_p['nome']; ?>" data-whatevernacionalidade="<?php echo $rows_p['nacionalidade']; ?>" data-whateversexo="<?php echo $rows_p['sexo']; ?>" data-whatevernaturalidade="<?php echo $rows_p['naturalidade']; ?>" data-whateverbairro="<?php echo $rows_p['bairro']; ?>" data-whateverendereco="<?php echo $rows_p['endereco']; ?>" data-whateverestadocivil="<?php echo $rows_p['estadocivil']; ?>" data-whatevercep="<?php echo $rows_p['cep']; ?>" data-whateverestado="<?php echo $rows_p['estado']; ?>" data-whatevercontato="<?php echo $rows_p['contato']; ?>" data-whateveremail="<?php echo $rows_p['email']; ?>" data-whateverpis="<?php echo $rows_p['pis']; ?>" data-whateverescolaridade="<?php echo $rows_p['escolaridade']; ?>" data-whateverformacao="<?php echo $rows_p['formacao']; ?>" data-whateverexperiencia="<?php echo $rows_p['experiencia']; ?>" data-whateverobjetivo="<?php echo $rows_p['objetivo']; ?>" data-whatevercursos="<?php echo $rows_p['cursos']; ?>" data-whateverperfil="<?php echo $rows_p['perfil']; ?>" data-whateverdetalhes="<?php echo $rows_p['detalhes']; ?>">Editar</button>

                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $rows_p['id'] ?>" data-whatever="<?php echo $rows_p['id']; ?>" data-whatevernome="<?php echo $rows_p['nome']; ?>"data-whateverdetalhes="<?php echo $rows_p['detalhes']; ?>">Excluir</button>

  
                  </td>
                </tr>
             
                <!-- Modal Consultar-->
                <div class="modal fade" id="myModal<?php echo $rows_p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_p['nome']; ?></h4>
                      </div>
                      <div class="modal-body" align="center" style="color:black;">
                        <h4 style="border: 1px solid powderblue;">ID</h4>
                        <p><?php echo $rows_p['id']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Nome</h4>
                        <p><?php echo $rows_p['nome']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Data de Nascimento</h4>
                        <p><?php echo $rows_p['datadenasc']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Sexo</h4>
                        <p><?php echo $rows_p['sexo']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Nacionalidade</h4>
                        <p><?php echo $rows_p['nacionalidade']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Naturalidade</h4>
                        <p><?php echo $rows_p['naturalidade']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Bairro</h4>
                        <p><?php echo $rows_p['bairro']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Endereço</h4>
                        <p><?php echo $rows_p['endereco']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Estado Civil</h4>
                        <p><?php echo $rows_p['estadocivil']; ?></p>
                        <h4 style="border: 1px solid powderblue;">CEP</h4>
                        <p><?php echo $rows_p['cep']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Estado</h4>
                        <p><?php echo $rows_p['estado']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Contato</h4>
                        <p><?php echo $rows_p['contato']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Email</h4>
                        <p><?php echo $rows_p['email']; ?></p>
                        <h4 style="border: 1px solid powderblue;">PIS</h4>
                        <p><?php echo $rows_p['pis']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Escolaridade</h4>
                        <p><?php echo $rows_p['escolaridade']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Formação</h4>
                        <p><?php echo $rows_p['formacao']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Experiência</h4>
                        <p><?php echo $rows_p['experiencia']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Categoria</h4>
                        <p><?php echo $rows_p['exp']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Ojetivo</h4>
                        <p><?php echo $rows_p['objetivo']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Cursos</h4>
                        <p><?php echo $rows_p['cursos']; ?></p>
                        <h4 style="border: 1px solid powderblue;">Perfil</h4>
                        <p><?php echo $rows_p['perfil']; ?></p>

                        <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Fim Modal -->

                <!-- Modal excluir -->
                <div class="modal fade" id="deleteModal<?php echo $rows_p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="examplemodalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Curriculo</h4>
                </div>
                <div class="modal-body">
                <?php   echo "Você realmente deseja excluir esse curriculo? ".$rows_p['nome']; ?>
                </div>
                <div class="modal-footer">

                <button type="button" class="btn btn-primary" data-dismiss="modal">Não</button>
                <a href="excluir.php?id=<?php echo $rows_p['id']; ?>"><button type="button" class="btn btn-secundary">Sim</button></a>
                </div>
                </div>
                </div>
                </div>
                <!-- Fim Modal -->

              <?php } ?>
            </tbody>
           </table>
        </div>
      </div>    
    </div>
    
    
    
    <!-- Modal Editar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Curriculo</h4>
        </div>
        <div class="modal-body">
        <form method="POST" action="alt.php" enctype="multipart/form-data">
          <div class="form-group">

          <label for="recipient-name" class="control-label">Nome:</label>
          <input name="nome" type="text" class="form-control" id="recipient-name">

          <label for="recipient-name" class="control-label">Data de Nascimento:</label>
          <input name="data" type="date" class="form-control" id="recipient-name">

          <label for="recipient-name" class="control-label">Sexo:</label>
          <input name="sexo" type="text" class="form-control" id="recipient-sexo">

          <label for="recipient-name" class="control-label">Nacionalidade:</label>
          <input name="nacionalidade" type="text" class="form-control" id="recipient-nacionalidade">

          <label for="recipient-name" class="control-label">Naturalidade:</label>
          <input name="naturalidade" type="text" class="form-control" id="recipient-naturalidade">

          <label for="recipient-name" class="control-label">Bairro:</label>
          <input name="bairro" type="text" class="form-control" id="recipient-bairro">

          <label for="recipient-name" class="control-label">Endereço:</label>
          <input name="endereco" type="text" class="form-control" id="recipient-endereco">

          <label for="recipient-name" class="control-label">Estado civil:</label>
          <input name="estadocivil" type="text" class="form-control" id="recipient-estadocivil">

          <label for="recipient-name" class="control-label">CEP:</label>
          <input name="cep" type="text" class="form-control" id="recipient-cep">

          <label for="recipient-name" class="control-label">Estado:</label>
          <input name="estado" type="text" class="form-control" id="recipient-estado">

          <label for="recipient-name" class="control-label">Contato:</label>
          <input name="contato" type="text" class="form-control" id="recipient-contato">

          <label for="recipient-name" class="control-label">Email:</label>
          <input name="email" type="text" class="form-control" id="recipient-email">

          <label for="recipient-name" class="control-label">PIS:</label>
          <input name="pis" type="text" class="form-control" id="recipient-pis">

          <label for="recipient-name" class="control-label">Escolaridade:</label>
          <input name="escolaridade" type="text" class="form-control" id="recipient-escolaridade">

          <label for="recipient-name" class="control-label">Formação:</label>
          <input name="formacao" type="text" class="form-control" id="recipient-formacao">

          <label for="recipient-name" class="control-label">Experiência:</label>
          <input name="experiencia" type="text" class="form-control" id="recipient-experiencia">

          <label for="recipient-name" class="control-label">Objetivo:</label>
          <input name="objetivo" type="text" class="form-control" id="recipient-objetivo">

          <label for="recipient-name" class="control-label">Cursos:</label>
          <input name="cursos" type="text" class="form-control" id="recipient-cursos">

          <label for="recipient-name" class="control-label">Perfil:</label>
          <input name="perfil" type="text" class="form-control" id="recipient-perfil">
  
          </div>
        <input name="id" type="hidden" class="form-control" id="id-p" value="">
        
        
        <button type="submit" class="btn btn-success" >Editar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
       
        </form>
      </div>  
      </div>
      </div>
      </div>
      <!-- Fim Modal -->
          

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      var recipientnome = button.data('whatevernome')
      var recipientsexo = button.data('whateversexo')
      var recipientnacionalidade = button.data('whatevernacionalidade')
      var recipientnaturalidade = button.data('whatevernaturalidade')
      var recipientbairro = button.data('whateverbairro')
      var recipientendereco = button.data('whateverendereco')
      var recipientestadocivil = button.data('whateverestadocivil')
      var recipientcep = button.data('whatevercep')
      var recipientestado = button.data('whateverestado')
      var recipientcontato = button.data('whatevercontato')
      var recipientemail = button.data('whateveremail')
      var recipientpis = button.data('whateverpis')
      var recipientformacao = button.data('whateverformacao')
      var recipientexperiencia = button.data('whateverexperiencia')
      var recipientcategoria = button.data('whatevercategoria')
      var recipientobjetivo = button.data('whateverobjetivo')
      var recipientcursos = button.data('whatevercursos')
      var recipientperfil = button.data('whateverperfil')
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('ID ' + recipient)
      modal.find('#id-p').val(recipient)
      modal.find('#recipient-name').val(recipientnome)
      modal.find('#recipient-sexo').val(recipientsexo)
      modal.find('#recipient-nacionalidade').val(recipientnacionalidade)
      modal.find('#recipient-naturalidade').val(recipientnaturalidade)
      modal.find('#recipient-bairro').val(recipientbairro)
      modal.find('#recipient-endereco').val(recipientendereco)
      modal.find('#recipient-estadocivil').val(recipientestadocivil)
      modal.find('#recipient-cep').val(recipientcep)
      modal.find('#recipient-estado').val(recipientestado)
      modal.find('#recipient-contato').val(recipientcontato)
      modal.find('#recipient-email').val(recipientemail)
      modal.find('#recipient-pis').val(recipientpis)
      modal.find('#recipient-formacao').val(recipientformacao)
      modal.find('#recipient-experiencia').val(recipientexperiencia)
      modal.find('#recipient-categoria').val(recipientcategoria)
      modal.find('#recipient-objetivo').val(recipientobjetivo)
      modal.find('#recipient-cursos').val(recipientcursos)
      modal.find('#recipient-perfil').val(recipientperfil)
    })
  </script>
  </body>
</html>