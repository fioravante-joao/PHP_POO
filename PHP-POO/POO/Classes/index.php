<?php
include 'classes/Terreno.php';

//obtendo os dados formulario
// $areaMinima = $_POST['area_minima'];
$areaMinima = 1000;

//instanciando objetos
$terreno1 = new Terreno(100,20, 50);
$terreno2 = new Terreno(120,40, 50);
$terreno3 = new Terreno(130,60, 50);

// criando lista (array) e atribuindo os objetos
$listaTerrenos = [];
$listaTerrenos [0] = $terreno1;
$listaTerrenos [1] = $terreno2;
$listaTerrenos [2] = $terreno3;

foreach($listaTerrenos as $t){
   if ($t->calcularArea() >= $areaMinima){
       echo $t->calcularArea() . "\n";
   }

?>