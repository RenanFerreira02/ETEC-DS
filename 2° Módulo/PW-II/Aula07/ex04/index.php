<?php include("templates/head.php"); ?>

<section>
    <h2> Exercício 4 </h2>
    <p> Criar uma tabela HTML com 10 linhas contendo as colunas Produto e Valor. Exiba apenas na tabela os produtos cujo valor seja inferior a 1000. </p>

    <?php

        $produto = array();
        $produto[0] = "AMD Ryzen 5 4500";
        $produto[1] = "AMD Ryzen 5 4600G";
        $produto[2] = "AMD Ryzen 5 5600G";
        $produto[3] = "AMD Ryzen 5 5600X";
        $produto[4] = "AMD Ryzen 9 5900X";
        $produto[5] = "Intel Core i5-10400";
        $produto[6] = "Intel Core i5-12400F";
        $produto[7] = "Intel Core i5-10400F";
        $produto[8] = "Intel Core i7-10700F";
        $produto[9] = "Intel Core i7-12700K";

        $valor = array();
        $valor[0] = 699.99;
        $valor[1] = 879.99;
        $valor[2] = 1229.95;
        $valor[3] = 1289.99;
        $valor[4] = 2649.99;
        $valor[5] = 1089.99;
        $valor[6] = 1159.99;
        $valor[7] = 849.99;
        $valor[8] = 1619.99;
        $valor[9] = 2899.99;

        echo "<table> 
        <thead>
            <tr>
                <th>Produto</th>
                <th>Valor</th>
            </tr>
        </thead>
        
        <tbody>";

            for ($i = 0; $i < count($produto); $i++) {

                if ($valor[$i] < 1000) {
                    echo "<tr>
                            <td>$produto[$i]</td>
                            <td>$valor[$i]</td>
                        </tr>";
                }
            }
                
        echo "</tbody>
            </table>";


    ?>

</section>



<?php include("templates/footer.php"); ?>