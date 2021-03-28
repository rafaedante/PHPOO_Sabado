<?php

session_start();
include_once '../logica/Producto.php';
include_once '../logica/Carrito.php';
include_once '../conexion/Conexion.php';
$conexion=new Conexion();

if(isset($_SESSION['carrito'])){
    $carrito=unserialize($_SESSION['carrito']);
	
}
else{
    // si no esta abierta la sesion por primera vez crea el objeto ticket
    $carrito=new Carrito;
}


if(!empty($_GET['codigo_agregar'])){
	$x=new Producto($_GET['codigo_agregar'],$conexion->pdo);
	$carrito->agregar($x);
}

if(!empty($_GET['codigo_quitar'])){
    $x=new Producto($_GET['codigo_quitar'],$conexion->pdo);
    $carrito->quitar($x);
}

?>

<table width=100% border=2>
<tr>
    <td valign="top" align="center">
	<h1>Listado Productos</h1>
            <?php include("../logica/reporte.php");?>
	</td>
	<td valign="top" align="center">
            <h1>Ticket</h1>
            <?php $carrito->imprimir();?>
	</td>
</tr>
</table>
<?php
$_SESSION['carrito']=serialize($carrito);
?>