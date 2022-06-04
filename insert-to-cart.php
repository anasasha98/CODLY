<?php

session_start();

include './forms/connection.php';


//database connection
// $con = new mysqli('localhost','root','','codly');
// $serid = " SELECT `sno` FROM `detailed-service` WHERE `name` = $sername ";
// $res-cart = mysqli_query($con, $serid);


if ($con->connect_error){
  die('connection failed : '.$conn->connect_error);

}

  if (isset($_POST['send-to-cart'])) { 
    $custname = $_POST['customer-username'];
$capname = $_POST['captain-username'];
$sername = $_POST['service-name'];
$price = $_POST['price'];
  $query = " DELETE  FROM `cart2`   ";
  $result = mysqli_query($con, $query);
$mycart = $con -> prepare("INSERT INTO `cart` ( `customer-username`, `service-name`, `service-price`, `captain-username`) VALUES (?,?,?,?)") ;
$mycart -> bind_param("ssis",$custname  , $sername , $price,$capname);
$mycart->execute();
$mycart2 = $con -> prepare("INSERT INTO `cart2`  (`count`) SELECT COUNT(*) FROM `cart` ") ;

$mycart2->execute();


header('Location:cart.php');

$mycart->close();
$con->close();



}
 
if(isset($_POST['pay-now']))

{
  $custname = $_POST['customer-username'];
$capname = $_POST['captain-username'];
$sername = $_POST['service-name'];
$price = $_POST['price'];
$date=  date("l jS \of F Y "); 


  
$mylist = $con -> prepare("INSERT INTO `purchase_list` ( `Customer Username`, `Service Name`, `Captin Username`, `Price`) VALUES (?,?,?,?)") ;
$mylist -> bind_param("sssi",$custname  , $sername , $capname,$price );
$mylist->execute();








  header('Location:customer-purchase.php');
  $mylist->close();
$con->close();
}










?>