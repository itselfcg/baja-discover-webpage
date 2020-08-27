<?php

class Viaje{
    
       public $tipo;
    public $cantidad_pasajeros;
    public $transporte;
    public $ruta_ida; 
    public $ruta_regreso; 
    public $fecha_partida;
    public $fecha_regreso;
    
    
    function __construct($tipo, $cantidad_pasajeros, $transporte, $ruta_ida, $ruta_regreso, $fecha_partida, $fecha_regreso) {
        $this->tipo = $tipo;
        $this->cantidad_pasajeros = $cantidad_pasajeros;
        $this->transporte = $transporte;
        $this->ruta_ida = $ruta_ida;
        $this->ruta_regreso = $ruta_regreso;
        $this->fecha_partida = $fecha_partida;
        $this->fecha_regreso = $fecha_regreso;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getCantidad_pasajeros() {
        return $this->cantidad_pasajeros;
    }

    function getTransporte() {
        return $this->transporte;
    }

    function getRuta_ida() {
        return $this->ruta_ida;
    }

    function getRuta_regreso() {
        return $this->ruta_regreso;
    }

    function getFecha_partida() {
        return $this->fecha_partida;
    }

    function getFecha_regreso() {
        return $this->fecha_regreso;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setCantidad_pasajeros($cantidad_pasajeros) {
        $this->cantidad_pasajeros = $cantidad_pasajeros;
    }

    function setTransporte($transporte) {
        $this->transporte = $transporte;
    }

    function setRuta_ida($ruta_ida) {
        $this->ruta_ida = $ruta_ida;
    }

    function setRuta_regreso($ruta_regreso) {
        $this->ruta_regreso = $ruta_regreso;
    }

    function setFecha_partida($fecha_partida) {
        $this->fecha_partida = $fecha_partida;
    }

    function setFecha_regreso($fecha_regreso) {
        $this->fecha_regreso = $fecha_regreso;
    }


    
    
}
?>