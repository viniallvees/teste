/**
 * Conexão com o banco de dados
 * Adicionando mais comentários
 */

<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	$host = "10.10.10.2";
	$nomedb = "vinicius";
	$user = "itarget";
	$senha = "1t4rg3t";

	//Comando para realizar conexão entre Formulário e o Banco de dados.
	try {
		$db = new PDO("pgsql:host=$host; dbname=$nomedb; user=$user; password=$senha");
	} catch (PDOException $erro) {
		print $erro->getMessage();
	}
?>