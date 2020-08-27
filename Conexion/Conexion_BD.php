<?php

class Conexion_BD {

    public $host;
    public $nameDB;
    public $user;
    public $pass;
    public $conection;

    public function __construct($nameDB) {
        $this->host = "localhost:3306";
        $this->nameDB = $nameDB;
        $this->user = "root";
        $this->pass = "root";
    }

    public function connect() {
        $this->conection = mysqli_connect($this->host, $this->user, $this->pass, $this->nameDB) or die($this->conection);
        mysqli_set_charset($this->conection, "utf8");
    }

    public function query($query) {
        //echo $result;
        $result = mysqli_query($this->conection, $query) or die($this->conection->error);

        return $result;
    }

    public function close() {
        mysqli_close($this->conection);
    }

    public function free() {
        do {
            if ($res = $this->conection->store_result()) {
                $res->free();
            }
        } while ($this->conection->more_results() && $this->conection->next_result());
    }

}

?>