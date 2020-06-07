<?php
include("../api/class.apis.php");
$acceso = new APIs();
$listado = $acceso->info_general();
$arreglo_comunas = [];
foreach ($listado as $comunas) {
  $arreglo_comunas[] = array(
    'id' => $comunas['com_id'],
    'nombre' => $comunas['comuna_nombre']
  );
}

header('Content-type: application/json; charset=utf-8');
// mezcla de funciones que me permite obtener únicos valores de las comunas
$comunas_sin_duplicados = array_map("unserialize", array_unique(array_map("serialize", $arreglo_comunas)));
print_r(json_encode($comunas_sin_duplicados));
exit();

 ?>
