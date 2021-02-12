<?php
class DB{
	public $db = '';
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $dbName = 'phpassignment' ;
	function __construct(){
		$this->db = new mysqli( $this->host, $this->user, $this->pass, $this->dbName );
		if( $this->db->connect_error > 0 ){
			echo "Couldn't connect to database : ".$this->db->connect_error;
		}
	}
}




?>