<?php
include 'db.php';

$farm_id = $_POST['farm_id'];
$crop_name = $_POST['crop_name'];
$variety = $_POST['variety'];
$is_resistant = $_POST['is_drought_resistant'];
$planting_date = $_POST['planting_date'];
$harvest_date = $_POST['harvest_date'];

$sql = "INSERT INTO crops (farm_id, crop_name, variety, is_drought_resistant, planting_date, harvest_date)
        VALUES ('$farm_id', '$crop_name', '$variety', '$is_resistant', '$planting_date', '$harvest_date')";

if ($conn->query($sql) === TRUE) {
    echo "Crop record added.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
