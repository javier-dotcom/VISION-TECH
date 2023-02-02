<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <title>Document</title>
    <style>
    table {

        text-align: center;
        margin: 0 auto;
        padding: 5px;
        background-color: white;
        border: 8px groove rgb(197, 112, 8);
    }

    tr,
    td {
        padding: 5px;


    }

    h1,
    h2 {
        text-align: center;
    }

    body {

        background-color: rgb(238, 209, 209);
    }

    .tr {

        background-color: rgb(238, 209, 209);
        font-size: 24px;

    }

    .roja {
        background-color: red;
        width: 30px;
    }

    .verde {
        background-color: green;
        width: 30px;

    }

    .naranja {
        width: 30px;
        background-color: orange;

    }

    .inline {
        display: flex;
        justify-content: flex-start;
        background-color: white;
        width: 330px;
        margin: auto;
        padding-left: 3px;
        border-radius: 9px;
        border: 1px solid black;
    }

    .refe {
        margin-bottom: 10px;
        display: flex;
    }
    </style>
</head>

<body>

    <div class="vision">
        <div class="h2h5">
            <h2>VISIONTECH</h2>
            <h5>INFORMATICA</h5>
        </div>


        <div class="boton">

            <a href="2_2.php">
                <h4>Agregar <br> nuevos<br> productos</h4>
            </a>
        </div>


        <div class="boton">

            <a href="3.php">
                <h4>Cargar<br> productos <br>en falta</h4>
            </a>
        </div>



        <div class="boton">
            <a href="4.php">
                <h4>Consultar <br>stock de<br> productos</h4>
            </a>
        </div>

        <div class="boton">
            <a href="5.php">
                <h4>Registrar <br>ventas<br> productos</h4>
            </a>
        </div>
        <div class="boton">
            <a href="historial.php">
                <h4>Ver <br>Historial<br> Ventas</h4>
            </a>
        </div>
        <div class="boton">
            <a href="7.php">
                <h4>Buscar <br>Productos<br>por nombre</h4>
            </a>
        </div>

        <div class="boton">

            <a href="1.html">
                <h4>Inicio</h4>
            </a>
        </div>
    </div>







    <?php
