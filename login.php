<?php
if(isset($_GET['alert'])){
echo "<a>Gebruikersnaam of wachtwoord komen niet overeen <br> probeer het opnieuw</a>";
}
?>
<form action='login_check.php' method="post">
    <a>Gebruikersnaam:</a><input type="text" name="uname">
    <a>Wachtwoord:</a><input type="password" name="password">
    <input type="submit" value="Login">
</form>
