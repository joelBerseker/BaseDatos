<?php
	include("../includes/db.php")
?>
<?php
	include("../includes/header.php")
?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<?php
				if(isset($_SESSION['message'])){
			?>
				<div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
					<?=$_SESSION['message'] ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>

			<?php 
				session_unset();
			}
			?>
			<div class="card card-body">
				<form id="formajax" method="POST">
					<div class="form-group">
						<input type="text" name="Zona" class="form-control" placeholder="Zona" autofocus>
					</div>
					<div class="form-group">
						<textarea name="OtrosDatos"  row="2" class="form-control" placeholder="Otros Datos sobre la Zona" ></textarea>
					</div>
					<button id="btnguardar" class="btn btn-success btn-block" > Enviar</button>
					<!--
						<input type="submit" id="btnguardar" class="btn btn-success btn-block" name="save_product"value="Enviar">
					-->
				</form>
			</div>
		</div>
		<div class="col-md-8" id="recargar">	
			<?php 
				include("tabla.php");
			?>
		</div>
	</div>
</div>

<?php
	include("../includes/footer.php")
?>
	