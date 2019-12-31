<?php

require '../vendor/autoload.php';

//IMPORTANTE:
// Esta librería require de la instalación de un plugin en el navegador (FirePHP para firefox o para chrome)

$frutas=array('manzanas', 'naranjas', 'sandias');
$nombres=array('ejecutivo'=>'Antonio', 'empleado'=>'Juan', 'jefe'=>'Roberto');

\FB::log($frutas);

echo "Hola mundo!!";

\FB::log('Muestrame esto en en consola');

\FB::log($nombres);
echo "Prueba: ".  $nombres['ejecutivo'];

?>