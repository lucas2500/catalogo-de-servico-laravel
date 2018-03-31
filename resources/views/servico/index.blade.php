@extends('shared.home')
@section('content')
<table class="table table-bordered mt-4">
	<thead>
		<tr>
			<th>#Ref</th>
			<th>Serviço</th>
			<th>Horário de serviço</th>
			<th>Status</th>
			<th>Detalhes</th>
			<th>Excluir</th>
		</tr>
	</thead>

	<tbody>
		@foreach($servicos as $servico)
		<tr>
			<td>{{$servico->id}}</td>
			<td>{{$servico->nomeServico}}</td>
			<td>{{$servico->horarioFunc}}</td>
			<td>{{$servico->status}}</td>
			<td><a href="{{route('servico.show', $servico->id)}}"><button class="btn btn-primary">Ir</button></td>
			<td><button class="btn btn-danger">Ir</button></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection