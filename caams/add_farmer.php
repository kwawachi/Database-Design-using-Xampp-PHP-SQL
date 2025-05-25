<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$district = $_POST['district'];
$gender = $_POST['gender'];

$sql = "INSERT INTO farmers (name, phone, district, gender, registration_date)
        VALUES ('$name', '$phone', '$district', '$gender', CURDATE())";

if ($conn->query($sql) === TRUE) {
    echo "Farmer added successfully.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>

