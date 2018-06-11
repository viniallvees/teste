<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	include_once('conectar.php');

		$pessoa = "pessoa";
		$contato = "contato";
		$endereco = "endereco";

		//Linha de comando para inserir dados na tabela.
		$sql = "INSERT INTO $pessoa (nome) VALUES ('{$_POST['nome']}')";
		$resultados = $db->query($sql);
		$pessoaId = $db->lastInsertId();
		
		$sql = "INSERT INTO $contato (num_pessoa, pessoa_id) VALUES ('{$_POST['num_pessoa']}', '$pessoaId')";
		$resultados = $db->query($sql);

		$sql = "INSERT INTO $endereco (end_pessoa, pessoa_id) VALUES ('{$_POST['end_pessoa']}', '$pessoaId')";
		$resultados = $db->query($sql);

		header('Location: /consulta.php');
?>