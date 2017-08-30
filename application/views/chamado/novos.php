			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Novos chamados</h3>
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">
						<table class="table">
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
								<th>Resp do suporte</th>
								<th>Analista Resp</th>
								<th>Data de Abertura</th>
								<th></th>
								<th></th>
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
								<td></td>
								<td></td>
							</tr>
						<?php endforeach ?>
					<?php endif ?>
					</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
