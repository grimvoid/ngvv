<?php
include('includes/db.php');

//print_r($_POST);

$uname = $_POST['username'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$function = $_POST['function'];
$rank = "2";

$checkifexists = "SELECT * FROM members WHERE members_email= :email AND members_username= :uname";
$stmt = $conn->prepare($checkifexists);
$stmt->bindValue(":uname", $uname,PDO::PARAM_STR);
$stmt->bindValue(":email", $mail,PDO::PARAM_STR);
$stmt->execute();

$data = $stmt->fetch();

if(count($data) > 0){
    header("location: members_list.php");
}
else{
$addmemberQuery = "INSERT INTO members (members_email, members_username, members_password, members_rank, members_function, members_date_added) VALUES (:email, :uname, :pass, :rank, :function, NOW())";

$stmt = $conn->prepare($addmemberQuery);
$stmt->bindValue(":uname", $uname,PDO::PARAM_STR);
$stmt->bindValue(":email", $mail,PDO::PARAM_STR);
$stmt->bindValue(":pass", $pass,PDO::PARAM_STR);
$stmt->bindValue(":function", $function ,PDO::PARAM_STR);
$stmt->bindValue(":rank", $rank ,PDO::PARAM_STR);
$stmt->execute();
    header("location: members_list.php");
}

?>
