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
		return $this->db->query("SELECT * FROM students;")->fetchALL(PDO::FETCH_ASSOC);
	}
	
	public function getDatabaseUsername()
	{
		return $this->dbUsername;
	}
	
	public function create($data)
	{
		$stmt = $this->db->prepare("INSERT INTO students(first_name) VALUES(?);");
		$stmtSuccess = $smst->execute($data);
		
		if($stmtSuccess)
		{
			echo "1 Record Added Successfully";
		}
		else
		{
			echo "Insert is broken!!";
		}
	}
	
	
}