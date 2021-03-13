<?php

class TarjetaCredito {
    public $titular;
    public $vencimiento;
    public $numero;
    public $tipo;
    
    const VISA = "VISA";
    const AMEX = "AMERICAN EXPRESS";
    const MC = "MASTER CARD";
    
    public function __construct($t, $v, $n, $ti) {
        $this->titular = $t;
        $this->vencimiento = $v;
        $this->numero = $n;
        $this->tipo = $ti;
    }


    public function validarVencimiento() {
        return true;
    }
}

