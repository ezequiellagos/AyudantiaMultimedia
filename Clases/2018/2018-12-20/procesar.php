<?php 

$user = "root";
$pass = "";
$db_name = "ayudantia";
$host = "localhost";

// Por Procedimientos / Procedural
$db = mysqli_connect($host, $user, $pass, $db_name);

$variable = $_POST['variable'];
$query = "INSERT INTO datos_ajax (dato) VALUES ('{$variable}')";


if (mysqli_query($db, $query) === TRUE) {
    echo "Se inserto correctamente";
}else{
	echo "Error al insertar";
}


 ?>