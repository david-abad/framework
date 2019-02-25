<?php

require 'Main.php';
require 'Models/Catalogo.php';

class Home extends Main {

	public function __construct() {
		// Code
	}

	public function load() {
		$this->loadView('main');
	}

	public function testORM()
	{
		$catalogo = new Catalogo();

		echo "Select all: (Antes)";
		echo "<br>";
		echo $catalogo->findAll();

		echo "<br>";
		echo "Select specific";
		echo "<br>";
		echo $catalogo->findColumn("id");

		$catalogo->insert("1","uno");
		$catalogo->insert("2","dos");
		$catalogo->insert("3","tres");

		$catalogo->updateRow("descripcion","Cambio","id=\"1\" AND descripcion = \"uno\"");

		$catalogo->deleteRow("id=\"2\"");

		echo "<br><br>";
		echo "Select all: (Despues)";
		echo "<br>";
		echo $catalogo->findAll();

		echo "<br>";
		echo "Select specific (Despues)";
		echo "<br>";
		echo $catalogo->findColumn("descripcion");
	}
}
?>
