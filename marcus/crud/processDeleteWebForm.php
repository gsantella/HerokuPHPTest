<?php
ref="viewwebformcsvdatabase.php">View Data</a>
$stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
$stmt->execute([$cat]);
$deleted = $stmt->fetchColumn();
$stmtSuccess = $stmt->execute(array($data));
		
		if ($stmtSuccess)
		{
			echo "1 Record Deleted Successfully!";
		}
		else
		{
			echo "Insert is broken!!!!!!!";
		}