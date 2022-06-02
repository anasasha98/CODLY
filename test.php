<?php
$CustomerUserName = $_POST['customer-user-name'];
$CaptainUserName = $_POST['captain-user-name'];
$content = $_POST['content'];
$ImageComp = $_POST['img-comp'];




//database connection
$conn = new mysqli('localhost','root','','codly');
if ($conn->connect_error){
  die('connection failed : '.$conn->connect_error);

}else{
$stmt = $conn -> prepare("INSERT INTO `complaint-user` ( `customer-username`, `captin-username`, `complaint-details`, `image`) VALUES ( ?, ?, ?, ?) ") ;
$stmt -> bind_param("ssss",$CustomerUserName , $CaptainUserName , $content , $ImageComp);
$stmt->execute();

header('Location: complaint.php');

$stmt->close();
$conn->close();



}







?>