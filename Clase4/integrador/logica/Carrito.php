<?php
include_once 'Producto.php';

class Carrito
{

	public $items;
	
	function __construct()
	{
            $this->items=array();
	}
	
	function agregar($producto)
	{
            if(isset($this->items[$producto->codigo]))
                $this->items[$producto->codigo]->cantidad++;
            else
                $this->items[$producto->codigo]=$producto;		
	}
	
	function quitar($producto)
	{
            if(isset($this->items[$producto->codigo]))
            {
                if($this->items[$producto->codigo]->cantidad==1)
                    unset($this->items[$producto->codigo]); // saco el elemento del array
                else
                    $this->items[$producto->codigo]->cantidad--;
            }
	}
	
	function imprimir(){
		
		?>
		<table border="1" cellspacing="0">
		
			<tr>
				<th>C&oacute;digo</th>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Total</th>
				<th>Quitar</th>
			</tr>

			<?php
                        
                        $cantProductos = 0;		//inicializo la variable donde acumulo la cantidad de productos para imprimir al final
			$total = 0;                 //inicializo la variable donde acumulo el total facturado para imprimir al final                        
			
			// aca recorro la coleccion items, donde cada objeto de la
			// coleccion es asignado a la variable $valor
			if(!empty($this->items)) {				
				
				foreach($this->items as $valor){
					echo("<tr>");
					echo("<td>$valor->codigo</td>");
					echo("<td>$valor->nombre</td>");
					echo("<td>$valor->cantidad</td>");
					echo("<td>$valor->precio</td>");									
					echo("<td>".$valor->cantidad*$valor->precio."</td>");				
					echo("<td align='center'><a href='?codigo_quitar=$valor->codigo'><img src='../images/borrar.jpg' border=0></a></td>");				
					echo("</tr>");
					
					$cantProductos += $valor->cantidad;
					$total += $valor->cantidad*$valor->precio;                                                                                
				}
			}
		?>
		<tr>
			<td> - </td>
			<td> Total: </td>
			<td> <b><?php echo $cantProductos; ?> </b></td>
			<td> - </td>
			<td> <b><?php echo $total; ?> </b></td>
                        <?php echo("<td><a href='../vista/pago.php?pagar=$total'>Pagar</a></td>"); ?>                        
		</tr>
		</table>
		
		<?php
	}

}

?>