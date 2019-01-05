<?php 

$user = "root";
$pass = "";
$db_name = "ayudantia";
$host = "localhost";

// Por Procedimientos / Procedural
$db = mysqli_connect($host, $user, $pass, $db_name);

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s", mysqli_connect_error());
    exit();
}

/* Consultas de selección que devuelven un conjunto de resultados */
if ($resultado = mysqli_query($db, "SELECT * FROM imagen")) {
    
    foreach ($resultado as $key => $value) {
    	echo $value['url_imagen'];
    	echo "<br>";
    }

    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}

mysqli_close($db);

 ?>