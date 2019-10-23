<?php 
include('conexao.php');

$nome = $_POST['nome'];
$data = $_POST['data'];
$sexo = $_POST['sexo'];
$nacionalidade = $_POST['nacionalidade'];
$naturalidade = $_POST['naturalidade'];
$bairro = $_POST['bairro'];
$texto = "";
//Serviços Sociais
if (isset($_POST['sc'])) {
	$servico = $_POST['sc'];
}else{
	$servico = 0;
}

if ($servico == 1) {
	$texto = "Serviços Sociais |";
}
//Tecnologia
if (isset($_POST['tc'])) {
	$tecnologia = $_POST['tc'];
}else{
	$tecnologia = 0;
}

if ($tecnologia == 2) {
	$texto = $texto." Tecnologia |";
}
//Educação
if (isset($_POST['ed'])) {
	$educacao = $_POST['ed'];
}else{
	$educacao = 0;
}

if ($educacao == 3) {
	$texto = $texto." Educação |";
}

//Saúde
if (isset($_POST['sd'])) {
	$saude = $_POST['sd'];
}else{
	$saude = 0;
}

if ($saude == 4) {
	$texto = $texto." Saúde |";
}

//Auxiliar
if (isset($_POST['ax'])) {
	$auxiliar = $_POST['ax'];
}else{
	$auxiliar = 0;
}

if ($auxiliar == 5) {
	$texto = $texto." Auxiliar |";
}

//Serviços Gerais
if (isset($_POST['sg'])) {
	$servicos = $_POST['sg'];
}else{
	$servicos = 0;
}

if ($servicos == 6) {
	$texto = $texto." Serviços Gerais ";
}

$endereco = $_POST['endereco'];
$estadocivil = $_POST['estadocivil'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$pis = $_POST['pis'];

$escolaridade = $_POST['escolaridade'];
$experiencia = $_POST['experiencia'];
$objetivo = $_POST['objetivo'];
$cursos = $_POST['cursos'];

$perfil = $_POST['perfil']; 

$sql = "INSERT INTO tb_dadospessoais (nome,	datadenasc, sexo, nacionalidade, naturalidade, bairro, endereco,	estadocivil, cep, estado, contato, email, pis, formacao, experiencia, objetivo, cursos, perfil, exp, sc, tc, sd, ax, ed, sg) VALUES ('$nome', '$data', '$sexo', '$nacionalidade', '$naturalidade', '$bairro', '$endereco','$estadocivil', '$cep', '$estado', '$contato', '$email', '$pis', '$escolaridade', '$experiencia', '$objetivo', '$cursos', '$perfil', '$texto', '$servico', '$tecnologia', '$saude', '$auxiliar', '$educacao', '$servicos')";

mysqli_query($conexao, $sql) or die("Cadastro mal sucedido");

mysqli_close($conexao);

header('Location: categorias.php');
 ?>

 