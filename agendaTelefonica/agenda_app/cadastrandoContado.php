<?php

//SECAO DE LOGIN
session_start();

include "conexao.php";

$nome = $_POST['nome'];
$fone = $_POST['fone'];

$sql = mysqli_query($conn, "INSERT INTO listaContato (nome, fone) values ('$nome', '$fone')");

if ($sql == true) {
	# code...
	echo "Cadastro realizado com sucesso!";
	echo "<a href='administrativo.php'>Início</a>";
} else {

	echo "Nāo foi possível realizar o cadastro!";
	echo "<a href='javascript:window.history.go(-1)''>Voltar</a>";
}



?>