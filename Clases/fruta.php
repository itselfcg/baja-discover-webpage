<?php


class fruta{
 public $tipo;
 public $cantidad;
 public $precio;
    

    public function __construct($tipo,$cantidad,$precio) {
        $this->tipo=$tipo;
        $this->cantidad=$cantidad;
        $this->precio=$precio;           
                
    }
    
    function getTipo() {
        return $this->tipo;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }


    
}

?>