<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contato</title>
	</head>
	<body>
		<form action="/contato" method="post">
			{{csrf_field()}}
			<input type="text" name="txNome" placeholder="Nome" />
			<input type="number" name="txTel" placeholder="Telefone" />
			<input type="email" name="txEmail" placeholder="E-mail" />
			<input type="submit" value="Salvar" />
		</form>

		@foreach($contatos as $c)
		<p>
			{{$c->idContato}} {{$c->Nome}} {{$c->Tel}} {{$c->Email}}
			<a href="/contato/excluir/{{$c->idContato}}"> Excluir </a>
		</p>
		@endforeach
	</body>
</html>
