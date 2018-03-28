<?php
class dynamic_DB {
	public $id;
	public $conn;
	private $servername = "localhost";
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
		
		$this->conn->select_db($this->id);
	}
	
	function __destruct(){
		$sql = "DROP DATABASE " . ($this->id);
		if ($this->conn->query($sql) === TRUE) {
			echo "Database destroyed successfully\n";
			$this->conn->close();
			return 0;
		} 
		else {
			echo "Error destroying database: " . $this->conn->error;
			$this->conn->close();
			return 1;
		}	
		
	}
	
	public function basic_query($command){
		$sql = $command;
		if ($this->conn->query($sql) === TRUE) {
			echo "Query ran successfully\n";
			return 0;
		} 
		else {
			echo "Error with query: " . $this->conn->error;
			return 1;
		}	
	}
	public function populate_users(){
		$sql = "CREATE TABLE users (userID INT primary key NOT NULL AUTO_INCREMENT, username VARCHAR(20), password VARCHAR(20))";
		$this->basic_query($sql);
		$fake_names = array(
			"john" => "FooBar",
			"l33tman" => "4iohf32ioh2f",
			"BillerKiller" => "password123",
			"debug" => "Stout4Life!",
		);
		
		foreach($fake_names as $name => $password){
			$sql = "INSERT INTO users (username, password) VALUES ('$name', '$password')";
			$this->basic_query($sql);
		}
		
		return 0;
	}
	
	public function get_ID(){
		return $this->id;
	}
	
	public function get_Conn(){
		return $this->conn;
	}
}
?>