<?php

	class Database {
		
		private $dbHost = "ec2-23-21-234-201.compute-1.amazonaws.com";
		private $dbUsername = "fpkkqmtaywxfwm";
		private $dbPassword = "dbEE8plG9zaS_QCcVzZeD7maqU";
		private $dbName = "ddf1ndt04b3tti";
		
		//public $dsn = "pgsql:dbname=$dbName;host=$dbHost;user=$dbUsername;password=$dbPassword";
		
		public function getDatabaseUsername() {
			return $this->$dbUsername;
		}
		
		function addRecord($firstName, $lastName) {
			
		}
		
		function deleteRecord($id) {
			
		}
		
		function save() {
			
		}
		
	}