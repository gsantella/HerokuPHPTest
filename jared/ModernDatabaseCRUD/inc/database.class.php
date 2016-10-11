<?php

class Database {
	private $dbHost = "ec2-23-21-234-201.compute-1.amazonaws.com";
	private $dbName = "ddf1ndt04b3tti";
	private $dbUsername = "fpkkqmtaywxfwm";
	private $dbPassword = "dbEE8plG9zaS_QCcVzZeD7maqU";
	
	public function getDatabaseUsername()
	{
		return $this->$dbUsername;
	}
}