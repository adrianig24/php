<?php

$user="adri";
$pass="123";

sesion_start();

if($_POST['username']==$user&&$_POST['$pass']==$$pass){
setcookie('username',$_POST['username'],time()+60*60*24*365);
setcookie('pass',$_POST['pass'],time()+60*60*24*365);
}

 ?>
