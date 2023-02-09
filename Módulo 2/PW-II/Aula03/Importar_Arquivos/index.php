<!-- 
    
Inclusão de arquivos externos

Utilizamos quando estamos desenvolvendo sites e dividimos os componentes que mais se repetem em arquivos separados como o header, footer, navbar, etc;

   -> include() - tenta incluir uma pagina, caso der alguma falha, nos dá um aviso e segue a execução da pág  ==> dá um aviso e segue a vida;

    -> require() - tenta incluir uma pagina, caso der alguma falha, aborta a execução da pág, erro fatal ==> dá erro e para tudo;

    -> include_once() e require_once() - identifica suas funções, e, se o arquivo já foi incluso, retorna como false e não inclui o arquivo novamente; 

-->

<!-- Criamos uma pasta que possui o nosso "padrão" (templates), ou seja, o cabeçalho, menu e o rodapé, logo, não é preciso ficar copiando e colando em cada página, é só requerir eles pro nosso documento :-) -->

<?php require("./templetes/head.php") ?> 

<section>
    <h1> Home </h1>
    <div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ducimus eius hic voluptatum illum dignissimos similique eum cupiditate? Rem quod quos ipsum perspiciatis quidem nostrum velit vero fugiat! Blanditiis, at?
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ducimus eius hic voluptatum illum dignissimos similique eum cupiditate? Rem quod quos ipsum perspiciatis quidem nostrum velit vero fugiat! Blanditiis, at?
        </p>
    </div>
</section>

<?php require("./templetes/footer.php") ?>




