<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>hola jugando con html</h1>


<?php

echo "<h2> hola probando h2 desde php </h2>";

//variables....

$numeroA = 10;
$numeroB = 20;

$sumaTotal = $numeroA + $numeroB;


//>..>=...  <...  <=... !=
//operador logico AND - &&
//operador logico OR ||


if(4>3){

    echo "esto anda bien";

}else{
    echo "esto no se cumple";
}


$numerito = 0;

while($numerito<10){

    echo "bucle.. infinito";

    $numerito++;

}



?>

<h2>El valor de la suma total es: <?php echo $sumaTotal; ?></h2>


    
</body>
</html>


<?php

echo "hola mundo php";
$pesos = 0;

echo $pesos;

//const dolar = 25

define("dolar",25);

echo dolar;

//array....

$arrayNombres = ["manuel","javier","carlos","Mariano","zoe","andres"];


echo $arrayNombres[0];
echo $arrayNombres[3];
// echo $arrayNombres[6];

$arrayApellido = array("zapata","rodriguez","Salomon");

$nombreA="diego";

echo "<br>";
echo "<h2>Var Dump</h2>";
var_dump($pesos);
var_dump($nombreA);
var_dump($arrayNombres);

echo "<pre>";
var_dump($arrayNombres);
echo "</pre>";

//Array Asociativos

echo "<br>";
echo "<h2>Array Asoc</h2>";

$cliente = [

    //key......valor
    [
    "id"=>1,
    "nombre"=> "Tablet",
    "marca"=> "Exo",
    "precio"=> 4500,
    "stock"=> null
    ],
    [
        "id"=>2,
        "nombre"=> "monitor",
        "marca"=> "samsung",
        "precio"=> 15000,
        "stock"=> true,
        "oferta"=> false
        ],

    [
        "id"=>3,
        "nombre"=> "mouse",
        "marca"=> "coradir",
        "precio"=> 4500,
        "stock"=> true
        ],


];

$clienteId = [01,02,03,04];
$clienteNombre = ["tablet","monitor","mouse"];
$clienteMarca = ["exo","samsung","coradir"];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente[0]['id'];
echo $cliente[0]['nombre'];
// echo $cliente[1]['oferta'];

//undefined.... algo que no exite..
// null... tiene la caja, pero esta vacia











