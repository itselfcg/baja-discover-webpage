<?php

class Transporte {

       public $nombre;
public $tipo;   
public $cilindros;
public $cantidad_pasajeros;

function __construct($nombre, $tipo, $cilindros, $cantidad_pasajeros) {
    $this->nombre = $nombre;
    $this->tipo = $tipo;
    $this->cilindros = $cilindros;
    $this->cantidad_pasajeros = $cantidad_pasajeros;
}

function getNombre() {
    return $this->nombre;
}

function getTipo() {
    return $this->tipo;
}

function getCilindros() {
    return $this->cilindros;
}

function getCantidad_pasajeros() {
    return $this->cantidad_pasajeros;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setTipo($tipo) {
    $this->tipo = $tipo;
}

function setCilindros($cilindros) {
    $this->cilindros = $cilindros;
}

function setCantidad_pasajeros($cantidad_pasajeros) {
    $this->cantidad_pasajeros = $cantidad_pasajeros;
}



}


?>