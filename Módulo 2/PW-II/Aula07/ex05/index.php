<?php include("templates/head.php"); ?>

<section>
    
    <h2> Exercício 5 </h2>
    <p> Utilizando vetores e laços de repetição, crie uma página que exiba a imagem referente a um país, seu nome e o seu continente.  </p>


    <?php

        $pais = array();
        $pais[0] = "Canadá";
        $pais[1] = "México";
        $pais[2] = "Brasil";
        $pais[3] = "Reino Unido";
        $pais[4] = "China";


        $continente = array();
        $continente[0] = "América do Norte";
        $continente[1] = "América Central";
        $continente[2] = "América do Sul";
        $continente[3] = "Europa";
        $continente[4] = "Ásia";

        $bandeira = array();
        $bandeira[0] = "img/can.png";
        $bandeira[1] = "img/mex.jpg";
        $bandeira[2] = "img/br.png";
        $bandeira[3] = "img/uk.png";
        $bandeira[4] = "img/chi.png";

        echo "<table> 
                <thead>
                    <tr>
                        <th>Bandeira</th>
                        <th>País</th>
                        <th>Continente</th>
                        <th>Saiba Mais</th>
                    </tr>
                </thead>
                
                <tbody>";

            for ($i = 0; $i < count($pais); $i++) {
                echo "<tr>
                        <td><img src='$bandeira[$i]'/></td>          
                        <td>$pais[$i]</td>          
                        <td>$continente[$i]</td>

                        <td>
                            <a href='pais.php?x=$pais[$i]&y=$continente[$i]&z=$bandeira[$i]' target='blank'> $pais[$i]</a>
                        </td>

                      </tr>";
            }            

        echo "</tbody>
            </table>";

    ?>
    
    </section>
<?php include("templates/footer.php"); ?>