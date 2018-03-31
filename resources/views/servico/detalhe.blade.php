@extends('shared.home')
@section('content')
<div class="card">
	<div class="card-body">
		<h4 class="card-title text-center">Detalhes do serviço</h4>
		<label class="mt-4">Nome do serviço: </label> <strong>{{$dados->nomeServico}}</strong>
		<br />
		<label>Descrição do serviço: </label> <strong>{{$dados->descricao}}</strong>
		<br />
		<label>Departamento atendido: </label> <strong>{{$dados->departamento}}</strong>
		<br />
		<label>Prioridade do serviço: </label> <strong>{{$dados->prioridade}}</strong>
		<br />
		<label>Canal de solicitação de suporte: </label> <strong>{{$dados->canalSuporte}}</strong>
		<br />
		<label>Canal de solicitação do serviço: </label> <strong>{{$dados->canalSolicitacao}}</strong>
		<br />
		<label>SLA (Acordo de nível de serviço): </label> <strong>{{$dados->sla}}</strong>
	</div>
</div>
<a href="{{route ('servico.index') }}"><button class="btn btn-danger mt-4 mr-2">Voltar</button></a> <a href="{{route ('servico.edit', $dados->id)}}"><button class="btn btn-primary mt-4">Editar</button></a>
@endsection