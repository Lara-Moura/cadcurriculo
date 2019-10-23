<?php 
    $servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "cadcurriculo";

	$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
		if($conexao){
			echo "";
		}else{
			echo "conexao falhou";
		}
 ?>