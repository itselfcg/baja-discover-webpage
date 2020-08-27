<?php

class Peaje {
   public $caseta;
public $transporte;   
public $costo;

function __construct($caseta, $transporte, $costo) {
    $this->caseta = $caseta;
    $this->transporte = $transporte;
    $this->costo = $costo;
}

function getCaseta() {
    return $this->caseta;
}

function getTransporte() {
    return $this->transporte;
}

function getCosto() {
    return $this->costo;
}

function setCaseta($caseta) {
    $this->caseta = $caseta;
}

function setTransporte($transporte) {
    $this->transporte = $transporte;
}

function setCosto($costo) {
    $this->costo = $costo;
}


    
}


?>