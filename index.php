<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>LISTA DE CADASTRO</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootbox.min.js"></script>
<style type="text/css">
		h1 {
			text-align: center;
			font-style: italic;
			text-shadow: 0px 0px 1px black;
			color: White;
		}
		p {
			text-align: left;
			font-style: italic;
			font-size: 120%;
			color: White;
			text-shadow: 0px 0px 1px black; 
		}
		form {
			text-align: left;
		}
		body {
			text-align: center;
			background-color: #468499;
			margin-right: 15%; 
			margin-left: 15%;
		}
		table {
    		font-family: arial, sans-serif;
    		border-collapse: collapse;
    		width: 100%;
    	}
    	td {
    		border: 1px solid White;
    		text-align: left;
    		padding: 10px;
		}
		th {
			text-align: center;
			font-family: arial;
			font-size: 120%;
			color: Black;
			border: 1px solid White;
		}
		h3 {
			text-align: center;
			color: White;
			text-shadow: 0px 0px 1px black;
		}
</style>
</head>
	<script>
		function salvar(){
			if(!$("#nome").val()){
				bootbox.alert("Digite seu nome!");
				return false;
			}
			if(!$("#num_pessoa").val()){
				bootbox.alert("Digite seu contato!");
				return false;
			}
			if(!$("#end_pessoa").val()){
				bootbox.alert("Digite seu endereço!");
				return false;
			}
			return true;
		}
	</script>
<body>
	<hr><h1>Lista de Cadastro</h1><hr>
	<br/>
		<p class="container-fluid">Insira seus dados</p>
	<form name="form_cadastro" action="insert.php" method="POST" class="container-fluid" onsubmit="return salvar()">
		<div class="form-group">
				<input type="text" name="nome" size="21" id="nome" placeholder="Nome">
		</div>
		<div class="form-group">
				<input type="tel" name="num_pessoa" size="21" maxlength="9" id="num_pessoa" placeholder="Contato">
		3</div>
		<div class="form-group">
				<input type="text" name="end_pessoa" size="21"  id="end_pessoa" placeholder="Endereço">
		</div>
		<br/>
			<input type="submit" class="btn btn-light btn-sm" name="enviar" value="Enviar Dados">
			<input type="reset" class="btn btn-light btn-sm" name="apagar" value="Apagar Dados">
		<br/>
	</form>
	<br/>
	<div class="container-fluid"><a class="btn btn-light btn-sm" href="consulta.php">Consultar Tabela</a></div>
	<hr>
</body>
</html>