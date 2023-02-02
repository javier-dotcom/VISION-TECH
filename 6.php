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

    .img {
        margin: 20px auto;
        width: 85%;
    }

    img {
        width: 100%;
        margin: auto;

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




    <h1>Tabla de PROVEEDORES </h1>

    <?php
    require_once "conectar.php";

$ver= "SELECT * FROM proveedores";
$consulta=mysqli_query($conexion,$ver);



                      
echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Codigo proveedor</td><td>Nombre</td><td>Telefono</td><td>Mail</td>   ";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){

   echo "<td> " . $fila["Cod_proveedor"]  . " </td><td>  " . $fila["Nombre"] . "</td><td> " . $fila["Telefono"]  . "</td><td>  " . $fila["Mail"]  .  "</td>";
   echo"</tr>";
}
echo "</table>";

?>

    <h1>Tabla Cod_producto -- Cod_proveedor </h1>

    <?php
$ver= "SELECT * FROM productos_proveedores";
$consulta=mysqli_query($conexion,$ver);



                      
echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Codigo producto</td><td>NCodigo proveedor</td>   ";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){

   echo "<td> " . $fila["Cod_producto"]  . " </td><td>  " . $fila["Cod_proveedores"] ."</td>";
   echo"</tr>";
}
echo "</table>";

?>
    <div class="img">
        <img src="Capa 1.png">

    </div>

</body>

</html>