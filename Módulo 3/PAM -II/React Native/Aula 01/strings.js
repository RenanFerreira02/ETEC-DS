const escola = 'Cod3r';

console.log(escola.charAt(4)); // Retorna a letra da quarta posição - Sempre começa em 0
console.log(escola.charAt(5)); // Retorna vazio. JS retorna um percentual de erros menor

// Para colocar string pode usar "" '' ou ``

console.log(escola.charCodeAt(3)); // Retorna valor da tabela UNICODE
console.log(escola.indexOf('o')); // Índice associado a variável escola

console.log(escola.substring(1)); // Inclui indice 1 até o final
console.log(escola.substring(0, 3)); // Índice 0 a 2
console.log('Escola '.concat(escola).concat('!')); // Escola é um valor do tipo literal, ou seja, posso passar direto sem variável,

// Poderia usar console.log('Escola' + escola + '!')

// + no contextpo numérico vai somar mas no string vai concatenar

console.log(escola.replace(3, 'e'));
console.log(escola.replace(/\d/, 'e')); // Regex para substituir todos os dígitos numéricos dentro do texto por e

console.log('Ana, Maria, Pedro'.split(',')); // Conversão para array. Pode ser usado regex.
