<?php

include 'Conexion.php';

/**
* 
*/
class Model
{
	private $conexion = new Conexion();
	protected $table;
	protected $columns;
	
	function __construct(argument)
	{
		# code...
	}

	protected function find() {
		$qry = "SELECT * FROM ".$this->table;

		$this->conexion->mysql_query($qry);

		// Fetch y retornar obj o array
	}

	protected function findColumns() {
		$qry = "SELECT ";
		foreach ($this->columns as $col) {
			$qry .= $col.", ";
		}
		$qry .= " FROM $table";
		$qry = str_replace(", FROM ", " FROM ", $qry);

		$this->conexion->mysql_query($qry);

		// Fetch y retornar obj o array
	}

	protected function edit($sourceColumns,$columnsValues,$condition) {
		$qry = "UPDATE ".$this->table;
		$qry .= " SET ";
		if(sizeof($columns) == sizeof($columnsValues)) {
			for ($i=0; $i < sizeof($sourceColumns); $i++) { 
				$qry .= $sourceColumns[$i]."=".$columnsValues[$i].", ";
			}
		} else return;
		$qry .= " WHERE ".$condition;
		$qry = str_replace(", WHERE ", " WHERE ", $qry);
	}

}

?>