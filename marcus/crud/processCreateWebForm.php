<?php
$db->insert($_REQUEST["firstName"]);
$stmt = $this->db->prepare("INSERT INTO students(first_name) VALUES(?);");
		$stmtSuccess = $stmt->execute(array($data));
		
		if ($stmtSuccess)
		{
			echo "1 Record Added Successfully!";
		}
		else
		{
			echo "Insert is broken!!!!!!!";
		}