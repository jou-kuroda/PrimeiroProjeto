<?php

function validaNome (string $nome) : bool{
	if (empty($nome)){
		setarMensagemErro('O nome não pode ser vazio.');
		return false;
	}

	else if (strlen($nome) < 3){
		setarMensagemErro('O nome precisa ter mais de 2 caracteres.');
		return false;
	}

	else if (strlen($nome) > 40){
		setarMensagemErro('O nome não pode conter mais de 40 caracteres.');
		return false;
	}
	return true;
}

function validaIdade (string $idade) : bool{
	if (!(is_numeric($idade))){
		setarMensagemErro('Digite uma idade válida.');
		return false;
	}
	return true;
}