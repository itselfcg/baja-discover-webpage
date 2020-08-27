<?php

class Presupuesto{
    public $viaje;
    public $costo_viaticos;
    public $costo_combustible;
    public $costo_casetas;
    
    function __construct($viaje, $costo_viaticos, $costo_combustible, $costo_casetas) {
        $this->viaje = $viaje;
        $this->costo_viaticos = $costo_viaticos;
        $this->costo_combustible = $costo_combustible;
        $this->costo_casetas = $costo_casetas;
    }

    
    function getViaje() {
        return $this->viaje;
    }

    function getCosto_viaticos() {
        return $this->costo_viaticos;
    }

    function getCosto_combustible() {
        return $this->costo_combustible;
    }

    function getCosto_casetas() {
        return $this->costo_casetas;
    }

    function setViaje($viaje) {
        $this->viaje = $viaje;
    }

    function setCosto_viaticos($costo_viaticos) {
        $this->costo_viaticos = $costo_viaticos;
    }

    function setCosto_combustible($costo_combustible) {
        $this->costo_combustible = $costo_combustible;
    }

    function setCosto_casetas($costo_casetas) {
        $this->costo_casetas = $costo_casetas;
    }


    
    
    
    
    
}
?>