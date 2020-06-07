<?php
if (isset($_GET['com_id']) AND !empty($_GET['com_id'])) {
  include("api/class.apis.php");
  $acceso = new APIs();
  //$reg_id = 7;
  $com_id = trim(htmlspecialchars($_GET['com_id']));
  $listado = $acceso->info_general();
  $info_locales = [];
  $nombreComuna = "";
  $resul = 0;
  foreach ($listado as $locales) {
    if ($com_id == $locales['com_id']) {
      $nombreComuna = $locales['comuna_nombre'];
      $info_locales[] = array(
        'id_reg' => $locales['reg_id'],
        'id_com' => $locales['com_id'],
        'comuna' => $locales['comuna_nombre'],
        'local' => $locales['local_nombre'],
        'local_id' => $locales['local_id'],
        'direccion' => $locales['local_direccion']
      );
      $resul++;
    }
  }


}

 ?>
