<link rel="stylesheet" href="style.css">

<?php

    echo " <div class='dados'>
            <h1> Dados enviados! </h1> 
            </div> ";


    // Recuperar os valores

    // Cria uma variável, ela vai receber o valor do nosso form

    $nome = $_POST['txnome'];
    // $_POST olha aí o nosso método q foi definido lá em form
    // txnome é o name do nossos campo que queremos recuperar
    // Basicamente, ao preencher o formulário na parte Nome, ele vai pegar o que foi escrito e guardar na variável
    $email = $_POST['txemail'];

    
    echo " <div class='var'>
                <h2> Dados do Formulário: </h2>
                <p>
                <strong> Seu nome é: </strong> $nome 
                <br /> <strong> Seu e-mail é: </strong> $email
                </p>
            </div> ";

?>

