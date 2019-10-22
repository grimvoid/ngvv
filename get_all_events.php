<?php 
include('includes/db.php');
include("includes/nav.php");
$geteventsQuery = "SELECT * FROM events";

$stmt = $conn->prepare($geteventsQuery);
$stmt->execute();

$data= $stmt->fetchAll(); 
//print_r($results);
$result = $data;
?>
<table align="center" border="1">
    <?php
        foreach($result as $results){
            $date = $results['events_date'];
            $date = strtotime($date);
            $date = date("d-m-Y", $date);
            $time = $results['events_time'];
            $time = strtotime($time);
            $time = date("H:m", $time);
    ?>
    <tr>
        <td><?=$results['events_name']; ?><br><?= $results['events_location']; ?><br> <?=$date; ?> - <?=$time; ?></td>
        <td><?=$results['events_disc']; ?></td>
        <td> <button name="Ga naar evenement" onclick="window.location.href='get_event.php?event_id='<?=$results['events_id'] ?>">Ga naar evenement</button> </td>
    </tr> <?php 
        }
    ?> </table>
