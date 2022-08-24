<?php
include("estrutura/cabecalho.php");
?>

<section>
    <h1> Contato </h1>
</section>

<section>
    <form>
        <div>
            <div> <label>Nome</label> </div>
            <input type="text" class="tx" placeholder="Digite seu nome aqui" />
        </div>

        <div>
            <div> <label> Gênero </label> </div>
            <input type="radio" name="rGenero" /> Masculino
            <input type="radio" name="rGenero" /> Feminino
        </div>

        <div>
            <div> <label>E-mail</label> </div>
            <input type="email" class="tx" placeholder="Digite seu e-mail" />
        </div>

        <div>
            <div> <label>Assunto</label> </div>
            <input type="text" class="tx" placeholder="Digite o assunto" />
        </div>

        <div>
            <div> <label>Mensagem</label> </div>
            <textarea></textarea>
        </div>

        <div>
            <input type="submit" class="bt" value="Enviar" />
        </div>

    </form>

</section>

<?php
include("estrutura/rodape.php");
?>