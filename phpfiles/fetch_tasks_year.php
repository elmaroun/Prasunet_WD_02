<?php 
include 'connect.php';

$stmt = $con->prepare("SELECT description, type FROM task WHERE type='year'");
$stmt->execute();
$result = $stmt->get_result();

$tasks = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }
}

$stmt->close();
$con->close();

return $tasks;
?> 
