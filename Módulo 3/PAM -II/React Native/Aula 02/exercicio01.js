// Uma função que receba 2 ou mais parametros e realize uma operação matematica qualquer

let num1 = 0;

let num2 = 0;

function operacao(num1, num2) {
	let soma = num1 + num2;

	console.log('A soma dos números é ', soma);

	let subtracao = num1 - num2;

	console.log('A subtração dos números é ', subtracao);

	let mult = num1 * num2;

	console.log('A multiplicação dos números é ', mult);
}

operacao(1, 2);
