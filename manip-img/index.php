<?php 

  require '../vendor/autoload.php';

  // ruta de la foto original
  $foto_original = 'sepia.jpg';
  //$foto_original = 'http://localhost:8080/curso-librerias/manip-img/sepia.jpg';

  // ruta donde se guardará la foto modificada
  $ruta_guardado_foto_modificada = 'foto_modificada.jpg';

  $thumb = new PHPThumb\GD($foto_original);
  //$thumb = new PHPThumb\GD(__DIR__ .$foto_original);
  
  // REDIMENSIONAR: los parámetros son como máximo, la imagen mantendrá la proporcionalidad
  $thumb->resize(50, 50);
  //$thumb->show();
  $thumb->save($ruta_guardado_foto_modificada);

  // RECORTAR: los parámetros son pixels X e Y punto de partida del recorte. Luego ANCHO y ALTO del recorte
  $foto2_original = 'mafalda.jpg';

  $ruta2_guardado_foto_modificada = 'foto2_modificada.png';
  $thumb2 = new PHPThumb\GD($foto2_original);
  $thumb2->resize(250, 250);
  //$thumb2->crop(50, 50, 120, 120);
  //$thumb2->cropFromCenter(100);
  $thumb2->cropFromCenter(100,50);
  //$thumb2->show();
  $thumb2->save($ruta2_guardado_foto_modificada);

  // GUARDAR la imagen modificada en otro formato
  $foto5_original = 'mafalda.jpg';
  $ruta5_guardado_foto_modificada = 'foto5_modificada.png';
  $thumb5 = new PHPThumb\GD($foto5_original);
  $thumb5->show();
  $thumb5->save($ruta5_guardado_foto_modificada, 'png');

 /*
 ************
 IMPORTANTE!!
 ************
  EL y otras funciones show() genera errores. Para solucionarlo...
  "..
  Add to composer.json
    "repositories": [ { "type": "vcs", "url": "https://github.com/monter08/PHPThumb" }]

  and
    composer update masterexploder/phpthumb
  ..."
 */
  

?>