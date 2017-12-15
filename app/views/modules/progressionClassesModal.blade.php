<div class="modal fade" id="modalProgressionClasses" tabindex="-1" role="Modal Add Class" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-blue"><b><i class="fa fa-share fa-fw text-muted"></i> Progressão de alunos</b></h3>
			</div>
			{{ Form::open([ "url" => URL::to("classes/receive-class"), "id" => "formReceiveClass"]) }}
			<div class="modal-body">
				<p>
					Nesta função é possível progredir os alunos da turma selecionada para turmas do próximo ano levito.<br />
				</p>
				<br />

				<div class="row">
					<div class="col-xs-9"><strong>Aluno</strong></div>
					<div class="col-xs-3"><strong>Próxima turma</strong></div>
				</div>

				<ul class="list-group list-attends">
					<li class="list-group-item">
						<fieldset>
							<div class="row">
								<div class="col-xs-4">Fulano</div>
								<div class="col-xs-4">
									<select name="classe_id" class="form-control"></select>
								</div>
								<div class="col-xs-4">
									<select name="offers_id" class="form-control" multiple></select>
								</div>
							</div>
						</fieldset>
					</li>
				</ul>

				<p class="text-muted">
					Confira todos os dados antes de salvar.
				</p>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Confirmar</button>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
