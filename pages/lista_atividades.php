<?php 
include 'menu.php';
?>

<div class="content-wrapper">
	<h3 class="text-primary mb-12">Atividades</h3>
	<form>
		<div class="row mb-12">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-block">
						
						<div class="table-responsive col-md-12">

							<table class="table table-striped" cellspacing="0" cellpadding="0">
								<thead>
									<tr>
										<th>Atividade</th>
										<th>Disciplina</th>
										<th>Data de entrega</th>
										<th class="actions">Ações</th>
									</tr>
								</thead>
								<tbody>

									<!-- # lista dos itens -->
								 <?php include("../controller/visualizar_atividades.php"); ?>
									
								</tbody>	
							</table>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</form>
</div>
<?php include 'footer.php';?>