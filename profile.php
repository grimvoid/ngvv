<?php 
include('includes/nav.php');
include('includes/db.php');

$getMyProfileQuery = "SELECT * FROM members WHERE members_id = :uid"; 
$stmt = $conn->prepare($getMyProfileQuery);
$stmt->bindValue(":uid", $uid, PDO::PARAM_STR);
$stmt->execute();

$result = $stmt->fetch();
?>
<container>
    <table align="center">
        <tr>
            <td width="25%">E-mail</td>
            <td width="25%">
                <?php echo $result['members_email']?></td>
        </tr>
        <tr>
            <td width="25%">Gebruikersnaam</td>
            <td width="25%">
                <?php echo $result['members_username'] ?>
            </td>
        </tr>
        <tr>
            <td width="25%"> Geboortedatum</td>
            <td width="25%">
                <?php echo $result['members_dob'] ?>
            </td>
        </tr>
        <tr>
            <td width="25%">Functie</td>
            <td width="25%">
                <?php echo $result['members_function'] ?>
            </td>
        </tr>
        <tr>
            <td width="25%">Over mij</td>
            <td width="25%">
                <?php echo $result['members_extra'] ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button name="Aanpassen" onclick="window.location.href=' change_profile.php'">Aanpassen</button> </td>
        </tr>
    </table>
</container>
