<?php

class Login_BD {

    public $conexion;

    public function __construct() {
        $this->conexion = new Conexion_BD("agencia_viajes");
    }

    function compararContraseña($usuario, $password) {
        $sesion = false;

        $this->conexion->connect();
        $query = 'SELECT password FROM usuario WHERE usuario = \'' . $usuario . '\'';
        $result = $this->conexion->query($query);
        $result =     $this->conexion->query($query);
        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            foreach ($line as $col_value) {
                if (md5($password) == $col_value) {
                    $_SESSION['pass'] = $password;
                    $sesion = true;
                }
            }
        }
            $this->conexion->close();
        return $sesion;
    }
    
     function agregarUsuario($usuario, $password) {

        $this->conexion->connect();
        $query = 'insert into usuario(usuario,password) values ("' . $usuario . '","'.md5($password).'")';
  $this->conexion->query($query);
            $this->conexion->close();
    }

}

?>