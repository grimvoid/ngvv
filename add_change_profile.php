<?php 
if(isset($_SESSION['uid'])){
    $uid = $_SESSION['uid'];
}
$email = $_POST['email'];
$uname = $_POST['username'];
$dob = $_POST['dob'];
$aboutme = $_POST['about_me'];

$checkCurrentInfoQuery = "SELECT * FROM memebers WHERE members_id = :uid";
$stmt = $conn->prepare($checkCurrentInfoQuery);
$stmt->bindValue(":uid", $uid, PDO::PARAM_STR);
$stmt->execute();

$result = $stmt->fetch();

$bool = false;

if($email != $result['members_email']){
    $bool= true;
}
if($uname != $result['members_username']){
    $bool= true;
}if($dob != $result['members_dob']){
    $bool= true;
}if($aboutme != $result['members_extra']){
    $bool= true;
}

if($bool == true){
    $updatememberQuery = "UPDATE members SET members_email= :email, members_username = :uname, members_dob = :dob, members_extra = :extra, WHERE members_id = :uid";
    $stmt = $conn->prepare($updatememberQuery);
    $stmt->bindValue(":email", $email, PDO::PARAM_STR);
    $stmt->bindValue(":uname", $uname, PDO::PARAM_STR);
    $stmt->bindValue(":dob",$dob , PDO::PARAM_STR);
    $stmt->bindValue(":extra", $aboutme, PDO::PARAM_STR);
    $stmt->bindValue(":uid", $uid, PDO::PARAM_STR);

    $stmt->execute();
}
    
?>
