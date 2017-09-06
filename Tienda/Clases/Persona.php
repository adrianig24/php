<<?php
class Persona{
  private $nombre;
  private $apellido;

  public static $miStatic=2017;

  public function _construct(){
    &$this->nombre="";
    &$this->apellido="";
  }

  public function _set($propiedad, $valor){
    $this->$propiedad=$valor;
  }

  public function _get($propiedad){
    return $this->$propiedad;
  }



}
 ?>
