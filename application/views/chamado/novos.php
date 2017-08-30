			<script>
			jQuery(document).ready(function($){
				var janelaCriada = false;

				$('.modalTe').click(function(e){
					if(janelaCriada){
						$('#fundoModal').show();
						$('#imagem').attr("src",$(this).attr("href"));
					}else{
						var janelaModal =
						'<div id="fundoModal">'+
						'<div id="janela">'+
						'<h2>Janela Modal</h2><img id="imagem" src="'+$(this).attr("href")+'">'+
						'<p><a href="#" id="fecharModal">Fechar</a></p>'+
						'</div></div>';
						$('body').append(janelaModal);
						$('#fecharModal').click(function(e){
							$('#fundoModal').hide();
						});

						janelaCriada = true;
					}
					return false;
				});
			});
		</script>

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
								<td><a href="#bg"><img src="<?=base_url()?>assets/images/edit.png" title="Editar" alt="Editar"></a></td>
							
							</tr>
							<div id="bg"></div>
							<div class="box">
								<a href="" id="close"> <label for="">X</label> </a>
							</div>
						<?php endforeach ?>
					<?php endif ?>
					</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>

		


