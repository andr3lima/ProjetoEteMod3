<?php 
include 'menu.php';
?>

<div class="content-wrapper">
	<h3 class="text-primary mb-12">Peças Com Técnicos</h3>
	<form>
		<div class="row mb-12">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-block">
						
						<div class="table-responsive col-md-12">

							<table class="table table-striped" cellspacing="0" cellpadding="0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nome</th>
										<th>Marca</th>
										<th>Tipo</th>
										<th>N Serie</th>
										<th>Status</th>
										<th>data_cadastro</th>
										<th>data alteracao</th>
										<th>Técnico</th>
										<th class="actions">Ações</th>
									</tr>
								</thead>
								<tbody>

									<!-- # lista dos itens -->
								 <?php include("../controller/visu_emprestimo_pecas.php"); ?>
									
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