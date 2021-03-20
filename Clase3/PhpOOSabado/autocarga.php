<?php

//function __autoload($nombreClase){
//    //echo "<p>$p</p>";
//    require 'classes/'.$nombreClase.'.php';
//}

// OTRA FORMA

function cargadorDeClases($nombreClase){
    require 'classes/'.$nombreClase.'.php';
}

spl_autoload_register("cargadorDeClases");

