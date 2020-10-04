<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    ?>
    
<html >
    <title>Test </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="css/tmp/estilo_texto.css">

    <body style="background:url(imagenes/3574.jpg)">

        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-lime w3-card">
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>

            </div>
        </div>



        <div class="w3-content w3-center" style="margin-top:150px;">

            <a href="catalogo.php" class="cuadro_1 texto_cuadros">Catálogo rutas</a>
            <a href="catalogo.php#casetas" class="cuadro_1 texto_cuadros">Catálogo casetas</a>
            <a href="catalogo.php#transportes" class="cuadro_1 texto_cuadros">Catálogo unidades</a><br>
            <a href="catalogo.php#precio_combustible" class="cuadro_1 texto_cuadros">Catálogo precios combustible</a>
            <a href="generar-presupuesto.php" class="cuadro_1 texto_cuadros">Generar presupuesto</a>
            <a href="catalogo.php" class="cuadro_1 texto_cuadros">Reportes</a>


        </div>

    </body>
</html>
<?php
} else {
    header('Location: login.php');
}
?>
