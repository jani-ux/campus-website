
<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    
    $sql = "DELETE FROM students WHERE nic='$nic'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Student deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
