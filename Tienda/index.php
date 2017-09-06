<?php

require_once 'Clases/Persona.php';
$Persona1 = new Persona();

$Persona1->obtenerEdad(1994);
$Persona1->setNombre("adri");



require_once Controlador/Vendedor.php;


var_dump(new class{
  public function __construct(){

  }
});


var_dump(new class(10){
private $num;
  public function __construct(){
      &$this->num=$num;
  }
});

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="login">
      usuario: <input type="text" name="username";
          contraseña: <input type="password" name="password";

    </form>

  </body>
</html>
