
<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', address='$address', telephone='$telephone', course='$course' WHERE nic='$nic'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Student details updated successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
