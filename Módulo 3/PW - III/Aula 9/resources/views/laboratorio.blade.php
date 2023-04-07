<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{url('css/css-reset.css')}}" />
		<link rel="stylesheet" href="{{url('css/header.css')}}" />
		<link rel="stylesheet" href="{{url('css/form.css')}}" />
		<link rel="stylesheet" href="{{url('css/table.css')}}" />
		<title>Laboratórios</title>
	</head>

	<body>
		<header class="header">
			<ul class="menu">
				<li><a href="/">Home</a></li>
				<li><a href="/sobre">Sobre</a></li>
				<li><a href="/reclamacao">Reclamações</a></li>
			</ul>
		</header>

		<div class="form-container">
			<h1>Inserir um novo Laboratório</h1>

			<form action="/laboratorio" method="post">
				{{csrf_field()}}
				<label for="txLab">Nome do laboratório:</label>

				<input type="text" id="txLab" name="txLab" placeholder="Nome" />
				<input type="submit" value="Salvar" />
			</form>
		</div>

		<div class="consulta">
			<table>
				<thead>
					<tr>
						<th>Id Laboratório</th>
						<th>Laboratório</th>
						<th>Excluir</th>
					</tr>
				</thead>

				<tbody>
					@foreach($laboratorio as $lab)
					<tr>
						<td>{{$lab -> idLaboratorio}}</td>
						<td>{{$lab -> laboratorio}}</td>
						<td class='excluir'>
							<a href="/laboratorio/excluir/{{$lab->idLaboratorio}}">
								<img src="{{url('images/delete.svg')}}" alt="" />
							</a>
						</td>
					</tr>

					@endforeach
				</tbody>
			</table>
		</div>
	</body>
</html>
