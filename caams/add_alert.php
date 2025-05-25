<?php
include 'db.php';

$farm_id = $_POST['farm_id'];
$type = $_POST['alert_type'];
$message = $_POST['message'];
$date = $_POST['alert_date'];

$sql = "INSERT INTO alerts (farm_id, alert_type, message, alert_date)
        VALUES ('$farm_id', '$type', '$message', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Alert added.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
