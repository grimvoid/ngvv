<?php 
include('includes/db.php');
include('includes/nav.php');

$getmembersQuery = "SELECT * FROM members";
$stmt= $conn->prepare($getmembersQuery);
$stmt->execute();

$results = $stmt->fetchAll();
?>
<h1 align="center">Leden lijst</h1>
<table align="center" width="75%" border="1">
    <tr>
        <td width="25%">Profiel foto</td>
        <td width="25%">Naam</td>
        <td width="25%">E-mail</td>
        <td width="25%">Functie</td>

    </tr>
    <?php
foreach($results as $result){
    //print_r($result);
    ?>

    <tr>
        <td width="25%">profiel foto placeholder</td>
        <td width="25%"><?=$result['members_name']?> <?=$result['members_surname']?></td>
        <td width="25%"><?=$result['members_email']?></td>
        <td width="25%"><?=$result['members_function']?></td>
    </tr>

    <?php
}


?>
</table>
