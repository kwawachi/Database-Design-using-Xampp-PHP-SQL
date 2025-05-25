<?php
include 'db.php';

$farmer_id = $_POST['farmer_id'];
$location = $_POST['location'];
$size = $_POST['size_hectares'];
$soil = $_POST['soil_type'];

$sql = "INSERT INTO farms (farmer_id, location, size_hectares, soil_type)
        VALUES ('$farmer_id', '$location', '$size', '$soil')";

if ($conn->query($sql) === TRUE) {
    echo "Farm added successfully.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>

