<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section>
        <h1>Titulo</h1>
    </section>

    <section>
        <form action="">
            <div>
                <input type="text" placeholder="Palavra" />
            </div>

            <div>
                <input type="text" placeholder="Descrição" />
            </div>

            <div>
                <input type="text" placeholder="Imagem" />
            </div>

            <div>
                <input type="text" placeholder="Link" />
            </div>

            <div>
                <input type="submit" value="Salvar" />
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Palavra</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Link</th>
                    <th scope="col">Alterar</th>
                    <th scope="col">Apagar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>Editar</td>
                    <td>Apagar</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>Editar</td>
                    <td>Apagar</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>Editar</td>
                    <td>Apagar</td>
                </tr>
            </tbody>
        </table>
    </section>
</body>

</html>