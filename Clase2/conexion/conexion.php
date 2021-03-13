<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'curso';
$port = 3306;

$cnx = new PDO("mysql:port={$port};host={$host};dbname={$db}", $user, $pass);

//var_dump($cnx);

// consulta de set de datos
$statement = $cnx->query("select * from peliculas");
$resp = $statement->execute();
//var_dump($resp);

if($resp) {
    $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
}
print_r($resultado);