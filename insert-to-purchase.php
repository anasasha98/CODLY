<?php

session_start();

include './forms/connection.php';





if ($con->connect_error){
  die('connection failed : '.$conn->connect_error);

}

 
    $cart_id = $_GET['cart_id'];
 
  $query2 = " SELECT * FROM `cart` WHERE `cart_id` = '$cart_id'   ";
    $result2 = mysqli_query($con, $query2);
    if ($result2) {
      while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
   
        $capname = $row['captain-username'];
       $sername = $row['service-name'];
       $serId= $row['service-id'];
         $price = $row['service-price'];




 

      }}

      if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];}
  
  $mylist = $con -> prepare("INSERT INTO `purchase_list` ( `Customer Username`, `Service ID`, `captain-username` , `Service Name`, `Price`) VALUES (?,?,?,?,?) ") ;
  $mylist -> bind_param("sissi",$username  ,  $serId ,$capname,$sername, $price);
  $mylist->execute();

  $query1 = " DELETE  FROM `cart` where cart_id='$cart_id'";
  $result1 = mysqli_query($con, $query1);
  
  
header('Location:customer-purchase.php');
$mylist->close();
$con->close();

 

?>