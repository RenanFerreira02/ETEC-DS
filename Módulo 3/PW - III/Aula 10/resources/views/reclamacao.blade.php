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
		<title>Reclamações</title>
	</head>

	<body>
		<header class="header">
			<ul class="menu">
				<li><a href="/">Home</a></li>
				<li><a href="/sobre">Sobre</a></li>
				<li><a href="/laboratorio">Laboratórios</a></li>
			</ul>
		</header>

		<div class="form-container">
			<h1>Inserir uma nova reclamação</h1>

			<form action="/reclamacao" method="post">
				{{csrf_field()}}

				<select>
					<option value="">Selecione o laboratório</option>
					@foreach($laboratorio as $lab)
					<option value="{{$lab -> idLaboratorio}}">{{$lab -> laboratorio}}</option>
					@endforeach
				</select>

				<label for="txLab">Laboratorio:</label>
				<input type="text" id="txLab" name="txLab" placeholder="Nome" />

				<label for="txPC">PC:</label>
				<input type="text" id="txPC" name="txPC" placeholder="Nome" />

				<label for="txTitulo">Titulo:</label>
				<input type="text" id="txTitulo" name="txTitulo" placeholder="Nome" />

				<label for="txDescricao">Descrição:</label>
				<input type="text" id="txDescricao" name="txDescricao" placeholder="Nome" />

				<input type="submit" value="Salvar" />
			</form>
		</div>


		<div class="consulta">
			<table>
				<thead>
					<tr>
						<th>Id Reclamacao</th>
						<th>Id Laboratorio</th>
						<th>PC</th>
						<th>Titulo</th>
						<th>Descrição</th>
						<th>Data</th>
						<th>Excluir</th>
					</tr>
				</thead>

				<tbody>
					@foreach($reclamacao as $rec)
					<tr>
						<td>{{$rec -> idRec}}</td>
						<td>{{$rec -> idLaboratorio}}</td>
						<td>{{$rec -> pc}}</td>
						<td>{{$rec -> titulo}}</td>
						<td>{{$rec -> descricao}}</td>
						<td>{{$rec -> dtCriacao}}</td>
						<td class='excluir'>
							<a href="/reclamacao/excluir/{{$rec->idRec}}">
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
