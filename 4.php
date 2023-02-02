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
    .bus2 {
        display: flex;
        width: 80%;
        margin: auto;
        height: 50%;

    }
    </style>
</head>

<body>
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

                    <div class="inicio a"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-notes" width="46" height="46" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="#ffbf00" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="5" y="3" width="14" height="18" rx="2" />
                            <line x1="9" y1="7" x2="15" y2="7" />
                            <line x1="9" y1="11" x2="15" y2="11" />
                            <line x1="9" y1="15" x2="13" y2="15" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="46"
                            height="46" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                        <p>Ver Lista de Provedores</p>
                    </div>
                </a>


                <a href="">
                    <div class="inicio a "><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-key" width="46" height="46" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="#ffbf00" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="8" cy="15" r="4" />
                            <line x1="10.85" y1="12.15" x2="19" y2="4" />
                            <line x1="18" y1="5" x2="20" y2="7" />
                            <line x1="15" y1="8" x2="17" y2="10" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="46"
                            height="46" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none"
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

            </div>
            <div>
                <div>
                    <h2 class="h23">Consultar stock de prodctos</h2>
                </div>

                <div class="ponele4">
                    <form class="bus ponele4" method="get" action="4_1.php">
                        <div class="bus2">
                            <div class="bus1">
                                <h3>Ingresar codigo para ver stock</h3>
                                <input class="estiloinput" type="number" name="codi">
                            </div>
                            <div class="bus1">
                                <h3>Consultar Stock </h3><input class="estiloinput" type="submit" name="buscar1"
                                    value="Consultar">
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <div class="bus2">

                    <div class="bus1">
                        <form method="get" action="4_2.php">
                            <h3>Consultar <br>Stock <br>todos los productos</h3>
                            <input class="estiloinput" type="submit" name="buscar2" value="Consultar">
                        </form>
                    </div>

                    <div class="bus1">
                        <form method="get" action="4_2.php">
                            <h3>Consultar <br>productos<br> con Stock menor a 6</h3>
                            <input class="estiloinput" type="submit" name="buscar3">
                        </form>
                    </div>
                    <div class="bus1">
                        <form method="get" action="4_2.php">
                            <h3>Consultar<br> productos <br>con Stock entre 5 y 10 </h3>
                            <input class="estiloinput" type="submit" name="buscar4">
                        </form>
                    </div>
                    <div class="bus1">
                        <form method="get" action="4_2.php">
                            <h3>Consultar<br> productos <br> Stock Mayor a 10 </h3>
                            <input class="estiloinput" type="submit" name="buscar5">
                        </form>
                    </div>


                </div>





            </div>
        </div>




</body>

</html>
<!-- -->