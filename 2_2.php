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
    .existe {
        background-color: rgb(182, 15, 15);
        width: 60%;
        margin: auto;
        padding: 20px;
    }

    .datos {
        display: flex;
        justify-content: space-around;
    }

    .ponele {
        margin: auto;
    }
    </style>
</head>

<body>
    <?php
require_once 'conectar.php';
    if(isset($_GET['cargar'])){
//$yaExiste="ESE CODIGO YA EXISTE ";
$codigoproveedor=$_GET['codigoproveedor'];
$codi=$_GET["codi"];
$nome=$_GET["nom"];
$tipo=$_GET["tipo"];
$precio=$_GET["precio"];
//$cant=$_GET["cant"];
$time = time();
$fecha=date("Y-m-d (H:i:s)", $time) ;
$descrip=$_GET["mensaje"];
$repetido= "SELECT Cod_producto FROM productos";
$controlar_repe=mysqli_query($conexion,$repetido);
$existe=0;
$codi_pro_pro="INSERT INTO productos_proveedores (Cod_producto, Cod_proveedores) VALUES ($codi,$codigoproveedor)";
while($fila=mysqli_fetch_array($controlar_repe)){
if($fila['Cod_producto']==$codi){
$existe+=1;
echo "<h2 class='nosecargo'>NO CARGÓ CON EXITO EL ARTICULO <br> Codigo ya existente <br> <a class='nosecargo' href='2_2.php'> CLICK PARA INTENTARLO NUEVAMENTE </a> </h2>";

exit;

}
}


$carga= "INSERT INTO productos (Cod_producto, Nombre,Tipo, Precio,Fecha_ingreso,Descripcion) 
VALUES ($codi,'$nome', '$tipo', $precio,'$fecha','$descrip' )";
if($existe ==0){
mysqli_query($conexion,$carga);
mysqli_query($conexion,$codi_pro_pro);
echo "<h4 class='secargo'>SE DIO DE ALTA EL ARTICULO <br> " . $tipo  . " - MARCA " . $nome  . " - CODIGO  " . $codi .  " </h4>";
}
}

?>
    <div class="login">
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

        <div class="todo">

            <div class="aside">
                <a href="6.php">

                    <div class="inicio a">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notes" width="36"
                            height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="5" y="3" width="14" height="18" rx="2" />
                            <line x1="9" y1="7" x2="15" y2="7" />
                            <line x1="9" y1="11" x2="15" y2="11" />
                            <line x1="9" y1="15" x2="13" y2="15" />
                        </svg>


                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="36"
                            height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                        <p>Ver Lista de Provedores</p>

                    </div>

                </a>
                <a href="">
                    <div class="inicio a ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-key" width="36"
                            height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="8" cy="15" r="4" />
                            <line x1="10.85" y1="12.15" x2="19" y2="4" />
                            <line x1="18" y1="5" x2="20" y2="7" />
                            <line x1="15" y1="8" x2="17" y2="10" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="36"
                            height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>

                        <p>Modificar datos de usuario</p>
                    </div>
                </a>
                <a href="">
                    <div class="inicio a">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail"
                            width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
                            <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
                            <path d="M16 4l-4 4l-4 -4" />
                            <path d="M4 6.5l8 7.5l8 -7.5" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="3.6"
                            height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="3" y="5" width="18" height="14" rx="2" />
                            <polyline points="3 7 12 13 21 7" />
                        </svg>
                        <p>Ver mensajes de proveedores</p>
                    </div>
                </a>
            </div>
            <div class="ponele">
                <h2 class="h22"> Dar alta a Nuevos Productos </h2>
                <form class="dat" action="2_2.php" method="get">
                    <div class="datos">
                        <div class="inputt">
                            <h3>Codigo</h3>
                            <input class="estiloinput" type="text" name="codi" required>
                            <h3>Nombre</h3>
                            <input class="estiloinput" type="text" name="nom" required>
                        </div>
                        <div class="inputt">
                            <h3>Tipo</h3>
                            <input class="estiloinput" type="text" name="tipo" required>
                            <h3>Precio</h3>
                            <input class="estiloinput" type="text" name="precio" required>
                        </div>
                        <!--  <div class="inputt">
                            <!--    <h3>Cantidad por caja</h3>
                            <input class="estiloinput" type="text" name="cant" required>
                             <h3>Fecha ingreso</h3>
                            <input class="estiloinput" type="date" name="fecha" required>
                        </div>  -->
                        <div class="inputt">
                            <h3>Descripcion</h3>
                            <textarea class="estiloinput" name="mensaje" cols="15" rows="1"
                                placeholder="Coloca aqui una descripción del  articulo, para facilitar su busqueda "
                                required></textarea>
                            <h3>Codigo Proveedor</h3>

                            <select class="estiloinput" name="codigoproveedor" required>
                                <option value="">Elije Vendedor</option>
                                <option value="1"> 1-Javier </option>
                                <option value="2"> 2-Lorena </option>
                                <option value="3"> 3-Nacho </option>
                                <option value="4"> 4-Leo </option>
                                <option value="5"> 5-Juampi </option>
                                <option value="6"> 6-Tomi </option>
                                <option value="7"> 7-Ema </option>
                                <option value="8"> 8-Facu </option>
                            </select>
                        </div>
                    </div>
                    <div class="inputt">

                        <input class="submit estiloinput" type="submit" value="CARGAR ARTICULOS NUEVOS" name="cargar">

                    </div>

                    <div class="submit">

                    </div>
            </div>
            </form>
        </div>
    </div>

</body>

</html>