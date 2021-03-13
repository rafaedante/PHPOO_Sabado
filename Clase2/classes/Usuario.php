<?php

///Definicion de una clase (plantilla)
class Usuario {
    
    // atributos    
    protected $nombre ;
    public $email ;
    private $clave ;
    
    public function __construct($n= "Desconocido", $e= "ninguno", $c= "0000") {
        //definir el estado interno del objeto (instancia)
        $this->nombre = $n;
        $this->email = $e;
        $this->clave = $c;
    }
    
    // metodos
    public function presentarse() {
        return "<h1>Yo soy {$this->nombre}</h1>";
    }
    
    final function validarConServer() {
        return "<p>Validado!!!!</p>";
    }
    
    // getters y setters
    public function getClave() {
        return $this->clave;
    }
    
    public function setClave($nuevaClave, $actualClave) {
        if($this->clave == $actualClave) {
            $this->clave = $nuevaClave;
        }        
    }


    public function __destruct() {
        echo "<p>Estas por destruir el objeto {$this->nombre} </p>";
    }
}

