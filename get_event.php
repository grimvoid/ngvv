<?php
include("includes/nav.php");
include("includes/db.php");
$event_id = $_GET['event_id'];
$uid = $_SESSION['uid'];

$getEventQuery = "SELECT * FROM events where event_id = :event_id";
$stmt = $conn->prepare();
$stmt->bindValue(":event_id", $event_id, PDO::PARAM_STR);

$stmt->execute();

$result = $stmt->fetch();
$date_saved = $result['events_date'];
$date = strtotime($date_saved);
$date = date('d-m-Y', $date);
?>

<table align="center">
    <tr>
        <td>Evenement</td>
        <td><?=$result["events_name"]?></td>
    </tr>
    <tr>
        <td>Locatie</td>
        <td><?=$result['events_location'] ?></td>
    </tr>
    <tr>
        <td>Datum</td>
        <td><?=$date ?></td>
    </tr>
    <tr>
        <td>Tijd</td>
        <td><?=$result['events_time'] ?></td>
    </tr>
    <tr>
        <td>Omschrijving</td>
        <td><?=$result['events_disc'] ?></td>
    </tr>
    <?php 
    $checkmySignsQuery = "SELECT * FROM event_participation WHERE event_participation_events_id= :event_id and event_participation_members_id= :uid";
        $stmt = $conn->prepare();
        $stmt->bindValue(':event_id', $event_id, PDO::PARAM_STR);
        $stmt->bindValue(':uid', $uid, PDO::PARAM_STR);
        $stmt->execute();
            
        $signed = $stmt->fetch();
        
            if(count($signed) > 0){
              ?>
    <tr>
        <td></td>
        <td><button name="sign-off" onclick="window.location.href='event_sign-off.php?event_id='<?=$event_id?>">Afmelden</button></td>
    </tr>
    <?php
    }
else{
    ?>
    <tr>
        <td></td>
        <td><button name="sign-up" onclick="window.location.href='event_sign-up.php?event_id='<?=$event_id?>">Afmelden</button></td>
    </tr>
    <?php
    
}
    ?>

</table>
<table align="center">
    <tr>
        <td>Aangemeld</td>
        <td>Afgemeld</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>
