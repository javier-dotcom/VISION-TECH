<?php
require_once 'conectar.php';
$codi=$_GET["codi"];
$nome=$_GET["nom"];
$tipo=$_GET["tipo"];
$precio=$_GET["precio"];
$cant=$_GET["cant"];
$time = time();
$fecha=date("Y-m-d (H:i:s)", $time) ;
$descrip=$_GET["mensaje"];
$repetido= "SELECT Cod_producto FROM productos";
$controlar_repe=mysqli_query($conexion,$repetido);
$existe=0;
while($fila=mysqli_fetch_array($controlar_repe)){
if($fila['Cod_producto']==$codi){
$existe+=1;
echo "YA EXISTE ESE CODIGO";

exit;
}
}



if($existe ==0){
$carga= "INSERT INTO productos (Cod_producto, Nombre,Tipo, Cantidad_caja,Precio,Fecha_ingreso,Descripcion) 
VALUES ($codi,'$nome', '$tipo',$cant,$precio,$fecha,' $descrip')";
mysqli_query($conexion,$carga);
echo "SI CARGO";

}




?>