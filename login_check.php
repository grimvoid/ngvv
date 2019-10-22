<?php
session_start();
include("includes/db.php");

$uname = $_POST['uname'];
$pasword = $_POST['password'];

$checkQuery = "SELECT * FROM members WHERE members_username= :uname AND members_password= :password";
$stmt = $conn->prepare($checkQuery);
$stmt->bindValue( ":password", $pasword, PDO::PARAM_STR);
$stmt->bindValue(":uname", $uname, PDO::PARAM_STR);
$stmt->execute();

$result = $stmt->fetch();
//testen van db connectie
//print_r($result);


if($result["members_username"] == $uname){
    if($result['members_password' == $pasword]){  
        $uid = $result['members_id'];
        $rank = $result['members_rank'];
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
            $_SESSION['rank'] = $rank;
            $_SESSION['uid'] = $uid;
        }
        if(session_status() !== PHP_SESSION_ACTIVE){
         echo 'session not working';
        }
        
        $_SESSION['rank'] = $rank;
        $_SESSION['uid'] = $uid;
        header("location: home.php");
        
    }
}
else{
    session_destroy();
    //header('location:login.php?alert=1');
}
?>
