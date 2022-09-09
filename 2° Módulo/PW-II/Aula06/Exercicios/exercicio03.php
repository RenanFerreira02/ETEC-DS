<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Exercício 3</title>


</head>

<body>
    <table>
        <thead>
            <tr>
                <th colspan="2">Tabela</th>
            </tr>

            <tr>
                <th>Produto</th>
                <th>Valor</th>
            </tr>
        </thead>

        <tbody>

            <?php

            // $produto;

            // $valor;

            // for ($produto = 1, $valor = 1; $produto <= 10 && $valor <= 10; $produto++, $valor++) {

            //     echo "<tr class='tr_ex03'>
            //                 <td>$produto</td>
            //                 <td>$valor</td>
            //           </tr>";
            // }

            $produtos = array('Abacaxi', 'Laranja', 'Manga', 'Maça', 'Pera', 'Tomate', 'Jabuticaba', 'Banana', 'Morango', 'Melancia');

            $valores = array(10.0, 3.50, 7.0, 9.0, 5.0, 3.50, 15.0, 12.0, 10.0, 30.0);


            //count = conta a quantidade de indice do array

            for ($i = 0; $i < count($produtos); $i++) {

                echo "<tr class='tr_ex03'>
                            <td>$produtos[$i]</td>
                            <td>$valores[$i]</td>
                      </tr>";
            }
            ?>

        </tbody>

    </table>
</body>

</html>