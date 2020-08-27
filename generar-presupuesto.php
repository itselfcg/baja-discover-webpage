<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    ?>
    <html >
        <head>
            <script>

                function habilitar_regreso() {
                    if (document.getElementById('tipo').value != '')
                        document.getElementById('ruta_regreso').disabled = false;
                    document.getElementById('fecha_regreso').disabled = false;
                    document.getElementById('fecha_regreso').required = true;
                    document.getElementById('hora_regreso').disabled = false;
                    document.getElementById('hora_regreso').required = true;


                }

                function aparece() {

                    var x = document.getElementById('pasajeros');

                    if (x.style.display === 'none') {
                        x.style.display = 'block';

                    }

                }


                $("#Formid").submit(function (event) {
                    loadAjax();
                    event.preventDefault()
                })

            </script>
        </head>

        <title>Generar presupuesto </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="css/estilo_texto.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">

        <body style="background:url(imagenes/3574.jpg)">

            <!-- Navbar -->
            <div class="w3-top">
                <div class="w3-bar w3-lime w3-card ">
                    <a href="home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>

                </div>
            </div>

            <!-- Page content -->
            <div class="w3 w3-center">

                <div class="w3-container w3-teal w3-content w3-card w3-center" style="padding-top: 75px;">
                    <br><br>
                    <div id="presupuesto" class="w3-card w3-white w3-center " style=" border-radius: 50px; padding-top: 50px; padding-bottom: 50px; ">
                        <form method="post" action="#resumen" >  
                            <fieldset>
                                <legend>Información del viaje</legend>
                             <p>  <label><span>Tipo de viaje</span> <select id="tipo" name="tipo" onchange='habilitar_regreso()'>
                                    <option value="Una dirección">Una dirección</option>
                                    <option value="Viaje redondo">Viaje redondo</option>
                                </select></label></p>

                                <?php
                                foreach (glob('Conexion/*.php') as $filename) {
                                    include_once $filename;
                                }

                                $rutas_bd = new Rutas_BD();
                                $casetas_bd = new Caseta_BD();
                                $combustible_bd = new Combustible_BD();
                                $transporte_bd = new Transporte_BD();

                                $resultado = $rutas_bd->regresarNombreRutas();
                                ?>
                                <p><label><span>Ruta partida</span> <select id="ruta_ida" class="field" name="ruta_ida">
                                        <?php
                                        foreach ($resultado as $r) {
                                            print "  <option value=\"$r\"> $r </option>";
                                        }
                                        ?>

                                    </select></label></p>

                                <p><label><span>Ruta regreso</span> <select id="ruta_regreso" name="ruta_regreso" disabled >
                                        <?php
                                        foreach ($resultado as $r) {
                                            print "  <option value=\"$r\"> $r </option>";
                                        }
                                        ?>


                                    </select></label></p> 

                                    <p><label><span>Fecha partida</span> <input type="date" name="fecha_partida" id="fecha_partida" required="" value="<?php echo date("Y-m-d"); ?>"></label></p>
                                <p><label><span>Hora partida</span> <input type="time" name="hora_partida" id="hora_partida" required="" value="<?php echo date("Y-m-d"); ?>"></label></p>
                                <p><label><span>Fecha regreso</span>  <input type="date" name="fecha_regreso" id="fecha_regreso" disabled></label></p>
                                <p><label><span>Hora regreso </span><input type="time" name="hora_regreso" id="hora_regreso" disabled required="" value="<?php echo date("Y-m-d"); ?>"></label></p>
                                <p> <button class="w3-button w3-red subir" type="submit" name="Submit">Estimar costos</button></p>
                            </fieldset>
                        </form>
                    </div>



                    <?php
                    if (isset($_POST["Submit"])) {
                        echo '    
                <div class="w3-container w3-teal w3-content w3-padding-64 w3-center">
<div id="resumen"  class="w3-card w3-white w3-center" style=" padding-top: 50px; padding-bottom: 50px;">
               <fieldset>  <legend>Resumen</legend>
';



                        echo '<div id="ida" class=" w3-light-gray w3-center" style="border-radius: 10px;  width:400px; display: inline-block;">';

                        echo '<p><b>PARTIDA </b></p>';

                        $r1 = $rutas_bd->regresarInformacionRutas($_POST["ruta_ida"]);
                        echo $r1[0]["nombre"] . "<br>";
                        echo "Origen: " . $r1[0]["ciudad_origen"] . "<br>";
                        echo "Destino: " . $r1[0]["ciudad_destino"] . "<br>";
                        echo "Kilometros:" . $r1[0]["kilometros"] . "<br>";
                        echo "Tiempo aproximado: " . $r1[0]["tiempo"] . "<br>";

                        $_SESSION["origen"] = $r1[0]["ciudad_origen"];
                        $_SESSION["destino"] = $r1[0]["ciudad_destino"];
                        $_SESSION["tiempo"] = $r1[0]["tiempo"];
                        $_SESSION["kilometros"] = $r1[0]["kilometros"];
                        $_SESSION["ruta_ida"] = $_POST["ruta_ida"];
                        $_SESSION["fecha_partida"] = $_POST["fecha_partida"];
                        $_SESSION["hora_partida"] = $_POST["hora_partida"];


                        $r1 = $casetas_bd->regresarTarifaCasetas($_POST["ruta_ida"], 2);
                        echo "Aproximado casetas : $" . $r1[0]["costo"] . "   -    ";
                        $r1 = $casetas_bd->regresarTarifaCasetas($_POST["ruta_ida"], 5);
                        echo " $" . $r1[0]["costo"];
                        echo '<br><br></div><br><br>';


                        if ($_POST["tipo"] == "Viaje redondo") {
                            echo '<div id="regreso" class=" w3-light-gray w3-center" style="border-radius: 10px;  width:400px; display: inline-block;">';

                            echo '<p><b>REGRESO </b></p>';
                            echo $_POST["ruta_regreso"] . "<br>";

                            $r1 = $rutas_bd->regresarInformacionRutas($_POST["ruta_regreso"]);
                            echo "Origen: " . $r1[0]["ciudad_destino"] . "<br>";
                            echo "Destino: " . $r1[0]["ciudad_origen"] . "<br>";
                            echo "Kilometros:" . $r1[0]["kilometros"] . "<br>";
                            echo "Tiempo aproximado: " . $r1[0]["tiempo"] . "<br>";

                            $_SESSION["ruta_regreso"] = $_POST["ruta_regreso"];
                            $_SESSION["origen_regreso"] = $r1[0]["ciudad_destino"];
                            $_SESSION["fecha_regreso"] = $_POST["fecha_regreso"];
                            $_SESSION["origen_regreso"] = $r1[0]["ciudad_origen"];
                            $_SESSION["destino_regreso"] = $r1[0]["ciudad_destino"];
                            $_SESSION["tiempo_regreso"] = $r1[0]["tiempo"];
                            $_SESSION["kilometros_regreso"] = $r1[0]["kilometros"];
                            $_SESSION["hora_regreso"] = $_POST["hora_regreso"];


                            $r1 = $casetas_bd->regresarTarifaCasetas($_POST["ruta_regreso"], 2);
                            echo "Aproximado casetas : $" . $r1[0]["costo"] . "   -    ";
                            $r1 = $casetas_bd->regresarTarifaCasetas($_POST["ruta_regreso"], 5);
                            echo " $" . $r1[0]["costo"] . "<br>";
                            echo '<br></div><br><br>';
                        }
                        $_SESSION["tipo"] = $_POST["tipo"];


                        echo '          <form method="post" >  
                            <a href="#pasajeros">

                                <button class="w3-button w3-red" type="button"  onclick="aparece()">Agregar pasajeros</button>
                            </a>
                        </form>

                </div>
  </fieldset> 
';
                    }
                    ?>

                    <br><br>

                    <div id="pasajeros" class="w3-card w3-white w3-center" style="border-radius: 50px;  display:none; padding-top: 50px; padding-bottom: 50px; ">
                        <fieldset>  <legend>Informacion de transporte</legend>

                            <form method="post" action="#itinerario" >  

                                <p><label><span>Cant. pasajeros</span><input type="number" id="cantidad" name="cantidad" value="1"></label></p>

                                <?php
                                $r2 = $transporte_bd->regresarTransportesRequeridos();

                                echo '<p><label><span>Transportes:</span><select id="transporte" name="transporte">';

                                for ($i = 0; $i < 4; $i++) {
                                    echo "<option value=" . $r2[$i][id] . ">" . $r2[$i][nombre] . "(" . $r2[$i][cant_pasajeros] . ")</option>";
                                }

                                echo '  </select></label></p>';
                                ?>
                                <p><button class="w3-button w3-red" type="submit" name="Submit2">Generar presupuesto</button></p>


                            </form>
                        </fieldset> 
                    </div>
                    <br><br>

                    <?php if (isset($_POST["Submit2"])) { ?>
                        <div id="itinerario" class="w3-card w3-white w3-center" style="padding-top: 50px; padding-bottom: 50px; ">

                            <fieldset>  <legend>Itinerario</legend>
                                <div id="ida2" class=" w3-light-gray w3-center" style=" width:400px; display: inline-block;">

                                    <br><b>PARTIDA</b> <br>
                                    <?php
                                    echo "Salida desde: " . $_SESSION["origen"] . "<br>";
                                    echo "Destino:" . $_SESSION["destino"] . "<br>";

                                    echo "Dia: " . $_SESSION["fecha_partida"] . "</br>";

                                    echo "Hora: " . $_SESSION["hora_partida"] . "</br>";

                                    echo "Ruta: " . $_SESSION["ruta_ida"] . "</br>";
                                    $r1 = $casetas_bd->regresarTarifaCasetas($_SESSION["ruta_ida"], $_POST["transporte"]);
                                    echo "Caseta: $" . $r1[0]["costo"] . "<br>";
                                    $caseta_partida = $r1[0]["costo"];
                                    $costo = $combustible_bd->regresarCalculCombustible($_POST["transporte"], $_SESSION["kilometros"]);

                                    echo "Combustible: $" . $costo . "<br>";

                                    $total_partida = $costo + $caseta_partida;
                                    echo "Total partida: $" . $total_partida . "<br><br>";
                                    echo '</div>';

                                    $dia_venida = $_SESSION["fecha_partida"];
                                    $dia = explode("-", $_SESSION["fecha_partida"]);

                                    if ($_SESSION["tipo"] == "Viaje redondo") {
                                        echo '<div id="regreso2" class=" w3-light-gray w3-center" style=" width:400px; display: inline-block;">';

                                        echo "<br><b>REGRESO</b><br>";

                                        echo "Salida desde: " . $_SESSION["destino_regreso"] . "<br>";
                                        echo "Destino:" . $_SESSION["origen_regreso"] . "<br>";

                                        echo "Dia: " . $_SESSION["fecha_regreso"] . "</br>";
                                        echo "Hora: " . $_SESSION["hora_regreso"] . "</br>";

                                        echo "Ruta: " . $_SESSION["ruta_regreso"] . "</br>";
                                        $r1 = $casetas_bd->regresarTarifaCasetas($_SESSION["ruta_regreso"], $_POST["transporte"]);
                                        $casetas_regreso = $r1[0]["costo"];

                                        echo "Caseta: $" . $casetas_regreso . "<br>";
                                        $combustible_regreso = $combustible_bd->regresarCalculCombustible($_POST["transporte"], $_SESSION["kilometros_regreso"]);

                                        echo "Combustible: $" . $combustible_regreso . "<br>";

                                        $later = strtotime($_SESSION["fecha_regreso"]);
                                        $earlier = strtotime($_SESSION["fecha_partida"]);

                                        $datediff = $later - $earlier;

                                        $dias = round($datediff / (60 * 60 * 24));
                                        $viaticos = $dias * 88.36;
                                        $total_regreso = $combustible_regreso + $casetas_regreso;
                                        echo "Total regreso: $" . $total_regreso . "<br><br>";
                                        echo '</div>';

                                        echo "<br>Dias: " . $dias . "<br>";
                                        echo "Viaticos: $" . $viaticos . "<br>";
                                    } else {
                                        $total_regreso = 0;
                                        $viaticos = 0;
                                    }



                                    $totalviaje = $total_partida + $total_regreso + $viaticos;
                                    echo "<br><b>Total viaje: $" . $totalviaje . "</b><br>";
                                }
                                ?>
                            </div>

                    </div>


                </div>

        </body>
    </html>
    <?php
} else {
    header('Location: login.php');
}
?>
