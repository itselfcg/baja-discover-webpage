<?php

class Caseta {

    public $nombre;
public $ubicacion;



function __construct($nombre, $ubicacion) {
    $this->nombre = $nombre;
    $this->ubicacion = $ubicacion;
}

function getNombre() {
    return $this->nombre;
}

function getUbicacion() {
    return $this->ubicacion;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setUbicacion($ubicacion) {
    $this->ubicacion = $ubicacion;
}




}


?>