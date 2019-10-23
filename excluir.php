<?php 
	
	include("conexao.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM tb_dadospessoais WHERE id = '$id'";
	mysqli_query($conexao,$sql);
	header('Location: categorias.php');
?>