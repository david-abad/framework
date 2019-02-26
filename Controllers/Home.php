<?php

require 'Main.php';
require 'Models/productos.php';

class Home extends Main {

	public function __construct() {
		// Code
	}

	public function load() {
		$this->loadView('main');
	}

	public function testORM()
	{
		$productos = new productos();
        
        $productos->insert("1");
		$productos->insert("2");
		$productos->insert("3");

		echo "Select sin borrar";
		echo "<br>";
		echo $productos->findAll();


		

		$productos->updateRow("id","5","id=\"1\"");

		$productos->deleteRow("id=\"2\"");

		echo "<br><br>";
		echo "Select con borrado de id 2 y actualizado id 1 a 5 ";
		echo "<br>";
		echo $productos->findAll();

	}
}
?>
