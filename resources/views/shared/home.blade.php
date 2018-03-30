<!DOCTYPE html>
<html>
<head>
	<title>Gerenciador de catálogo de serviços</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="">Gerenciador de catálogo de serviços</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSite">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navSite">

				<ul class="navbar-nav ml-auto">

					<li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#servicos"><h6 class="text-white">Adicionar serviço</h6></a></li>

					<li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#mockup"><h6 class="text-white">Abrir chamados</h6></a></li>

				</ul>
			</div>
		</nav>
	</div>

	<div class="modal fade" id="servicos">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Cadastrar serviço</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<form action="{{route ('servico.store') }}" method="post">
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="form-group">
							<input type="text" name="nomeServico" id="" class="form-control" placeholder="Nome do serviço" required="">
						</div>

						<div class="form-group">
							<textarea name="descricao" class="form-control" placeholder="Descrição do serviço" required=""></textarea>
						</div>

						<div class="form-group">
							<select class="form-control" name="departamento" required="">
								<option value="">Selecionar departamento</option>
								<option value="Administração">Administração</option>
								<option value="Financeiro">Financeiro</option>
								<option value="Linha de produção">Linha de produção</option>
								<option value="Portaria">Portaria</option>
								<option value="Recursos humanos">Recursos humanos</option>
							</select>
						</div>

						<div class="form-group">
							<select class="form-control" name="prioridade" required="">
								<option>Selecionar prioridade</option>
								<option>Alta</option>
								<option>Média</option>
								<option>Baixa</option>
							</select>
						</div>

						<div class="form-group">
							<select class="form-control" name="canalSuporte" required="">
								<option value="">Selecionar canal de suporte</option>
								<option>Email</option>
								<option>Ramal</option>
							</select>
						</div>

						<div class="form-group">
							<select class="form-control" name="canalSolicitacao" required="">
								<option value="">Selecionar canal solicitação</option>
								<option>Email</option>
								<option>Ramal</option>
							</select>
						</div>

						<div class="form-group">
							<input type="text" name="horarioFunc" id="" class="form-control" placeholder="Horário de funcionamento" required="">
						</div>

						<div class="form-group">
							<input type="text" name="sla" id="" class="form-control" placeholder="Acordo de nível de serviço" required="">
						</div>

						<div class="form-group">
							<select class="form-control" name="status" required="">
								<option value="">Selecionar status</option>
								<option value="Ativo">Ativo</option>
								<option value="Inativo">Inativo</option>
							</select>
						</div>

					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="container">
		@yield('content')
	</div>
	
</body>
</html>