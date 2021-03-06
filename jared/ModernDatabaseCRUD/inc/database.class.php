<?php

class Database {
	private $dbHost = "ec2-23-21-234-201.compute-1.amazonaws.com";
	private $dbName = "ddf1ndt04b3tti";
	private $dbUsername = "fpkkqmtaywxfwm";
	private $dbPassword = "dbEE8plG9zaS_QCcVzZeD7maqU";
	
	public function __construct()
	{
		$dsn = "pgsql:dbname=$this->dbName;host=$this->dbHost;user=$this->dbUsername;password=$this->dbPassword";
		$this->db = new PDO($dsn);
	}
	
	public function getAllData()
	{
		return $this->db->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function getDatabaseUsername()
	{
		return $this->dbUsername;
	}
	
	public function insert($data)
	{
		$stmtSuccess = $this->db->prepare("INSERT INTO students(first_name) VALUES(?);")->execute(array($data));
	
		if ($stmtSuccess)
		{
			echo "1 record added successfully";
		}
		else
		{
			echo "insert is broken";
		}
	}
	
		public function delete($id)
	{
		$stmtSuccess = $this->db->prepare("DELETE FROM students WHERE id=?;")->execute(array($id));
	
		if ($stmtSuccess)
		{
			echo "1 record successfully deleted";
		}
		else
		{
			echo "Delete is broken";
		}
	}
	
}