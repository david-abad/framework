<?php
  require 'Model.php';

  /**
   *
   */
  class #tableName# extends Model
  {
    //Establece las variables de
    //la super clase Model
    function __construct()
    {
      $this->table = "#tableName#";
  	  $this->columns = #columns#;
    }
  }

?>
