<?php require("templates/head.php"); ?>

<section>

    <?php
 
        $nome = array();
        $nome[0] = "Ana";
        $nome[1] = "Bruno";
        $nome[2] = "Zélia";
        $nome[3] = "Daniel";
        $nome[4] = "Carlos";
        
        // esse i é meu índicie (posição) -> []
        // meu indicie começa com 0, então vai começar com 0;
        // count => 'contar'

            for( $i = 0; $i <count($nome); $i++){
                echo "$nome[$i] <br />";
            }

    ?>

</section>

<section>

    <?php

        echo "<h1>Atividade 1</h1>";

        for( $i=0; $i<=100; $i++ ){

            if ( $i % 2 == 0 ){
                echo "<p> $i <strong> (  número par  ) </strong> <br /></p>";
            }

            else {
                echo "<p> $i <strong class='imp'> ( número impar ) </strong> <br /></p>";
            }

        }

    ?>

</section>

<section>
    <?php

        echo "<h1>Atividade 2 </h1>";
        $nota = array();
        $nota[0] = 8;
        $nota[1] = 2;
        $nota[2] = 9;
        $nota[3] = 1;
        
        // array_sum() retorna a soma dos valores de um array
        $media = array_sum($nota) / count($nota);

        echo "$media";

    ?>

</section>


<?php require("templates/footer.php"); ?>
