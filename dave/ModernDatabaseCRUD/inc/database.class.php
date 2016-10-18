<?php

class Database{
	
	private $dbHost = "ec2-23-21-234-201.compute-1.amazonaws.com";
	private $dbName = "ddf1ndt04b3tti";
	private $dbUserName = "fpkkqmtaywxfwm";
	private $dbPassword = "dbEE8plG9zaS_QCcVzZeD7maqU";
	
	public function __construct()
	{
		$dsn = "pgsql:dbname=$this->dbName;host=$this->dbHost;user=$this->dbUserName;password=$this->dbPassword";
		$this->db = new PDO($dsn);
	}
	
	public function getAllData()
	{
		return $this->db->query("SELECT * FROM students;")->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function getDatabaseUsername()
	{
		return $this->dbUserName;
	}
	
	public function insert($data)
	{
		$stmtSuccess = $this->db->prepare("INSERT INTO students(first_name) VALUES (?);")->execute(array($data));
		
		if($stmtSuccess)
		{
			echo "1 Record Added Successfully . . . ";
		}
		else
		{
			echo "Insert Is Broken . . . ";
		}
	}
	
	public function remove($data)
	{
		$stmtSuccess = $this->db->prepare("DELETE FROM students(first_name) VALUES (?);")->execute(array($data));
		
		if($stmtSuccess)
		{
			echo "1 Record Deleted Successfully . . . ";
		}
		else
		{
			echo "Delete Is Broken . . . ";
		}
	}
	
	
}