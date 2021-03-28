<?php

class Producto {
	
	public $codigo;
	public $nombre;
	public $precio;
	public $cantidad;
	
	private $pdo;
	
	function __construct($cod,$pdo){

		$this->pdo = $pdo;
		$stmt = $this->pdo->prepare("SELECT * FROM productos WHERE cod_producto=$cod");
		$stmt->execute();
		
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		// lo cargo en las propiedades
		$this->codigo=$result['cod_producto'];
		$this->nombre=$result['nombre'];
		$this->precio=$result['precio'];		
		$this->cantidad=1;		

		// en este caso como ya no voy a acceder mas a la tabla, cierro la conexion
		$this->pdo=null;	

	}	


}