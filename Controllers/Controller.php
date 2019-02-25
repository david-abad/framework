<?php

include 'Catalogo.php';

/**
* 
*/
class Controller
{
	
	function __construct(argument)
	{
		# code...
	}

	function insertar() {
		$catalogo = new Catalogo();
		$resultado = $catalogo->find(); 

		return load('views/ejemplo', $resultado);
	}

}

?>