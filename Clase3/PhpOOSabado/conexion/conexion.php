<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'curso';
$port = 3306;

$cnx = new PDO("mysql:port={$port};host={$host};dbname={$db}", $user, $pass, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));

//var_dump($cnx);

// consulta de set de datos
//$statement = $cnx->query("select * from peliculas");
//$resp = $statement->execute();
////var_dump($resp);
//
//if($resp) {
//    $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
//}
//print_r($resultado);

//Consulta de set de datos con filtro
//
//$id_pelicula = 5;
//$statement = $cnx->prepare("select * from peliculas where cod_pelicula = :id");
//$statement->bindParam(":id", $id_pelicula, PDO::PARAM_INT);
//$resp = $statement->execute();
//if($resp) {
//    $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
//}
//print_r($resultado);

//Consulta por archivo
//$querystring = file_get_contents("conexion/query_select.sql");
//$id_pelicula = 10;
//$statement = $cnx->prepare($querystring);
//$statement->bindParam(":id", $id_pelicula, PDO::PARAM_INT);
//$resp = $statement->execute();
//$resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($resultado);

//INSERT DE REGISTRO
 
//  `nombre` varchar(45)
//  `genero` varchar(45) 
//  `descripcion` varchar(200) ,
//  `butacas` int(10) 
//  `disponibles` int(10) 

try {
    $nombre = "KingKong2";
    $genero = "Suspenso";
    $descripcion = "Historia de KK - parte2";
    $butacas = 30;
    $disponibles = 10;

    $statement = $cnx->prepare("INSERT INTO peliculas (nombre, genero, descripcion, butacas, disponibles)"
            ."VALUES (:nombre, :genero, :descripcion, :butacas, :disponibles)");
    $statement->bindParam(":nombre", $nombre, PDO::PARAM_STR);
    $statement->bindParam(":genero", $genero, PDO::PARAM_STR);
    $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
    $statement->bindParam(":butacas", $butacas, PDO::PARAM_INT);
    $statement->bindParam(":disponibles", $disponibles, PDO::PARAM_INT);

    $resp = $statement->execute();
    var_dump($resp);    
} catch(PDOException $err) {
    var_dump($err);
} finally {
    $cnx = NULL;
}



