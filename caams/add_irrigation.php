<?php
include 'db.php';

$farm_id = $_POST['farm_id'];
$date = $_POST['date_irrigated'];
$source = $_POST['water_source'];
$volume = $_POST['volume_litres'];

$sql = "INSERT INTO irrigation_logs (farm_id, date_irrigated, water_source, volume_litres)
        VALUES ('$farm_id', '$date', '$source', '$volume')";

if ($conn->query($sql) === TRUE) {
    echo "Irrigation log added.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
