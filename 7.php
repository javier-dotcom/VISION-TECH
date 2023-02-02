<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="2.css">
    <title>Visiontech</title>
    <style>
    table {

        text-align: center;
        margin: 15px 15px auto;
        padding: 5px;
        background-color: white;
        border: 8px groove rgb(197, 112, 8);
    }

    tr,
    td {
        padding: 5px;


    }

    .ver {
        background: rgb(197, 112, 8);
    }

    .nover {
        background: transparent;
    }

    .w {
        margin: 20px auto;
    }

    .e {
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






    <div>
        <div>
            <h2 class="h23 w">Buscar productos por Nombre o por Tipo</h2>

        </div>


        <form method="get" action="7.php">
            <div class="verti">
                <div class="bus e">

                    <div class="bus1 ">
                        <h3>Elejir parámetro de busqueda</h3>

                        <select class="estiloinput" name="parametro" required>
                            <option value="">Elije Parametro</option>
                            <option value="nombre">Buscar por Nombre </option>
                            <option value="tipo">Buscar por Tipo </option>

                        </select>
                    </div>

                    <div class="bus1">
                        <h3>Ingresar nombre de articulo</h3>

                        <input class="estiloinput" type="text" name="nombre" required>
                    </div>


                    <div class="bus1">
                        <h3> Click para Buscar </h3>
                        <input class="estiloinput" type="submit" name="cargar" value="Buscar">
                    </div>
                </div>
                <div>

                </div>

                <div>

                    <?php
require_once 'conectar.php';


    if(isset($_GET['cargar'])){

$nombre=$_GET["nombre"];
$parametro=$_GET["parametro"];

$repetido= "SELECT * FROM productos WHERE $parametro LIKE '$nombre%'";
$controlar_repe=mysqli_query($conexion,$repetido);
$existe=0;
?>
                    <div>
                        <h2 class="h23 w">Resultado de la busqueda</h2>

                    </div>
                    <?php  
while($fila=mysqli_fetch_array($controlar_repe)){

    if($parametro=="nombre"){
        $comodin1="ver";
        $comodin2="nover";
    }else{
          $comodin2="ver";
        $comodin1="nover";
    }
 

echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Cod_producto</td><td class='$comodin2'>Tipo</td><td class='$comodin1'>Nombre</td><td>Precio</td>  <td>Deccripcion</td> <td>Cant. por caja</td> <td>Fecha Ingreso</td>  <td>Stock</td> ";
  echo"</tr><tr>" ; 

   echo "<td> " . $fila["Cod_producto"]  . " </td><td class='$comodin2'>  " . $fila["Tipo"] . "</td><td class='$comodin1'> " . $fila["Nombre"]  . "</td><td>  " . $fila["Precio"]  . " </td>  <td>  " . $fila["Descripcion"]  . " </td>          <td> " . $fila["Cantidad_caja"]  .  "</td><td>  " . $fila["Fecha_ingreso"] . " </td> <td > "  . $fila["Stock"] . " </td>";
   echo"</tr>";

echo "</table>";

 
}
}






?>



        </form>








    </div>

</body>

</html>
<!--
-->