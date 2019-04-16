<?php

	include_once 'dbConfig.php';
	 
	class Crud extends DbConfig
		{
		    public function __construct()
		    {
		        parent::__construct();
		    }
		    
		    public function getData($query)
		    {        
		        $result = $this->conn->query($query);
				while($row = mysqli_fetch_assoc($result)){
					$resultset[] = $row;
				}	
		        if(!empty($resultset))
					return $resultset;
		    }

		    /*function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}*/
		        

		    public function execute($query) 
		    {
		        $result = $this->conn->query($query);
		        
		        if ($result == false) {
		            echo 'Error: cannot execute the command';
		            return false;
		        } else {
		            return true;
		        } 
		    }
		    
		    public function delete($id, $table) 
		    { 
		        $query = "DELETE FROM $table WHERE id = $id";
		        
		        $result = $this->conn->query($query);
		    
		        if ($result == false) {
		            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
		            return false;
		        } else {
		            return true;
		        }
		    }
		 
		    public function escape_string($value)
		    {
		        return $this->conn->real_escape_string($value);
		    }
	}



?>