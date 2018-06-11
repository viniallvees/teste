<!DOCTYPE html>
<html>
<head>
	<title>Alteração de dados</title>
	<meta charset="UTF-8">
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
		form {
			text-align: left;
		}
		p {
			text-align: left;
			text-shadow: 0px 0px 1px black;
			color: White;
			font-size: 120%;
		}
		h3 {
			text-align: center;
			font-style: italic;
			text-shadow: 0px 0px 1px black;
			color: White;
		}
</style>
</head>
	<script>
		function editar2(){
			if(!$("#nome").val()){
				bootbox.alert("Digite o nome!");
				return false;
			}
			if(!$("#num_pessoa").val()){
				bootbox.alert("Digite o contato!");
				return false;
			}
			if(!$("#end_pessoa").val()){
				bootbox.alert("Digite o endereço!");
				return false;
			}
			return true;
		}
	</script>
<body>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include_once("conectar.php");

/**
* Comando para inserir os dados no formulário de edição.
*/
$id = $_GET['id'];
$nome = $_GET['nome'];
$num_pessoa = $_GET['num_pessoa'];
$end_pessoa = $_GET['end_pessoa'];

$sql = "SELECT * FROM pessoa WHERE id = 'id'";
$resultados = $db->query($sql);
?>
	<hr><h3>Alteração de dados</h3><hr><br/>
	<p class="container-fluid">Insira seus dados</p>
	<form name="form_edit" action="edit.php" method="GET" class="container-fluid" onsubmit="return editar2()">
	  <input type="hidden" name="pessoa_id" value="<?php echo $id; ?>" id="pessoa_id">
	  <label>Nome:</label><br/>
	  <input type="text" name="nome" value="<?php echo $nome; ?>" size="21" id="nome">
	  <br/><br/>
	  <label>Contato:</label><br/>
	  <input type="tel" name="num_pessoa" value="<?php echo $num_pessoa; ?>" size="21" maxlength="9" id="num_pessoa">
	  <br/><br/>
	  <label>Endereço:</label><br/>
	  <input type="text" name="end_pessoa" value="<?php echo $end_pessoa; ?>" size="21" id="end_pessoa">
	  <br/><br/>
	  <input type="submit" class="btn btn-light btn-sm" name="editar" id="editar" value="Confirmar Alteração">
	</form><br/><br/>
	<a class="btn btn-light btn-sm" href="index.php">Página Principal</a>
	<a class="btn btn-light btn-sm" href="consulta.php">Consultar Tabela</a><hr>
</body>
</html>