<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>

<body>

    <form action="pegarDados.php" method="post"> 
        <!-- no form temos que ter uma Action, que terá o nome do nosso arquivo php, ele será o responsavel pela informacao da proxima página ao clicar em enviar;
        e o metodo de envio, em form é normal usar o post -->

        <!-- para trabalhar com formulário em php temos q ter o "name" no nosso input idependente do tipo -->

        <h2>Cadastro</h2>
        
        <div>
            <input type="text" placeholder="Nome" name="txnome" />
        </div>

        <div>
            <input type="text" placeholder="E-mail" name="txemail" />
        </div>

        <div>
            <input type="submit" value="Enviar" />
        </div>

    </form>

</body>

</html>