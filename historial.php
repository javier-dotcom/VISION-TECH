<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="2.css">
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


    .fo {
        display: flex;
        justify-content: space-evenly;
        width: 60%;
        margin: auto;
        padding: 15px;
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
    <div class="form">
        <h2>Consultar ventas </h2>


        <form method="get" action="historial.php">
            <div class="fo">

                <div>
                    <h4>Ver los</h4>
                    <select class="estiloinput" name=cant required>
                        <option value=1> 1 articulos</option>
                        <option value=2> 2 articulos</option>
                        <option value=3> 3 articulos</option>
                        <option value=4> 4 articulos</option>
                        <option value=5> 5 articulos</option>
                        <option value=6> 6 articulos</option>
                    </select>
                </div>
                <div>
                    <h4>Mas o menos vendidos</h4>
                    <select class="estiloinput" name=masomenos required>
                        <option value="DESC">Mas vendidos</option>
                        <option value="ASC">Menos vendidos</option>

                    </select>
                </div>




                <div>

                    <h4>Desde</h4>
                    <input class="estiloinput" type="date" name="desde" required>
                </div>

                <div>
                    <h4>Hasta</h4>
                    <input class="estiloinput" type="date" name="hasta" required>
                </div>


            </div>

            <div>
                <input class="estiloinput" type="submit" name="enviar" value="CONSULTAR">
            </div>
        </form>
    </div>



    <?php
    require_once "conectar.php";
    if(isset($_GET["enviar"])){
   $desde=$_GET['desde'];
   $hasta=$_GET['hasta'];
   $masomenos=$_GET['masomenos'];
   $cant=$_GET['cant'];
   $masomenos=="ASC"? $opcion="MENOS VENDIDOS" : $opcion="MAS VENDIDOS";

$ver= " SELECT * FROM fecha_venta WHERE fecha BETWEEN '$desde' AND '$hasta'";

$consulta=mysqli_query($conexion,$ver);
                                            

?> <h2>REGISTROS DE TODAS LAS VENTAS ENTRE <?php echo "EL " . $desde . " Y " . $hasta . " </h2>";
                      
echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Codigo producto</td><td>Cantidad Vendida</td><td>Fecha</td>  ";
  echo"</tr><tr>" ; 
while($fila=mysqli_fetch_array($consulta)){

   echo "<td> " . $fila["cod_producto"]  . " </td><td>  " . $fila["cantidad_vendida"] . "</td><td> " . $fila["fecha"]  . "</td>";
   echo"</tr>";


}
echo "</table>";


$resul="SELECT SUM(cantidad_vendida)  AS total_ventas ,  cod_producto AS codi_producto FROM 
fecha_venta f   WHERE fecha BETWEEN '$desde' AND '$hasta' 
GROUP BY cod_producto  ORDER BY total_ventas $masomenos
";


$consulta=mysqli_query($conexion,$resul);
$cont=0;

$resul1="SELECT * FROM productos";

//$f=mysqli_fetch_array($consulta1);



?> <h2>Tabla con los <?php echo $cant . " articulos " . $opcion . " </h2>";
echo "<table border=3px;>";  
  echo "<tr class='tr'>";
  echo"<td>Codigo producto</td><td>Cantidad Vendida</td> <td>Tipo</td> <td>Marca</td>";
  echo"</tr><tr>" ; 

while($fi=mysqli_fetch_array($consulta)){
$consulta1=mysqli_query($conexion,$resul1);

while($f=mysqli_fetch_array($consulta1)){
    
if( $f["Cod_producto"]==$fi["codi_producto"]){
    $n=$f["Nombre"];
    $t=$f["Tipo"];
    

}


}
    


   echo "<td> " . $fi["codi_producto"]  . " </td><td>  " . $fi["total_ventas"] . "</td> <td>  " . $t . "</td> <td>  " . $n . "</td> ";
   echo"</tr>";

$cont++;
if($cont==$cant){exit;}
}
echo "</table>";
}
?>



</body>

</html>