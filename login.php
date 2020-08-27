<!DOCTYPE html>
<?php session_start(); ?>

<html>
<title>Control panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/loginStyle.css">

<body>

<main>
    <div class="container">
        <section class="center">
            <div class="loginSection">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="form-group">
                        <label for="inpUsername">Username</label>
                        <input type="text" name="usuario" class="form-control" id="inpUsername" required>
                    </div>

                    <div class="form-group">
                        <label for="inpPassword">Password</label>
                        <input type="password" name="pass" class="form-control" id="inpPassword" required>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-login" name="login">Submit</button>
                    </div>
            </div>


            </form>
        </section>
    </div>

</main>


<?php

include("Conexion/Conexion_BD.php");
include("Conexion/Login_BD.php");
if (!empty($_SESSION['pass'])) {
    session_destroy();
}
if (isset($_POST['login']) && !empty($_POST['usuario']) && !empty($_POST['pass'])) {
    $_SESSION['valid'] = false;
    $login_bd = new Login_BD();

    $resultado = $login_bd->compararContraseña($_POST['usuario'], $_POST['pass']);
    if ($resultado == true) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_POST['usuario'];
        header('Location: home.php');
    }

    if ($_SESSION['valid'] == false) {
        echo "<center> Usuario no valido. </center>";
    }
}
?>


</body>
</html>
