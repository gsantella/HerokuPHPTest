<?php

class Database {
	public $dbHost = "ec2-23-21-234-201.compute-1.amazonaws.com";
	public $dbName = "ddf1ndt04b3tti";
	public $dbUsername = "fpkkqmtaywxfwm"; 
	public $dbPassword = "dbEE8plG9zaS_QCcVzZeD7maqU";
	
	public function __construct()
	{
		$dsn = "pgsql:dbname=$this->dbName;host=$this->dbhost;user=$this->dbUsername;password=$this->dbPassword";
		$this->db = new PDO($dsn)
	}
	
	public function getAllData()
	{
		return $this->db->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);
	}
	
	
	public function getDatabaseUsername()
	{
		return $this->dbUsername;
	}
}