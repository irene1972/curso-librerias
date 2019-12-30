<?php

require_once '../vendor/autoload.php';

// Conexión bd
$conexion = new mysqli("localhost", "root", "", "curso_mvc");
$conexion->query("SET NAMES 'utf8'");

// Consulta a paginar
//$consulta = $conexion->query("SELECT * FROM notas");
//$num_registros = $consulta->num_rows;
$consulta = $conexion->query("SELECT COUNT(id) AS 'total' FROM notas");
$num_registros = $consulta->fetch_object()->total;
$num_por_pag = 2;

// Hacer paginación
$pagination = new Zebra_Pagination();

//Introducimos en el paginador el Número total de elementos a paginar
$pagination->records($num_registros);

//Introducimos en el paginador el Número de elementos por página
$pagination->records_per_page($num_por_pag);

//$ini=0;
//$fin=2;

$page = $pagination->get_page();
$ini = ($page - 1) * $num_por_pag;
$fin = $num_por_pag;

$sql = "SELECT * FROM notas LIMIT $ini, $fin";
//echo $sql;die();
$notas = $conexion->query($sql);

echo "<link rel='stylesheet' href='../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css' type='text/css'>";
while( $nota = $notas->fetch_object()){
  echo "<h1>{$nota->titulo}</h1>";
  echo "<h3>{$nota->descripcion}</h3></hr>";
};

$pagination->render();

?>