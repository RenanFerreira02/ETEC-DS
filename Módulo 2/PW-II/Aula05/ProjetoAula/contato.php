<?php
include("estrutura/cabecalho.php");
?>

<section>
    <h1> Contato </h1>
</section>

<section>
    <form action="dados-contato.php" method="post">
        <div>
            <div> <label>Nome</label> </div>
            <input type="text" class="tx" name="tx_nome" placeholder="Digite seu nome aqui" />
        </div>

        <div>
            <div> <label> Gênero </label> </div>
            <input type="radio" name="rGenero" value="Masculino" /> Masculino
            <input type="radio" name="rGenero" value="Feminino"/> Feminino
        </div>

        <div>
            <div> <label>E-mail</label> </div>
            <input type="email" class="tx" name="tx_email" placeholder="Digite seu e-mail" />
        </div>

        <div>
            <div> <label>Assunto</label> </div>
            <input type="text" class="tx" name="tx_assunto" placeholder="Digite o assunto" />
        </div>

        <div>
            <div> <label>Mensagem</label> </div>
            <textarea name="tx_mensagem"></textarea>
        </div>

        <div>
            <input type="submit" class="bt" value="Enviar" />
        </div>

    </form>

</section>

<?php
include("estrutura/rodape.php");
?>