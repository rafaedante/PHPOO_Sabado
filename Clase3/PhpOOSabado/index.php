<?php

require 'autocarga.php';

//SERIALIZACION

//$usuario1 = new Usuario2("Lorena", "980uty");
//var_dump($usuario1);
//echo "<hr>";
//$usuario1_cadena = serialize($usuario1); // Object -> string
//var_dump($usuario1_cadena);
//$f = fopen("lorena.txt", "w");
//fwrite($f, $usuario1_cadena);
//fclose($f);

echo "<hr>";

//DESERIALIZACION

//$f = fopen("lorena.txt", "r");
//$cadena_objeto = fgets($f);
//fclose($f);
//
//$usuario_recuperado = unserialize($cadena_objeto);
//var_dump($usuario_recuperado);

//CLONACION
//$usuario1 = new Usuario2("Lorena", "980uty");
//var_dump($usuario1);
//echo "<hr>";
////$usuario2 = $usuario1; // esto hace que tengamos 2 variables que apuntan al mismo objeto en memoria
//$usuario2 = clone($usuario1);
//
//$usuario1->nombre = "Juan";
//var_dump($usuario1);
//echo "<hr>";
//var_dump($usuario2);


//STATIC
$usuario1 = new Usuario2("Lorena", "980uty");
$usuario2 = new Usuario2("Pablo", "qwerty123");

//$usuario1->setJubilacion(70);
//$usuario1->verDatos();
//$usuario2->verDatos();


echo $usuario1->representar();
echo $usuario1->representar("html");
echo $usuario1->representar("html", true);
echo $usuario1->representar("html", "green");
echo $usuario1->representar("html", "blue");