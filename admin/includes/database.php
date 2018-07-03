<?php 
require_once("new_config.php"); 

class Database {

	public $connection;
	//Everytime we create new database class our connection is constructed automatically
	function __construct(){
		$this->open_db_connection();
	}

	// function to connect to database
	public function open_db_connection() {
		// $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		// this properties and other methods already exist in mysqli object, already built in php
		if($this->connection->connect_errno) {
			die("Database connection failed " . $this->connection->connect_errno);
		}
	}
	// query function
	public function query($sql) {
		$result = $this->connection->query($sql);
		$this->confirm_query($sresult);
		return $result;
	}

	private function confirm_query($result) {
		if(!$result) {
			die("Query failed! " . $this->connection->error);
		}
	}

	public function escape_string($string) {
		$escaped_string = $this->connection->real_escape_string($string);
		return $escaped_string;
	}

	public function the_insert_id() {
		return $this->connection->insert_id;
	}
}

$database = new Database;

?>