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


        <div class="w3-content " style="margin-top:150px; margin-right: autopx;">

            <div id="rutas" style="margin-top:250px;">
<div class="titulo">Rutas</div>
                <?php
                foreach (glob('Conexion/*.php') as $filename) {
                    include_once $filename;
                }

                $rutas_bd = new Rutas_BD();
        
                $r1 = $rutas_bd->regresarTodaInformacionRutas();

                echo ' <table class="w3-table-all w3-card-4">
                    <tr class="w3-red">  <th>Rutas</th><th>Origen</th><th>Destino</th><th>KM</th><th>Tiempo</th>
                    </tr>';
                for ($i = 0; $i <  sizeof($r1); $i++) {
                    print "<tr><td>" . $r1[$i]["nombre"] . "</td>";
                    print "<td>" . $r1[$i]["ciudad_origen"] . "</td>";
                    print "<td>" . $r1[$i]["ciudad_destino"] . "</td>";
                    print "<td>" . $r1[$i]["kilometros"] . "</td>";
                    print "<td>" . $r1[$i]["tiempo"] . "</td></tr>";
                }

                echo '                </table>';
                ?>
<br><br>
            </div>

<div id="transportes" >
    <br><br><br><br><br><br><br><br><br>
    <div class="titulo">Transportes</div>

<?php
$transporte_bd = new Transporte_BD();

               $r1 = $transporte_bd->regresarInformacionTransportes();

                echo ' <table class="w3-table-all w3-card-4">
                    <tr class="w3-red">  <th>Nombre</th><th>Tipo</th><th>KM por L</th><th>Capacidad gasolina</th><th>Pasajeros máx.</th>
                    </tr>';
                for ($i = 0; $i <  sizeof($r1); $i++) {
                    print "<tr><td>" . $r1[$i]["nombre"] . "</td>";
                    print "<td>" . $r1[$i]["tipo"] . "</td>";
                    print "<td>" . $r1[$i]["km_por_litro"] . "</td>";
                    print "<td>" . $r1[$i]["capacidad_gasolina"] . "</td>";
                    print "<td>" . $r1[$i]["cant_pasajeros"] . "</td></tr>";
                }

                echo '                </table>';
                ?>

    <div id="precio_combustible" >
    <br><br><br><br><br><br><br><br><br>
        <div class="titulo">Precio combustible</div>


<?php
$combustible_bd = new Combustible_BD();
        $r1 = $combustible_bd->regresarInformacionCombustibles();

                echo ' <table class="w3-table-all w3-card-4">
                    <tr class="w3-red">  <th>Tipo</th><th>Precio</th><th>Unidad</th>
                    </tr>';
                for ($i = 0; $i < sizeof($r1); $i++) {
                    print "<tr><td>" . $r1[$i]["tipo"] . "</td>";
                    print "<td>" . $r1[$i]["precio"] . "</td>";
                    print "<td>" . $r1[$i]["unidad"] . "</td></tr>";
                }

                echo '                </table><br><br><br><br>';
                ?>

            </div>

            <div id="casetas" style="margin-bottom: 200px" >
    <br><br><br><br><br><br><br><br><br>
        <div class="titulo">Casetas</div>


                <?php
                $casetas_bd = new Caseta_BD();

               $r1 = $casetas_bd->regresarInformacionCasetas();

                echo ' <table class="w3-table-all w3-card-4">
                    <tr class="w3-red">  <th>Nombre</th><th>Ubicación</th>
                    </tr>';
                for ($i = 0; $i <  sizeof($r1); $i++) {
                    print "<tr><td>" . $r1[$i]["nombre"] . "</td>";
                    print "<td>" . $r1[$i]["ubicacion"] . "</td></tr>";
                }

                echo '                </table>';
                ?>

            </div>


        </div>

    </body>
</html>
<?php
} else {
    header('Location: login.php');
}
?>
