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
		
		public function addRecord($firstName, $lastName) {
			
		}
		
		public function deleteRecord($id) {
			
		}
		
		public function save() {
			
		}
		
	}