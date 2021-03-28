<?php
include_once '../conexion/Conexion.php';

$conexion=new Conexion();

$pdo = $conexion->pdo;

// preparo la query para obtener los codigos de todas las productos
$stmt = $pdo->query("SELECT cod_producto FROM productos");

?>

<table width=100% align="left" cellpadding="0" cellspacing="0" border=2>
<tr>
	<th>Codigo</th>
	<th>Nombre</th>
	<th>Precio</th>
	<th>Comprar</th>
</tr>


<?php while($campos=$stmt->fetch(PDO::FETCH_ASSOC)){
	$producto=new Producto($campos['cod_producto'],$conexion->pdo);
 ?>

	<tr>
		<td><?php echo $producto->codigo?></td>
		<td><?php echo $producto->nombre?></td>
		<td><?php echo $producto->precio?></td>
		
		<td><a href="?codigo_agregar=<?php echo $producto->codigo?>"><img src="../images/carrito.jpg" width="92" height="27" border="0"></a></td>
	</tr>
	
<?php } ?>	
	
</table>