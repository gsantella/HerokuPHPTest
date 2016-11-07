<?php

	class Database {
		
		private $dbHost = "ec2-23-21-234-201.compute-1.amazonaws.com";
		private $dbUsername = "fpkkqmtaywxfwm";
		private $dbPassword = "dbEE8plG9zaS_QCcVzZeD7maqU";
		private $dbName = "ddf1ndt04b3tti";
		
		public function __construct() {
			$dsn = "pgsql:dbname=$this->dbName;host=$this->dbHost;user=$this->dbUsername;password=$this->dbPassword";
			$this->db = new PDO($dsn);
		}
		
		public function getDatabaseUsername() {
			return $this->dbUsername;
		}
		
		public function getAllData() {
			return $this->db->query("SELECT * FROM students ORDER BY students.id;")->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function create($data) {
			$stmt = $this->db->prepare("INSERT INTO students(first_name) VALUES(?);");
			$stmtSuccess = $stmt->execute(array($data));
			
			if ($stmtSuccess) {
				echo "<br/>1 Record Added Successfully!";
			}
			else {
				echo "Create is broken!!!!!<br/>";
			}
			
		}
		
		public function delete($id) {
			$stmt = $this->db->prepare("DELETE FROM students WHERE id=?;");
			$stmtSuccess = $stmt->execute(array($id));
			
			if ($stmtSuccess) {
				echo "1 Record deleted Successfully!";
			}
			else {
				echo "Delete is broken!!!!!";
			}
		}
	}