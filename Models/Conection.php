<?php
  /**
   *
   */
  class Conection
  {
    private $host = "127.0.0.1";
  	private $port = "3306";
  	private $db = "#base#";
  	private $user = "root";
  	private $pass = "123";
    private $mysqli = NULL;

    function __construct()
    {}

    function createConection()
    {
      if(is_null($this->mysqli))
      {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if(!$this->mysqli)
            exit;
        else
          return $this->mysqli;
      }
    }
  }
?>
