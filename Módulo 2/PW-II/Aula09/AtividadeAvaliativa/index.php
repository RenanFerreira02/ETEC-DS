<?php
    include('cabecalho.php');
?>

<body>
  <table>
    <thead>
      <tr>
        <th>Palavra</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Link</th>
      </tr>
    </thead>

    <tbody>
    
            <?php

            $palavra = array('Algoritmo', 'Bluetooth', 'Hardware', 'IDE', 'Software');



            $descricao = array();
            $descricao[0] = 'Um algoritmo é uma sequência de instruções bem definidas, normalmente usadas para resolver problemas de matemática específicos, executar tarefas, ou para realizar cálculos e equações.';
            $descricao[1] = 'Bluetooth é uma tecnologia de comunicação sem fio que permite que computadores, celulares, tablets, TVs e afins troquem dados entre si e se conectem a mouses, teclados, fones de ouvido, caixas de som, impressoras e outros dispositivos por meio de ondas de rádio.';
            $descricao[2] = 'Hardware é a parte física do computador, ou seja, o conjunto de aparatos eletrônicos, peças e equipamentos que fazem o computador funcionar.';
            $descricao[3] = 'IDE, do inglês Integrated Development Environment ou Ambiente de Desenvolvimento Integrado, é um programa de computador que reúne características e ferramentas de apoio ao desenvolvimento de software com o objetivo de agilizar este processo.';
            $descricao[4] = 'Um software é um serviço computacional utilizado para realizar ações nos sistemas de computadores. Ou seja: Um software é todo programa presente nos diversos dispositivos (computadores, celulares, televisores, entre outros).';
          

            $imagem = array();
            $imagem[0] = 'images/algoritmo.jpg';
            $imagem[1] = 'images/bluetooth.png';
            $imagem[2] = 'images/hardware.jpg';
            $imagem[3] = 'images/ide.jpg';
            $imagem[4] = 'images/software.jpg';
           
            

            $link = array();
            $link[0] = 'https://www.techtudo.com.br/listas/2020/05/o-que-e-algoritmo-entenda-como-funciona-em-apps-e-sites-da-internet.ghtml';
            $link[1] = 'https://www.infowester.com/bluetooth.php';
            $link[2] = 'https://tecnoblog.net/responde/o-que-e-hardware/';
            $link[3] = 'https://www.redhat.com/pt-br/topics/middleware/what-is-ide';
            $link[4] = 'https://tecnoblog.net/responde/o-que-e-software/';
           

            // count = conta a quantidade de indice do array

            for ($i = 0; $i < count($palavra); $i++) {

                echo "<tr>
                        <td>$palavra[$i]</td>
                        <td>$descricao[$i]</td>
                        <td><img src='$imagem[$i]'/></td>
                        <td>$link[$i]</td>
                      </tr>";
            }
            ?>

    </tbody>
  </table>
</body>


<?php
    include('rodape.php');
?>