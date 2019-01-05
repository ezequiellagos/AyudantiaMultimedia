<?php 

require_once 'db.php';
require_once 'upload_file.php';

$nombre = $_POST['nap'];
$foto = $_FILES['foto'];

$query = "INSERT INTO imagen (nombre, url_imagen) VALUES ('{$nombre}', '{$nombre}.jpg')";

if (mysqli_query($db, $query) === TRUE) {
    echo "Se inserto correctamente";
}else{
	echo "Error al insertar";
}

subeImagen($nombre, $foto);

 ?>