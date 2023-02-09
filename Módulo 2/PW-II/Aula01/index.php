<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Página Inicial</title>
</head>

<body>
	<h1>Olá Mundo!</h1>

	<?php
	
	$nome = "Renan e Daniel";

	$idade = 18;

	$peso = 76;

	echo "Olá Mundo!";

	echo "<h1>Olá Mundo!</h1>";

	echo "Nome: " . $nome . "<br />"; // Forma um de concatenar texto e variável

	echo "Idade: $idade <br /> Peso: $peso"; // Forma dois de concatenar texto e variável

	

	// Comentário de linha

	/*
	Comentário
	De
	Bloco
	*/

	// No PHP '.' é o simbolo de concatenação

	/* Operadores Artméticos:

	+ Adição
	- Subtração
	* Multiplicação
	/ Divisão
	% Resto

	*/

	echo "<h1>Operadores Aritméticos</h1>";


	// Entrada
	$n1 = 8;
	$n2 = 2;

	// Processamento
	$soma = $n1 + $n2;

	$subtracao = $n1 - $n2;

	$multiplacacao = $n1 * $n2;

	$divisao = $n1 / $n2;

	$resto = $n1 % $n2;

	// Saída
	echo "$n1 + $n2 = $soma <br />"; 

	echo $n1 ." - ". $n2 . " = " . $subtracao . "<br />";
	
	echo "$n1 / $n2 = $divisao <br />";
	
	echo $n1 ." * ". $n2 . " = " . $multiplacacao . "<br />"; 

	?>
</body>

</html>