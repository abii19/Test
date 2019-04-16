<?php

	include_once 'define.php';


	class DbConfig{

		private $host = DB_HOST;
	    private $user = DB_USER;
	    private $pass = DB_PASS;
	    private $db_name = DB_NAME;
	    
	    protected $conn;
	    
	    public function __construct()
	    {
	        if (!isset($this->conn)) {
	            
	            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

	            if (!$this->conn) {
	                echo 'Cannot connect to database server';
	                exit;
	            }            
	        }    
	        
	        return $this->conn;
	    }


	}

?>