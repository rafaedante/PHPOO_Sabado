<?php

//require 'classes/cursoPHP/libreriaX.php';
//require 'classes/libGoogle/libreriaGoogle.php';

require "classes/cursoPHP/Usuario.php";
require "classes/cursoPHP/Programador.php";
require "classes/libGoogle/Usuario.php";

use cursoPHP\Usuario as Usuario;
use libGoogle\Usuario as UsuarioGoogle;

//var_dump(libreriaGoogle\sumar(10, 50));
//var_dump(libreriaX\validar(100));

$usr1 = new Usuario("juan@gmail.com");
var_dump($usr1);
echo "<hr>";
$usr2 = new UsuarioGoogle("correo");
var_dump($usr2);

echo "<hr>";

echo "<p>INICIO PROGRAMA</p>";
$valor = 0;
try{
    echo "<p>MODIFICANDO VARIABLE....</p>";
    $valor = 75;
    if($valor > 25){
        $mi_error = new Exception("la variable es mayor a veinticinco");
        throw $mi_error;
    }
    echo "<p>VARIABLE MODIFICADA</p>";
}
catch(PDOException $err) {
    echo "<p>ERROR EN BASE DE DATOS: ". $err->getMessage(). "</p>";
}
catch(Exception $a) {
    echo "<p>PROBLEMA AL MODIFICAR VARIABLE: ". $a->getMessage(). "</p>";
}
finally {
    echo "siempre se ejecuta";
}
echo "<p>FIN PROGRAMA</p>";   