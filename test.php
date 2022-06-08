<?php


include './forms/connection.php';

$CustomerUserName = $_POST['customer-user-name'];
$CaptainUserName = $_POST['captain-user-name'];
$content = $_POST['content'];
$ImageComp = $_POST['img-comp'];

//database connection
// $con = new mysqli('localhost','root','','codly');
if ($con->connect_error){
  die('connection failed : '.$con->connect_error);

}else{
$stmt = $con -> prepare("INSERT INTO `complaint-user` ( `customer-username`, `captin-username`, `complaint-details`, `image`) VALUES ( ?, ?, ?, ?) ") ;
$stmt -> bind_param("ssss",$CustomerUserName , $CaptainUserName , $content , $ImageComp);
$stmt->execute();


header('Location: complaint.php');

$stmt->close();
$con->close();



}







?>