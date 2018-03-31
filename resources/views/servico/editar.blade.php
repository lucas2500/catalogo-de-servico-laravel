@extends('shared.home')
@section('content')
<div class="card">
	<div class="card-body">
		<h5 class="card-title">Editar dados do serviço</h5>
	</div>
	<hr />
	<div class="container">
		<form action="{{route('servico.update', $dados->id)}}" method="post">
			<input type="hidden" name="_method" value="PUT">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" name="nomeServico" id="" class="form-control" placeholder="Nome do serviço" required="" value="{{$dados->nomeServico}}">
			</div>

			<div class="form-group">
				<textarea name="descricao" class="form-control" placeholder="Descrição do serviço" required="">{{$dados->descricao}}</textarea>
			</div>

			<div class="form-group">
				<select class="form-control" name="departamento" required="">
					<option value="">Selecionar departamento</option>
					<option {{($dados->departamento == 'Administração'  ? 'selected' : '')}}>Administração</option>
					<option {{($dados->departamento == 'Financeiro'  ? 'selected' : '')}}>Financeiro</option>
					<option {{($dados->departamento == 'Linha de produção'  ? 'selected' : '')}}>Linha de produção</option>
					<option {{($dados->departamento == 'Portaria'  ? 'selected' : '')}}>Portaria</option>
					<option {{($dados->departamento == 'Recursos humanos'  ? 'selected' : '')}}>Recursos humanos</option>
				</select>
			</div>

			<div class="form-group">
				<select class="form-control" name="prioridade" required="">
					<option value="">Selecionar prioridade</option>
					<option {{($dados->prioridade == 'Alta'  ? 'selected' : '')}}>Alta</option>
					<option {{($dados->departamento == 'Média'  ? 'selected' : '')}}>Média</option>
					<option {{($dados->departamento == 'Baixa'  ? 'selected' : '')}}>Baixa</option>
				</select>
			</div>

			<div class="form-group">
				<select class="form-control" name="canalSuporte" required="">
					<option value="">Selecionar canal de suporte</option>
					<option {{($dados->canalSuporte == 'Email'  ? 'selected' : '')}}>Email</option>
					<option {{($dados->canalSuporte == 'Ramal'  ? 'selected' : '')}}>Ramal</option>
				</select>
			</div>

			<div class="form-group">
				<select class="form-control" name="canalSolicitacao" required="">
					<option value="">Selecionar canal solicitação</option>
					<option {{($dados->canalSolicitacao == 'Email'  ? 'selected' : '')}}>Email</option>
					<option {{($dados->canalSolicitacao == 'Ramal'  ? 'selected' : '')}}>Ramal</option>
				</select>
			</div>

			<div class="form-group">
				<input type="text" name="horarioFunc" id="" class="form-control" placeholder="Horário de funcionamento" required="" value="{{$dados->horarioFunc}}">
			</div>

			<div class="form-group">
				<input type="text" name="sla" id="" class="form-control" placeholder="Acordo de nível de serviço" required="" value="{{$dados->sla}}">
			</div>

			<div class="form-group">
				<select class="form-control" name="status" required="">
					<option value="">Selecionar status</option>
					<option {{($dados->status == 'Ativo'  ? 'selected' : '')}}>Ativo</option>
					<option {{($dados->status == 'Inativo'  ? 'selected' : '')}}>Inativo</option>
				</select>
			</div>

			<a href="{{ url()->previous() }}"><button type="button" class="btn btn-danger">Cancelar</button></a> <button type="submit" class="btn btn-success">Editar registro</button>
		</form>
		<hr />
	</div>
</div>
@endsection