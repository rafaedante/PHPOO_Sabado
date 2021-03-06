<?php

//Definicion de una clase (plantilla)
class Usuario {
    
    // atributos
    public $nombre ;
    public $email ;
    public $clave ;
    
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
}

class TarjetaCredito {
    public $titular;
    public $vencimiento;
    public $numero;
    public $tipo;
    
    public function validarVencimiento() {
        return true;
    }
}

// -----------------------------------------

$edad = 18; // numero
$apodo = "Nick"; // cadena

$tarjeta_dorada = new TarjetaCredito(); // tarjeta de credito (nuevo tipo de dato!!!)
var_dump($tarjeta_dorada);
echo "<hr>";
$user1 = new Usuario("Lucas", "lu@gmail.com", "abc123");
var_dump($user1);
echo "<hr>";
$user2 = new Usuario("Ana", "anni@gmail.com", "123456");
var_dump($user2);
echo "<hr>";
$user3 = new Usuario();
var_dump($user3);
echo "<hr>";
echo $user1->presentarse();
echo $user2->presentarse();
