<?php
	// deve ser a primeira linha, caso use
	session_start();
	
	$categorias = [];
	$categorias[] = 'Infantil';
	$categorias[] = 'Adolescente';
	$categorias[] = 'Adulto';
	//print_r($categorias);
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	
	//var_dump($nome);
	//var_dump($idade);
	
	if (empty($nome)){
		$_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio.';
		//echo 'O nome não pode ser vazio.';
		header('location: index.php');
		return;
	}else if (strlen($nome) < 3 || strlen($nome) > 40){
		$_SESSION['mensagem-de-erro'] = 'O nome deve conter entre 3 a 40 caracteres';
		//echo 'O nome deve conter entre 3 a 40 caracteres';
		header('location: index.php');
		return;
	}else if (!is_numeric($idade)){
		$_SESSION['mensagem-de-erro'] = 'A idade deve ser um número.';
		//echo 'A idade deve ser um número.';
		header('location: index.php');
		return;
	}
	
	if ($idade >= 6 && $idade <= 12){
		//echo 'O nadador ' . $nome . ' compete na categoria ' . $categorias[0];
		$_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' compete na categoria ' . $categorias[0];
		header('location: index.php');
		return;
	}else if ($idade >= 13 && $idade < 18){
		//echo 'O nadador ' . $nome . ' compete na categoria ' . $categorias[1];
		$_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' compete na categoria ' . $categorias[1];
		header('location: index.php');
		return;
	}else{
		//echo 'O nadador ' . $nome . ' compete na categoria ' . $categorias[2];
		$_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' compete na categoria ' . $categorias[2];
		header('location: index.php');
		return;
	}
?>