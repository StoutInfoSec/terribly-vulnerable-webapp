<?php
class dynamic_DB {
	public $id;
	public $conn;
	private $servername = "127.0.0.1";
	private $username = "root";
	private $password = "";
	
	function __construct() {
		$this->id = uniqid("chall_");
		// Create connection
		$this->conn = new mysqli($this->servername, $this->username, $this->password);
		
		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		} 

		$sql = "CREATE DATABASE " . ($this->id);
		
		if ($this->conn->query($sql) === TRUE) {
			echo "Database created successfully\n";
		} 
		else {
			echo "Error creating database: " . $this->conn->error;
		}		
	}
	
	function __destruct(){
		$sql = "DROP DATABASE " . ($this->id);
		if ($this->conn->query($sql) === TRUE) {
			echo "Database destroyed successfully\n";
		} 
		else {
			echo "Error destroying database: " . $this->conn->error;
		}	
		$this->conn->close();
	}
	
	public function get_ID(){
		return $this->id;
	}
	
	public function get_Conn(){
		return $this->conn;
	}
}

$DB = new dynamic_DB();
echo $DB->get_ID(). "\n";
unset($DB);
echo "goodbye";
?>