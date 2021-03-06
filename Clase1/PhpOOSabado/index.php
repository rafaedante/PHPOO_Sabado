<?php

require 'autocarga.php';
//require "classes/Usuario.php";
//require "classes/UsuarioProgramador.php";
//require "classes/TarjetaCredito.php";

$user1 = new Usuario("Lucas", "lu@gmail.com", "abc123");
echo $user1->presentarse();
echo "<hr>";

$prog1 = new UsuarioProgramador("Luis", "luis@mail.com", "qwerty","Javascript", 50);
echo $prog1->programar();
echo $prog1->presentarse();
echo $prog1->validarConServer();
var_dump($prog1);
echo "<hr>";
$card1 = new TarjetaCredito("Ana", "11/23", "4533321111", TarjetaCredito::AMEX);
var_dump($card1);