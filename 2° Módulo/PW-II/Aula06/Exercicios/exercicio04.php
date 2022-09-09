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
            //             <td>$produto</td>
            //             <td>$valor</td>
            //           </tr>";
            // }

            $produtos = array('Geladeira', 'Televisão', 'PS5', 'Xbox Series X', 'Sofá', 'Cadeira de escritório', 'Mesa de escritório', 'Fogão', 'Chuveiro', 'Celular');

            $valores = array(900.0, 2500.0, 5000.0, 4000.0, 1900.0, 400.0, 400.0, 750.0, 150.0, 5500.0);


            //count = conta a quantidade de indice do array

            // for ($i = 0; $i < count($produtos); $i++) {

            //     echo "<tr>
            //             <td>$produtos[$i]</td>
            //             <td>$valores[$i]</td>
            //      </tr>";
            // }
            
            if (in_array("1000", $valores)> 1000 ) {
                echo "Preço abaixo";
            }else {
                echo "PHP";
            }

            ?>

        </tbody>

    </table>
</body>

</html>