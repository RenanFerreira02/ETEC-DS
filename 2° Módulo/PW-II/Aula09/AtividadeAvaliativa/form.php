<?php
    include('cabecalho.php');
?>

<section>
  <form action="dadosForm.php" method="post">
    <div>
      <input type="text" placeholder="Palavra" name="txtPalavra" />
    </div>

    <div>
      <input type="text" placeholder="Descrição" name="txtDescricao" />
    </div>

    <div>
      <input type="file" name="image" />
    </div>

    <div>
      <input type="text" placeholder="Link" name="txtLink"/>
    </div>

    <div>
      <input type="submit" value="Enviar" />
    </div>
  </form>
</section>


<?php
    include('rodape.php');
?>