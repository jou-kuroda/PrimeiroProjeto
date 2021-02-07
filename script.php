<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)){
	echo 'O nome não pode ser vazio.';
	return;
}

if (strlen($nome) < 3){
	echo 'O nome deve conter mais de 2 caracteres.';
	return;
}

if (strlen($nome) > 40){
	echo 'O nome é muito extenso.';
	return;
}


if ($idade >= 6 && $idade <= 12) {
	for ($i = 0; $i < count($categorias); $i++){
		if ($categorias[$i] == 'Infantil')
			echo "O nadador " . $nome . " pertence à modalidade " . $categorias[$i] . ".";
	}
} 
else if ($idade >= 13 && $idade <= 18) {
	for ($i = 0; $i < count($categorias); $i++){
		if ($categorias[$i] == 'Adolescente')
			echo "O nadador " . $nome . " pertence à modalidade " . $categorias[$i] . ".";
	}
} 
else if ($idade >= 19 && $idade <= 65){
	for ($i = 0; $i < count($categorias); $i++){
		if ($categorias[$i] == 'Adulto')
			echo "O nadador " . $nome . " pertence à modalidade " . $categorias[$i] . ".";
	}
}
else if ($idade > 65){
	for ($i = 0; $i < count($categorias); $i++){
		if ($categorias[$i] == 'Idoso')
			echo "O nadador " . $nome . " pertence à modalidade " . $categorias[$i] . ".";
	}
}