<?php

class Ruta {

public $nombre;
    public $ciudad_origen;
    public $ciudad_destino;
    
public $kilometros;
    public $tiempo;
    
    
    function __construct($nombre, $ciudad_origen, $ciudad_destino, $kilometros, $tiempo) {
        $this->nombre = $nombre;
        $this->ciudad_origen = $ciudad_origen;
        $this->ciudad_destino = $ciudad_destino;
        $this->kilometros = $kilometros;
        $this->tiempo = $tiempo;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getCiudad_origen() {
        return $this->ciudad_origen;
    }

    function getCiudad_destino() {
        return $this->ciudad_destino;
    }

    function getKilometros() {
        return $this->kilometros;
    }

    function getTiempo() {
        return $this->tiempo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCiudad_origen($ciudad_origen) {
        $this->ciudad_origen = $ciudad_origen;
    }

    function setCiudad_destino($ciudad_destino) {
        $this->ciudad_destino = $ciudad_destino;
    }

    function setKilometros($kilometros) {
        $this->kilometros = $kilometros;
    }

    function setTiempo($tiempo) {
        $this->tiempo = $tiempo;
    }



    
}


?>