<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

        <div>
            <ul>
                <li> <a href="index.php"> Home </a> </li>
                <li> <a href="produto.php"> Produto </a> </li>
            </ul>
        </div>
    </header>

    <?php
    $idadeRenan = 15;
    $idadeDaniel = 16;
    echo "    
    <section>
        <footer>
        <ul>
                <li>
                    Nome: Renan Kaique Fontes Ferreira
                    <div>
                        E-mail: renankferreira01@gmail.com
                    </div>

                    <div>
                        Idade:$idadeRenan
                    </div>
                </li>";

    if ($idadeRenan >= 18) {
        echo "Aluno maior de idade";
    } else {
        echo "Aluno menor de Idade";
    }

    echo "
                <li>
                Nome: Daniel Baldez Chagas
                <div>
                    E-mail: danielbaldez2000@gmail.com
                </div>

                <div>
                    Idade: $idadeDaniel
                </div>
            </li>
            
            </secion>";

    if ($idadeDaniel >= 18) {
        echo "Aluno maior de idade";
    } else {
        echo "Aluno menor de Idade";
    }

    ?>
</body>

</html>