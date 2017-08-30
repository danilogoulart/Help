			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Novo Chamado</h3>
					<?php if($alerta!=null){ ?>
								<div style="text-align: center;" class="alert alert-<?=$alerta['class']?>">
									<?=$alerta['mensagem']?>
								</div>

							<?php }?>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="<?=base_url()?>chamados/inserir" method="post">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">ID da Loja</label>
									<div class="col-sm-8">
										<input type="number" name="id_loja" class="form-control1" id="focusedinput" placeholder="ID da Loja">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nome da Loja</label>
									<div class="col-sm-8">
										<input type="text" name="nome_loja" class="form-control1" id="focusedinput" placeholder="Nome da Loja">
									</div>
								</div>
								
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Área da ocorrência</label>
									<div class="col-sm-8"><select name="tipo_erro" id="selector1" class="form-control1">
										<option>Layout</option>
										<option>Checkout</option>
										<option>Método de Envio</option>
										<option>Método de Pagamento</option>
									</select></div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Descrição</label>
									<div class="col-sm-8"><textarea name="descricao_erro" id="txtarea1" cols="100" rows="7" class="form-control" placeholder="Link do problema: 
Data da Ocorrência:
Periodicidade:
Cliente testou?
O problema persistiu?
Passo a passo pra causar o problema:
Ticket Zendesk:"></textarea></div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Prioridade</label>
									<div class="col-sm-8"><select name="prioridade" id="selector1" class="form-control1">
										<option>Muito baixa</option>
										<option>Baixa</option>
										<option>Média</option>
										<option>Alta</option>
										<option>Urgente</option>
									</select></div>
								</div>
						<div class="form-group">
							<label for="exampleInputFile" class="col-sm-2 control-label">Upload do Print</label>
							<div class="col-sm-8"><input type="file" id="exampleInputFile" class="form-control"></div>
						 </div>
						 <input type="hidden" name="id_user" value="1">
						 <input type="hidden" name="id_dev" value="6">
						 <input type="hidden" name="status" value="Não aberto">
						  <div class="panel-footer">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2">

									<button class="btn-danger btn navbar-right ">Reset</button>
									<button name="submit" value="submit" class="btn-primary btn navbar-right ">Entrar</button>
									
									
								</div>
							</div>
							</form>
							
						</div>
					</div>

	 					 
						 
					  
			
