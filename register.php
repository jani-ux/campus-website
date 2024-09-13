
<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $course = $_POST['course'];
    
    $sql = "INSERT INTO students (nic, name, address, telephone, course) 
            VALUES ('$nic', '$name', '$address', '$telephone', '$course')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
