<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container">
<div class="row">
	<div class="col-3"></div>
	<div class="col-6">
		<h2>Formulario de fotos</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" class="form-control" id="nombre" name="nap">
			</div>
			
			<div class="form-group">
				<label for="archivo">Foto:</label>
				<input class="form-control-file" type="file" name="foto" id="archivo">
			</div>

			<button class="btn btn-warning" type="submit">Enviar</button>
		</form>
	</div>
	<div class="col-3"></div>
</div>
</div>

	<!--
	<div class="container">
		<div class="row bg-info">
			<div class="col-4 bg-primary">vendo pan</div>
			<div class="col-4 bg-danger">2</div>
			<div class="col-6 bg-warning">ya no hay pan</div>
		</div>

		<div class="row bg-dark">
			<div class="col-2">otra linea</div>
		</div>
	</div>
		-->

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>