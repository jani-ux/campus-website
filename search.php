
<?php
include('config.php');

if (isset($_GET['nic'])) {
    $nic = $_GET['nic'];
    
    $sql = "SELECT * FROM students WHERE nic='$nic'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
        echo "Name: " . $student['name'] . "<br>";
        echo "Address: " . $student['address'] . "<br>";
        echo "Telephone: " . $student['telephone'] . "<br>";
        echo "Course: " . $student['course'] . "<br>";
    } else {
        echo "No student found with NIC: $nic";
    }
}
?>
