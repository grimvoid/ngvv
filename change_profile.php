<?php
include('includes/nav.php');
include('includes/db.php');

$getMyProfileQuery= "SELECT * FROM members WHERE members_id= :uid";
$stmt = $conn->prepare($getMyProfileQuery);
$stmt->bindValue(":uid", $uid, PDO::PARAM_STR);
$stmt->execute();

$result = $stmt->fetch();
?><h2 align="center">Verander gegevens in mijn profiel</h2>
<form method="post" action="get_change_profile.php">

    <table align="center">
        <tr>
            <td width="25%" align="right">E-mail
            </td>
            <td width="25%"><input type="text" value="<?php echo $result['members_email'] ?>" name="email">
            </td>
        </tr>
        <tr>
            <td width="25%" align="right">Gebruikersnaam
            </td>
            <td width="45%"><input type="text" value="<?php echo $result['members_username'] ?>" name="username">
            </td>
        </tr>
        <tr>
            <td width="25%" align="right">Geboortedatum
            </td>
            <td width="45%"><input type='date' value="<?php echo $result['members_dob'] ?>" name="dob"> </td>
        </tr>
        <tr>
            <td width="25%" text-align="top-right" align="right">Over mij
            </td>
            <td width="25%"><textarea name="about_me" rows="6" cols="12" style="width: 300px;"><?php echo $result['members_extra'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td width="25%">
            </td>
            <td width="25%"> <input type="submit">
            </td>
        </tr>
    </table>


</form>
