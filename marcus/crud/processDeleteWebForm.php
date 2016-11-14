<?php
$stmt = $pdo->prepare("DELETE FROM students WHERE id= ?");
$stmt->execute([$cat]);
$deleted = $stmt->fetchColumn();