require_once "conectar.php";


 if(isset($_GET['buscar2'])){
?>
    <h1>Tabla con todos los productos</h1>
    <h2>Referencias de colores </h2>

    <div class="refe">
        <div class="inline">
            <div>
                <p class="verde"> &nbsp</p>
            </div>
            <div>
                <p> &nbsp Stock mayor a 10 unidades</p>
            </div>
        </div>
        <br>

        <div class="inline">
            <div>
                <p class="naranja"> &nbsp</p>
            </div>
            <div>
                <p>&nbsp Stock menor a 10 y mayor a 5 unidades</p>
            </div>
        </div>
        <br>

        <div class="inline">
            <div>
                <p class="roja"> &nbsp </p>
            </div>
            <div>
                <p> &nbsp Stock menor a 6</p>
            </div>
        </div>

    </div>



    <?php
$ver= "SELECT * FROM productos";
$consulta=mysqli_query($conexion,$ver);



                      
echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Cod_producto</td><td>Tipo</td><td>Nombre</td><td>Precio</td>  <td>Descripcion</td> <td>Fecha Ingreso</td>  <td>Stock</td> ";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){

    if($fila["Stock"] < 5 ){

        $comodin="roja";

    }else if ($fila["Stock"] > 5  && $fila["Stock"]<10 ){
        $comodin="naranja";


    }else{
        $comodin="verde";


    }
   echo "<td> " . $fila["Cod_producto"]  . " </td><td>  " . $fila["Tipo"] . "</td><td> " . $fila["Nombre"]  . "</td><td>  " . $fila["Precio"]  . " </td>  <td>  " . $fila["Descripcion"]  . " </td>  <td>  " . $fila["Fecha_ingreso"] . " </td> <td class=" . $comodin ."> "  . $fila["Stock"] . " </td>";
   echo"</tr>";
}
echo "</table>";
}



 if(isset($_GET['buscar3'])){


?>

    <h1>Tabla de productos con Stock menor a 6 unidades </h1>

    <?php
$ver= "SELECT * FROM productos WHERE Stock < 6";
$consulta=mysqli_query($conexion,$ver);



                      
echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Cod_producto</td><td>Tipo</td><td>Nombre</td><td>Precio</td>  <td>Descripcion</td> <td>Fecha Ingreso</td>  <td>Stock</td> ";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){

    if($fila["Stock"] < 5 ){

        $comodin="roja";
    }else if ($fila["Stock"] > 5  && $fila["Stock"]<10 ){
        $comodin="naranja";


    }else{
        $comodin="verde";


    }
   echo "<td> " . $fila["Cod_producto"]  . " </td><td>  " . $fila["Tipo"] . "</td><td> " . $fila["Nombre"]  . "</td><td>  " . $fila["Precio"]  . " </td>  <td>  " . $fila["Descripcion"]  . " </td>          <td> " . $fila["Cantidad_caja"]  .  "</td><td>  " . $fila["Fecha_ingreso"] . " </td><td class=" . $comodin ."> " . $fila["Stock"]  .  "</td>";
   echo"</tr>";
}
echo "</table>";




}





 if(isset($_GET['buscar4'])){
?>
    <h1>Tabla de productos con Stock entre 5 y 10</h1>

    <div class="refe">


        <div class="inline">
            <div>
                <p class="naranja"> &nbsp</p>
            </div>
            <div>
                <p>&nbsp Stock entre 5 y 10 unidades</p>
            </div>
        </div>
        <br>



    </div>



    <?php
$ver= "SELECT * FROM productos WHERE Stock > 4 and Stock < 11";

$consulta=mysqli_query($conexion,$ver);



                      
echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Cod_producto</td><td>Tipo</td><td>Nombre</td><td>Precio</td>  <td>Descripcion</td> <td>Fecha Ingreso</td>  <td>Stock</td> ";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){

    if($fila["Stock"] < 5 ){

        $comodin="roja";

    }else if ($fila["Stock"] > 5  && $fila["Stock"]< 11 ){
        $comodin="naranja";


    }else{
        $comodin="verde";


    }
   echo "<td> " . $fila["Cod_producto"]  . " </td><td>  " . $fila["Tipo"] . "</td><td> " . $fila["Nombre"]  . "</td><td>  " . $fila["Precio"]  . " </td>  <td>  " . $fila["Descripcion"]  . " </td>          <td> " . $fila["Cantidad_caja"]  .  "</td><td>  " . $fila["Fecha_ingreso"] . " </td><td class=" . $comodin ."> " . $fila["Stock"]  .  "</td>";
   echo"</tr>";
}
echo "</table>";
}





 if(isset($_GET['buscar5'])){
?>
    <h1>Tabla de productos con Stock Mayor a 10 </h1>

    <div class="refe">


        <div class="inline">
            <div>
                <p class="verde"> &nbsp</p>
            </div>
            <div>
                <p>&nbsp Stock mayor a 10 unidades</p>
            </div>
        </div>
        <br>



    </div>



    <?php
$ver= "SELECT * FROM productos WHERE Stock > 10";

$consulta=mysqli_query($conexion,$ver);



                      
echo "<table border=3px;>";  
  echo"<td>Cod_producto</td><td>Tipo</td><td>Nombre</td><td>Precio</td>  <td>Descripcion</td><td>Fecha Ingreso</td>  <td>Stock</td> ";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){

    if($fila["Stock"] < 5 ){

        $comodin="roja";
    }else if ($fila["Stock"] > 5  && $fila["Stock"]<10 ){
        $comodin="naranja";


    }else{
        $comodin="verde";


    }
   echo "<td> " . $fila["Cod_producto"]  . " </td><td>  " . $fila["Tipo"] . "</td><td> " . $fila["Nombre"]  . "</td><td>  " . $fila["Precio"]  . " </td>  <td>  " . $fila["Descripcion"]  . " </td>          <td> " . $fila["Cantidad_caja"]  .  "</td><td>  " . $fila["Fecha_ingreso"] . " </td><td class=" . $comodin ."> " . $fila["Stock"]  .  "</td>";
   echo"</tr>";
}
echo "</table>";
}











?>
</body>

</html>