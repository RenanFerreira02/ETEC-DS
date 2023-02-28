// Tipo 1 de Função
function mensagem() {
	return 'Olá pessoal!';
}

console.log(mensagem());

// Tipo 2 de Função
function msg() {
	let msg = 'Hello People!';

	return msg;
}

// Arrow Function / Função de flecha
console.log(msg());

const nome = () => {
	return 'Renan';
};

console.log(nome());

// Tipo 3 de Função
function lindaMensagem(parametro) {
	return console.log('A sua mensagem é: ', parametro);
}

lindaMensagem('Java é bom! É incrível');
lindaMensagem(3);
lindaMensagem('Coitado do Juarez por aguentar o João nas segundas');
