<?php
if (isset($_POST['comuna']) AND !empty($_POST['comuna'])) {
  include("../api/class.apis.php");
  $acceso = new APIs();
  //$reg_id = 7;
  $com_id = trim(htmlspecialchars($_POST['comuna']));
  $listado = $acceso->info_general();
  $info_locales = [];
  foreach ($listado as $locales) {
    if ($com_id == $locales['com_id']) {
      $info_locales[] = array(
        'local' => $locales['local_nombre'],
        'local_id' => $locales['local_id'],
        'direccion' => $locales['local_direccion']
      );
    }
  }
  header('Content-type: application/json; charset=utf-8');
  print_r(json_encode($info_locales));
  exit();
}

 ?>
