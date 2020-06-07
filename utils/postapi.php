<?php

include("../api/class.apis.php");
$acceso = new APIs();
$respuesta = $acceso->selectComunaSantiago();
print_r(json_encode($respuesta));


 ?>
