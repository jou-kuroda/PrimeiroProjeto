<?php

session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)){
	$_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio.';
	header('location: home.php');
	return;
}

else if (strlen($nome) < 3){
	$_SESSION['mensagem-de-erro'] = 'O nome precisa ter mais de 2 caracteres.';
	header('location: home.php');
	return;
}

else if (strlen($nome) > 40){
	$_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres.';
	header('location: home.php');
	return;
}

else if (!(is_numeric($idade))){
	$_SESSION['mensagem-de-erro'] = 'Digite uma idade válida.';
	header('location: home.php');
	return;
}


if ($idade >= 6 && $idade <= 12) {
	for ($i = 0; $i < count($categorias); $i++){
		if ($categorias[$i] == 'Infantil'){
			$_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " pertence à modalidade " . $categorias[$i] . ".";
			header('location: home.php');
			return;
		}
	}
} 
else if ($idade >= 13 && $idade <= 18) {
	for ($i = 0; $i < count($categorias); $i++){
		if ($categorias[$i] == 'Adolescente'){
			$_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " pertence à modalidade " . $categorias[$i] . ".";
			header('location: home.php');
			return;
		}
	}
} 
else if ($idade >= 19 && $idade <= 65){
	for ($i = 0; $i < count($categorias); $i++){
		if ($categorias[$i] == 'Adulto'){
			$_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " pertence à modalidade " . $categorias[$i] . ".";
			header('location: home.php');
			return;
		}
	}
}
else if ($idade > 65){
	for ($i = 0; $i < count($categorias); $i++){
		if ($categorias[$i] == 'Idoso'){
			$_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " pertence à modalidade " . $categorias[$i] . ".";
			header('location: home.php');
			return;
		}
	}
}