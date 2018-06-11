<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	include_once("conectar.php");

	$id = $_GET['pessoa_id'];
	$nome = $_GET['nome'];
	$contato = $_GET['num_pessoa'];
	$endereco = $_GET['end_pessoa'];

	//Comando para modificar a tabela.
	$sql = "UPDATE pessoa SET nome='$nome' WHERE id='$id'";
	$db->query($sql);
	$sql = "UPDATE endereco SET end_pessoa='$endereco' WHERE pessoa_id='$id'";
	$db->query($sql);
	$sql = "UPDATE contato SET num_pessoa='$contato' WHERE pessoa_id='$id'";
	$db->query($sql);

	header('Location: /consulta.php');
?>