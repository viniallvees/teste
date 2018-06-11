<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tabela de cadastrados</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootbox.min.js"></script>
<style type="text/css">
		body {
			text-align: center;
			background-color: #468499;
			margin-right: 15%;
			margin-left: 15%;
		}
		h3 {
			text-align: center;
			font-style: italic;
			text-shadow: 0px 0px 1px black;
			color: White;
		}
		table {
			font-family: arial, sans-serif;
    		border-collapse: collapse;
    		width: 100%;
		}
		th {
			text-align: center;
			font-family: arial;
			font-size: 120%;
			color: Black;
			border: 1px solid White;
			background-color: #e8e5e5;
		}
		td {
    		border: 1px solid White;
    		text-align: left;
    		padding: 10px;
    		background-color: LightGray;
		}
</style>
</head>
<body>
<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	include_once("conectar.php");

	//Linha de comando para selecionar a tabela.
	$sql = "SELECT endereco.pessoa_id, pessoa.nome, contato.num_pessoa, endereco.end_pessoa FROM pessoa
			INNER JOIN contato ON contato.pessoa_id = pessoa.id
			INNER JOIN endereco ON endereco.pessoa_id = pessoa.id";
	$resultados = $db->query($sql);

	echo '<hr>';
	echo "<h3>Pessoas Cadastradas</h3>";
	echo '<hr>';
	echo "<table>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Contato</th>
				<th>Endereço</th>
				<th>Ações</th>
			</tr>
			</thead>";
	echo "<tbody>";
	foreach ($resultados as $row) {
		echo "<tr>";
		echo "<td>". $row['pessoa_id'] . "</td>";
		echo "<td>". $row['nome'] . "</td>";
		echo "<td>". $row['num_pessoa'] . "</td>";
		echo "<td>". $row['end_pessoa'] . "</td>";
		echo "<td>". "<a class='btn btn-outline-success btn-sm' href='editar.php?id=" . $row['pessoa_id'] . "&nome=" . $row['nome'] . "&num_pessoa=" . $row['num_pessoa'] . "&end_pessoa=" . $row['end_pessoa'] . "'>Editar</a>" . " " . 
			"<a class='btn btn-outline-danger btn-sm' href='excluir.php?id=" . $row['pessoa_id'] . "'>Excluir</a>" . "</td>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
	echo "<br/><br/>";
	echo '<a class="btn btn-light btn-sm" href="index.php">Página Principal</a>';
	echo "<hr>";
?>
</body>
</html>