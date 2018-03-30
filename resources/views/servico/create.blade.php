@extends('shared.home')
<div class="modal fade" id="servicos">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Cadastrar serviço</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form action="" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="" id="" class="form-control" placeholder="Nome do serviço" required="">
					</div>

					<div class="form-group">
						<textarea class="form-control" placeholder="Descrição do serviço" required=""></textarea>
					</div>

					<div class="form-group">
						<select class="form-control" required="">
							<option value="">Selecionar departamento</option>
							<option value="Administração">Administração</option>
							<option value="Financeiro">Financeiro</option>
							<option value="Linha de produção">Linha de produção</option>
							<option value="Portaria">Portaria</option>
							<option value="Recursos humanos">Recursos humanos</option>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control" required="">
							<option>Selecionar prioridade</option>
							<option>Alta</option>
							<option>Média</option>
							<option>Baixa</option>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control" required="">
							<option value="">Selecionar canal de suporte</option>
							<option>Email</option>
							<option>Ramal</option>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control" required="">
							<option value="">Selecionar canal solicitação</option>
							<option>Email</option>
							<option>Ramal</option>
						</select>
					</div>

					<div class="form-group">
						<input type="text" name="" id="" class="form-control" placeholder="Horário de funcionamento" required="">
					</div>

					<div class="form-group">
						<input type="text" name="" id="" class="form-control" placeholder="Acordo de nível de serviço" required="">
					</div>

					<div class="form-group">
						<select class="form-control" required="">
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
@endsection

