<?php
$usuario=strtolower($_GET["usu"]);
$contrasena=$_GET["con"];
$usu_ok="javier";
$con_ok="123";

if($usuario==$usu_ok && $contrasena==$con_ok){

header("Location: 1.html");

}else{

header("Location:intento.php");
 
}
?>