<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Lab</title>
	</head>
	<body>
		<form action="/laboratorio" method="post">
			{{csrf_field()}}
			<input type="text" name="txLab" placeholder="Nome Laboratório" />
			<input type="submit" value="Salvar" />
		</form>

		@foreach($lab as $l)
		<p>
			{{$l -> idLab}} {{$l -> Lab}}
			<a href="/laboratorio/excluir/{{$l->idLab}}"> Excluir </a>
		</p>
		@endforeach
	</body>
</html>
