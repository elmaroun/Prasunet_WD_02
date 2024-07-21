<?php
include 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];
    $stmt = $con->prepare("INSERT INTO task (description, type) VALUES (?, 'year')");
    $stmt->bind_param("s", $task);
    
    if ($stmt->execute()) {
        $stmt->close();
        $con->close();
        header("Location: ../index.php");
        exit();
    } else {
        $stmt->close();
        $con->close();
        header("Location: ../index.php");
        exit();
    }
}
?>
