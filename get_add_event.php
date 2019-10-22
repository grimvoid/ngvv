<?php
include('includes/db.php');

// toevoegen van nieuwe evenementen
$name = $_POST['event_name'];
$date = $_POST['date'];
$disc = $_POST['disc'];
$location = $_POST['location'];
$time = $_POST['time'];
echo $date . " - " . $time . ' - ' . $disc . ' - ' . $name . ' - ' . $location;

$getAddQuery = "INSERT INTO events (events_name, events_date, events_time, events_disc, events_location, events_time_added) VALUES (:name, :date, :time, :disc, :location, NOW())";

$stmt = $conn->prepare($getAddQuery);
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":disc", $disc, PDO::PARAM_STR);
$stmt->bindValue(":location", $location,  PDO::PARAM_STR);
$stmt->bindValue(":date", $date,  PDO::PARAM_STR);
$stmt->bindValue(":time", $time,  PDO::PARAM_STR);
print_r($stmt);
$stmt->execute();
print_r($stmt);
header('location: get_all_events.php');

?>
