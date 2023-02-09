<?php include("templates/head.php"); ?>

<section>

<?php

    $pais = $_GET['x'];
    $continente = $_GET['y'];
    $bandeira = $_GET['z'];


    echo "<table> 
        <tr>
            <td><img src='$bandeira'/></td>
            <td>$pais</td>
            <td>$continente</td>
        </tr>
            </table>";






?>

</section>


<?php include("templates/footer.php"); ?>