<?php

$user="adri";
$pass="123";

sesion_start();

if($_POST['username']==$user&&$_POST['$pass']==$$pass){
  $_SESSION['login']='administrador';
}

 ?>
