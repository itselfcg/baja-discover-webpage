<?php

class Ciudad {

    
public $nombre;


function __construct($nombre) {
    $this->nombre = $nombre;
}

function getNombre() {
    return $this->nombre;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

 
}


?>