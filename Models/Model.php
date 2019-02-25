<?php
  require 'Conection.php';
  /**
   *
   */
  class Model
  {
    protected $table;
    protected $columns;

    function __construct()
    {}

    function findAll()
    {
      $json = array();
      $qry = "SELECT * FROM ".$this->table;
      $result = $this->execQuery($qry);
      while ($fila = $result->fetch_assoc())
        array_push($json, $fila);
      return json_encode($json);
    }

    function findColumn()
    {
      $qry = "SELECT ";
      for($i=0; $i<func_num_args(); $i++)
      {
        foreach ($this->columns as $col)
        {
          if(func_get_arg($i)==$col)
            $qry .= $col.", ";
        }
      }
      $qry .= "FROM $this->table";
      $qry = str_replace(", FROM", " FROM ", $qry);
      $json = array();
      $result = $this->execQuery($qry);
      while ($fila = $result->fetch_assoc())
        array_push($json, $fila);
      return json_encode($json);
    }

    function insert()
    {
      $qry = "INSERT INTO ".$this->table."(";
      foreach ($this->columns as $col)
          $qry .= $col.", ";
      $qry .= ") VALUES";
      $qry = str_replace(", ) VALUES", ") VALUES (", $qry);
      for($i=0; $i<func_num_args(); $i++)
        $qry.="\"".func_get_arg($i)."\", ";
      $qry .= ") ";
      $qry = str_replace(", )", ")", $qry);
      $this->execQuery($qry);
    }

    function updateRow()
    {
      $qry = "UPDATE ".$this->table." SET ";
      for($i=0; $i<(func_num_args()-1); $i+=2)
      {
        $qry.=func_get_arg($i)."=\"".func_get_arg($i+1)."\", ";
      }
      $qry.= "WHERE ";
      $qry = str_replace(", WHERE", " WHERE", $qry);
      $qry.= func_get_arg(func_num_args()-1);
      $this->execQuery($qry);
    }

    function deleteRow($condition)
    {
      $qry="DELETE FROM ".$this->table." WHERE ";
      $qry.=$condition;
      $this->execQuery($qry);
    }

    private function execQuery($query)
    {
      $conection = new Conection();
      $conection = $conection->createConection();
      $result = $conection->query($query);
      $conection->close();
      return $result;
    }
  }
?>
