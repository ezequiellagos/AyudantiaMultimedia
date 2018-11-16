<?php 

$var1 = "hola mundo";
$rut_Usuario = 2;
echo $var1;

// Esto es un comentario
/*
Comentario multilinea
*/


$arreglo1 = ['manzana', 5, 'naranja'];
$arreglo2 = array('manzana', 5, 'naranja');
$arreglo3 = ['valor0' => 'manzana', 'valor1' => 'pera'];

$arreglo4 = [
	'var2' => [
		'var21' => [
			'var211' => 5
		]
	],
	'var3' => [
		'var31' => [
			'var311' => 5
		]
	],
];


//Ciclos iterativos
// Do While
$varA = 0;
do{
	echo $varA;
	$varA++;
}while($varA < 10);

echo "<br>";

//While
$varB = 0;
while ($varB <= 10) {
	echo $varB;
	$varB++;
}

echo "<br>";

//For
for ($i=0; $i < 10; $i++) { 
	echo $i;
}

echo "<br>";

//Foreach
$usuarios = [
	[
		'nombre' => "Juanito",
		'edad' => 22,
	],
	[
		'nombre' => "Emeterio",
		'edad' => 21,
	]
];
foreach ($usuarios as $key => $value) {
	//echo "Key: ".$key." Valor: ".$value;
	echo "Nombre: {$value['nombre']} - Edad: {$value['edad']}";
	echo "<br>";
}

echo "----------------------------------";
echo "<pre>";
//print_r($usuarios);
echo "</pre>";
echo "----------------------------------";
echo "<br>";

// Condicionales
$a = "a";
$b = 1;
if ($a === $b) {
	echo "son identicos";
} elseif ($a == $b) {
	echo "son iguales";
}else {
	echo "no son iguales ni identicos";
}

if (($a == $b) || (is_numeric($a))) {
	echo "alsdjfklasdjhflasdjfhlsd";
}
/*
AND - &&
OR - ||
a == b 
a === b
a > b
a < b
a >= b
a >= b
a != b
a !== b
*/

// Switch
// switch ($variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }


// Funciones
function miFuncion($value='HOLA MUNDO')
{
	echo $value;
}

miFuncion('AAAAAAAAAAAAAAAAAAAAAA');


miFucnion2('restar', 1,5);
?>