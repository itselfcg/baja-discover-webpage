<!DOCTYPE html>
<?php session_start(); ?>


<html>
<title>Control panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<body>

<main>
    <div class="container">
        <section class="center">
            <div class="login-container">
                <img id="img-logo" src="imagenes/logo.png">
                <br> <br>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" name="usuario" class="form-control" placeholder="Username" id="inpUsername"
                               required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i>
</span>
                        </div>
                        <input type="password" name="pass" class="form-control" id="inpPassword" placeholder="Password"
                               required>


                    </div>
                    <?php if (isset($_GET['msg'])) {
                        echo '<div id="password-error"><i class="fa fa-exclamation-circle red" aria-hidden="true"><label>Incorrect password. Try again.</label></i>
</div>';
                    }
                    ?>
                    <br>
                    <button type="submit" class="btn login-btn float-right" name="login">LOGIN</button>


                </form>
        </section>
    </div>

</main>


</body>
</html>


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
        $_SESSION['valid'] = true;
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_POST['usuario'];
        header('Location: home.php');
    }

    if ($_SESSION['valid'] == false) {
        header("Location:login.php?msg=1");

    }
}
?>
