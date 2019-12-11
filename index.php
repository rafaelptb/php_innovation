<?php
	// deve ser a primeira instrução, caso tenha
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Formulário de Inscrição</title>
	<meta name='author' content=''>
	<meta name='description' content=''>
	<meta name='viewport' content='width-device-width, initial-scale=1'>
</head>
<body>
	<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
	<form action='script.php' method='post'>
		<?php
			$mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
			
			if (isset($mensagemDeErro)){
				echo $mensagemDeErro;
			}
		?>
		<p>Nome: <input type='text' name='nome' /></p>
		<p>Idade: <input type='text' name='idade' /></p>
		<p><input type='submit' value='Enviar Dados do Competidor' /></p>		
		<?php
			$mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
			
			if (isset($mensagemDeSucesso)){
				echo $mensagemDeSucesso;
			}
		?>
	</form>
</body>
</html>