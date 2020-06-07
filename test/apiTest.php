<?php
require 'api/class.apis.php';
use PHPUnit\Framework\TestCase;

/**
 *
 */
class apiTest extends PHPUnit_Framework_TestCase
{

  public function testReturnComunaSantiago(){
    $acceso = new APIs;
    $string = "<option value='0' selected>Elija Comuna</option>";
    $this->assertContains($string, $acceso->selectComunaSantiago());
  }

  public function testReturnsInfoGeneral(){

    $acceso = new APIs;
    $array = array(
      'fecha' => "07-06-2020",
      'local_id' => 753,
      'local_nombre' => "AHUMADA",
      'comuna_nombre' => "BUIN",
      'localidad_nombre' => "BUIN",
      'local_direccion' => "SAN MARTIN 174",
      'apertura' => "09:00 hrs.",
      'cierre' => "22:00 hrs.",
      'telefono' => "+560226313086",
      'lat' => "-33.732",
      'long' => "-70.735941",
      'fun_dia' => "domingo",
      'reg_id' => 7,
      'com_id' => 83
    );

    $this->assertContains($array, $acceso->info_general());
  }
}


 ?>
