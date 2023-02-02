<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <title>Visiontech</title>

</head>

<body>



    <div class="mostrar">
        <div class="login">
            <div class="vision">
                <div class="h2h5">
                    <h2>VISIONTECH</h2>
                    <h5>INFORMATICA</h5>
                </div>
                <div>
                    <h5>Login</h5>
                </div>
            </div>
            <form class="form" action="intento.php" action="get">

                <h2 class="h2">Aplicacion para control de stock</h2>
                <br>
                <h4 class="h2"> Usuario o Contraseña<br> ERRONEA <br><svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-alert-triangle" width="38" height="38" viewBox="0 0 24 24"
                        stroke-width="2.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 9v2m0 4v.01" />
                        <path
                            d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                    </svg><br> Inténtalo Nuevamente </h4>


                <div>
                    <h3>INGRESAR USUARIO</h3>
                    <input type="text" name="usu">
                </div>
                <div>
                    <h3>INGRESAR CONTRASEÑA</h3>
                    <input type="text" name="con">
                </div>
                <br>
                <div>
                    <input class="input" type="submit" value="INGRESAR" name="in">
                </div>
            </form>
        </div>
    </div>

    <?php
    if(isset($_GET["in"])){
$usuario=strtolower($_GET["usu"]);
$contrasena=$_GET["con"];
$usu_ok="javier";
$con_ok="123";

if($usuario==$usu_ok && $contrasena==$con_ok){

header("Location: 1.html");

}else{
header("Location: intento.php");
 
}
}
?>
    <script>
    </script>
</body>

</html>