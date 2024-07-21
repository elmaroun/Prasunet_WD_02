<?php
// Include your database connection file
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task_id'])) {
    $task_id = $_POST['task_id'];

    // Prepare and execute the delete query
    $stmt = $con->prepare('DELETE FROM task WHERE description = ?');
    $stmt->bind_Param('s', $task_id);

    if ($stmt->execute()) {
        header('Location: ../index.php');
        exit;
    } else {
        echo 'Error deleting the task.';
    }
} else {
    echo 'Invalid request.';
}
?>
