<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	include_once("conectar.php");

	$id = $_GET['id'];
	
	//Linha de comando para deletar dados da tabela.
	$sql = "DELETE FROM endereco WHERE pessoa_id='$id'";
	$db->query($sql);
	
	header('Location: /consulta.php');
?>