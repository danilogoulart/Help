
			<div id="page-wrapper">
				<div class="graphs">
					<div class="col_3">
					<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-users"></i>
								<div class="stats">
								  <h5><?=$naoAbertos?> <span></span></h5>
								  <div class="grow grow1">
									<p>Novos</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-mail-forward"></i>
								<div class="stats">
								  <h5><?=$concluidos?></h5>
								  <div class="grow">
									<p>Concluídos</p>
								  </div>
								</div>
							</div>
						</div>		
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-usd"></i>
								<div class="stats">
								  <h5><?=$emAnalise?> <span></span></h5>
								  <div class="grow grow2">
									<p>Em análise</p>
								  </div>
								</div>
							</div>
						</div>			
						<div class="col-md-3 widget">
							<div class="r3_counter_box">
								<i class="fa fa-eye"></i>
								<div class="stats">
								  <h5><?=$abertos?> <span></span></h5>
								  <div class="grow grow3">
									<p>Em aberto</p>
								  </div>
								</div>
							</div>
						 </div>
						 
						<div class="clearfix"> </div>
					</div>

			<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-heading">
								<h2>Chamados em aberto - Com data superior a dez dias</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
							</div>
							<div class="panel-body no-padding" style="display: block;">
								<table class="table table-striped">
									
									<?php if ($chamadosCount!=null): ?>
										<div style="text-align: center;" class="alert alert-danger?>">
											Não há chamados nesta condição!
										</div>
									<?php else: ?>
										<thead>
											<tr class="warning">
												<th>Nº do chamado</th>
												<th>ID da Loja</th>
												<th>Lojista/Parceiro</th>
												<th>Assunto</th>
												<th>Responsável do suporte</th>
												<th>Analista Resp</th>
												<th>Data de Abertura</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach ($chamados as $chamado): ?>
											<tr>
												<td><?=$chamado["id_chamado"]?></td>
												<td><?=$chamado["id_loja"]?></td>
												<td><?=$chamado["nome_loja"]?></td>
												<td><?=$chamado["descricao_erro"]?></td>
												<td><?=$chamado["nome"]?></td>
												<td><?=$chamado["nome_dev"]?></td>
												<td><?=$chamado["data_chamado"]?></td>
											</tr>
										<?php endforeach ?>
									<?php endif ?>
									</tbody>
								</table>
							</div>
						</div>