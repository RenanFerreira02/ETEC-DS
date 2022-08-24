<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="decisao.css">
    <title> Decisão Encadeada </title>
</head>

<body>


    <?php

    echo "<h1> Decisão Encadeada <br/> ( if, else, else if, case ) </h1>";

    // digitar um que equivale a um mês, e exibir o nomes do mês referente ao número, (mês 4 = abril)


    /* Com o if, else if, else
        $mes = 11;

        if ( $mes == 1 ) {
            echo "Janeiro";
        }

        else if ( $mes == 2 ) {
            echo "Fevereiro";
        }

        else if ( $mes == 3 ) {
            echo "Março";
        }

        else if ( $mes == 4 ) {
            echo "Abril";
        }

        else if ( $mes == 5 ) {
            echo "Maio";
        }

        else if ( $mes == 6 ) {
            echo "Junho";
        }

        else if ( $mes == 7 ) {
            echo "Julho";
        }

        else if ( $mes == 8 ) {
            echo "Agosto";
        }

        else if ( $mes == 9 ) {
            echo "Setembro";
        }

        else if ( $mes == 10 ) {
            echo "Outubro";
        }

        else if ( $mes == 11 ) {
            echo "Novembro";
        }

        else if ( $mes == 12 ) {
            echo "Dezembro";
        }

        else {
            echo "Mês Iválido!";
        } */


    // Com o Switch ( usa mais com situação de igualdade )
    // Com alternativas vamos usa-se o Switch Case (caso)

    $mes = 6;

    switch ($mes) {
        case 1:
            echo "Janeiro";
            break; //tem q ter o break ( famoso Para! ), pq se não ele considera tudo q tá embaixo verdaeiro tbm
        case 2:
            echo "Fevereiro";
            break;

        case 3:
            echo "Março";
            break;

        case 4:
            echo "Abril";
            break;

        case 5:
            echo "Maio";
            break;

        case 6:
            echo "Junho";
            break;
        case 7:
            echo "Julho";
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Setembro";
            break;
        case 10:
            echo "Outubro";
            break;
        case 11:
            echo "Novembro";
            break;
        case 12:
            echo "Dezembro";
            break;

        default:
            echo "Mês Inválido!";
    }



    ?>


</body>

</html>