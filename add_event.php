<?php
include("includes/nav.php");
$rank = $_SESSION['rank'];
//echo $rank;
if($rank <= 1){
    ?>

<form action="get_add_event.php" method="post">
    <table align=center>
        <tr>
            <td width=25% align="right"><a>Naam evenement:</a></td>
            <td width="30%"> <input required type="text" name="event_name"></td>
        </tr>
        <tr>
            <td width=25% align="right">
                </tdwidth><a>datum evenement</a></td>
            <td width="30%"><input type="date" required name=date value="<?php echo date(d/m/Y) ?>"></td>
        </tr>
        <tr>
            <td width=25% align="right">
                </tdwidth><a>tijd evenement</a></td>
            <td width="30%"><input type="time" name="time" required></td>
        </tr>
        <tr>
            <td width=25% align="right">
                <a>locatie</a>
            </td>
            <td width="30%"><input required name="location"></td>
        </tr>
        <tr>
            <td width=25% align="right"><a>Omschrijving</a></td>
            <td width="30%"><textarea name="disc" rows="8" cols='40'></textarea></td>
        </tr>
        <tr>
            <td width=25% align="right"></td>
            <td width="30%"><input type="submit" value="toevoegen"></td>
        </tr>

    </table>
</form> <?php 
}
else{ 
    //header("location: home.php"); 
}
?>
