<?php
include 'db.php';

$farm_id = $_POST['farm_id'];
$date = $_POST['date_recorded'];
$rainfall = $_POST['rainfall_mm'];
$temp = $_POST['temperature_celsius'];
$drought = $_POST['drought_event'];

$sql = "INSERT INTO climate_data (farm_id, date_recorded, rainfall_mm, temperature_celsius, drought_event)
        VALUES ('$farm_id', '$date', '$rainfall', '$temp', '$drought')";

if ($conn->query($sql) === TRUE) {
    echo "Climate data added.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
