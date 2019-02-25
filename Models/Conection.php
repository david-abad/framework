<?php
  /**
   *
   */
  class Conection
  {
    private $host = "%host%";
  	private $port = "%port%";
  	private $db = "%base%";
  	private $user = "%user%";
  	private $pass = "%pass%";
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
