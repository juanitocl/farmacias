<?php
if (isset($_GET['com_id']) AND !empty($_GET['com_id']) AND isset($_GET['lcl']) AND !empty($_GET['lcl'])) {
  include("api/class.apis.php");
  $acceso = new APIs();
  //$reg_id = 7;
  $com_id = trim(htmlspecialchars($_GET['com_id']));
  $lcl_id = trim(htmlspecialchars($_GET['lcl']));
  $listado = $acceso->info_general();
  $info_locales = [];
  foreach ($listado as $locales) {
    if ($com_id == $locales['com_id'] AND $lcl_id == $locales['local_id']) {
      $nombre_local = $locales['local_nombre'];
      $nombre_comuna = $locales['comuna_nombre'];
      $reg_id = $locales['reg_id'];
      $com_id = $locales['com_id'];
      $info_locales[] = array(
        'comuna' => $locales['comuna_nombre'],
        'local' => $locales['local_nombre'],
        'local_id' => $locales['local_id'],
        'apertura' => $locales['apertura'],
        'cierre' => $locales['cierre'],
        'localidad' => $locales['localidad_nombre'],
        'direccion' => $locales['local_direccion'],
        'tel' => $locales['telefono'],
        'latitutd' => $locales['lat'],
        'longitud' => $locales['long']
      );
    }
  }

}

 ?>
