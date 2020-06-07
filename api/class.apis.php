<?php

class APIs
{
  private $curl;
  private $data = [];
  private $response;

  public function selectComunaSantiago(){

    $data = array('reg_id' => '7');
    $data = json_encode($data);
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://midastest.minsal.cl/farmacias/maps/index.php/utilidades/maps_obtener_comunas_por_regiones",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $data,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: multipart/form-data'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
  }

  public function info_general(){

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://farmanet.minsal.cl/maps/index.php/ws/getLocalesRegion?id_region=7");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response, true);

    foreach ($response as $valores) {
      $array[] = array(
        'fecha' => $valores['fecha'],
        'local_id' => $valores['local_id'],
        'local_nombre' => $valores['local_nombre'],
        'comuna_nombre' => $valores['comuna_nombre'],
        'localidad_nombre' => $valores['localidad_nombre'],
        'local_direccion' => $valores['local_direccion'],
        'apertura' => $valores['funcionamiento_hora_apertura'],
        'cierre' => $valores['funcionamiento_hora_cierre'],
        'telefono' => $valores['local_telefono'],
        'lat' => $valores['local_lat'],
        'long' => $valores['local_lng'],
        'fun_dia' => $valores['funcionamiento_dia'],
        'reg_id' => $valores['fk_region'],
        'com_id' => $valores['fk_comuna']
      );
    }


    return($array);

  }
}


 ?>
