<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$sexo = $_POST['sexo'];
$nacionalidade = $_POST['nacionalidade'];
$naturalidade = $_POST['naturalidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$estadocivil = $_POST['estadocivil'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$pis = $_POST['pis'];
$escolaridade = $_POST['escolaridade'];
$formacao = $_POST['formacao'];
$experiencia = $_POST['experiencia'];
$objetivo = $_POST['objetivo'];
$cursos = $_POST['cursos'];
$perfil = $_POST['perfil'];

$sql = "UPDATE `tb_dadospessoais` SET `nome`='$nome',`datadenasc`='$data',`sexo`='$sexo',`nacionalidade`='$nacionalidade',`naturalidade`='$naturalidade',`bairro`='$bairro',`endereco`='$endereco',`estadocivil`='$estadocivil',`cep`='$cep',`estado`='$estado',`contato`='$contato',`email`='$email',`pis`='$pis',`escolaridade`='$escolaridade',`formacao`='$formacao',`experiencia`='$experiencia',`objetivo`='$objetivo',`cursos`= '$cursos',`perfil`='$perfil' WHERE id = '$id'";

mysqli_query($conexao, $sql) or die("Falha ao editar o curriculo");

mysqli_close($conexao);

header('Location: categorias.php');

?>