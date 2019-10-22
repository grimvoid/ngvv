<?php 
include('includes/nav.php');

?>
<form action="get_add_member.php" method="post">
    <table align="center">
        <tr>
            <td width="25%" align="right"><a>E-mail</a></td>
            <td width="30%"><input type="email" name="email"></td>
        </tr>
        <tr>
            <td width="25%" align="right"><a>Naam</a></td>
            <td width="30%"><input type="text" name="username"></td>
        </tr>
        <tr>
            <td width="25%" align="right"><a>password</a></td>
            <td width="30%"><input type="password" name="password"></td>
        </tr>
        <tr>
            <td width="25%" align="right">Functie</td>
            <td width="30%"><input type="text" name="function"></td>
        </tr>
        <tr>
            <td width="25%" align="right"><a>Alle informatie gecheckt</a></td>
            <td width="30%"><input type=checkbox required></td>
        </tr>

        <tr>
            <td width="25%"></td>
            <td width="30%"><input type="submit" value="toevoegen"> </td>
        </tr>
    </table>
</form>
