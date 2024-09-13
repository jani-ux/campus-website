<?php
include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $course = $_POST['course'];
    $query = "SELECT * FROM students WHERE nic='$nic' AND course='$course'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['students'] = $nic;
        header("Location: dashboard.php");
    } else {
        echo "Invalid credentials";
    }
}
?>


