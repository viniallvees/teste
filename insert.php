<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	include_once('conectar.php');

		$pessoa = "pessoa";
		$contato = "contato";
		$endereco = "endereco";
try{
		//Linha de comando para inserir dados na tabela.
		$sql = "INSERT INTO $pessoa (nome) VALUES ('{$_POST['nome']}')";
		$resultados = $db->query($sql);
		$pessoaId = $db->lastInsertId();
		$stmt = $db->prepare("SELECT max(id) as id FROM pessoa");
    	$stmt->execute();
    	$pessoaId= $stmt->fetch();
    	
    	$pessoaId = $pessoaId['id'];
    	
		$sql = "INSERT INTO $contato (num_pessoa, pessoa_id) VALUES ('{$_POST['num_pessoa']}', '$pessoaId')";
		$resultados = $db->query($sql);

		 $sql = "INSERT INTO $endereco (end_pessoa, pessoa_id) VALUES ('{$_POST['end_pessoa']}', '$pessoaId')";
		$resultados = $db->query($sql);

		if($resultados){
			echo("<br>Dados adicionados");
		}else{
			echo("<br>Dados nao adicionados");
		}
}catch(Execption $e){
	echo $e->getMessage();
}

header('Location: /consulta.php');
?>