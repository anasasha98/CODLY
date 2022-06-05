<?php

session_start();

include './forms/connection.php';







if ($con->connect_error){
  die('connection failed : '.$conn->connect_error);

}

  // if (isset($_POST['add1'])) { 
    $service_id = $_GET['service_id'];
    $price= $_GET['price1'];
    $pricedesc1= "Standard Plan";
    $query = " SELECT * FROM `service-provider` WHERE `service_id` = '$service_id'   ";
    $result = mysqli_query($con, $query);
    if ($result) {
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        // $counter += 1;
        $sno = $row['sno'];
        $sername = $row['job_title'];
        // mysqli_fetch_array(mysqli_query($con, "SELECT `sno`, `name` FROM `detailed-service` WHERE `sno` = '$sno'"), MYSQLI_ASSOC);
$captain=$row['captainusername'];
      }}


     
      if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];}
      
//     $custname = $_POST['customer-username'];
// $capname = $_POST['captain-username'];
// $sername = $_POST['service-name'];
// $price = $_POST['price'];
  // $query = " DELETE  FROM `cart2`   ";
  // $result = mysqli_query($con, $query);
$mycart = $con -> prepare("INSERT INTO `cart` ( `customer-username`, `service-id`, `service-name`, `service-price`, `price-plan`, `captain-username`) VALUES (?,?,?,?,?,?)") ;
$mycart -> bind_param("sisiss",$username  ,  $service_id ,$sername, $price,$pricedesc1,$captain);
$mycart->execute();

$_SESSION['c']++;
// $mycart2 = $con -> prepare("INSERT INTO `cart2`  (`count`) SELECT COUNT(*) FROM `cart` ") ;

// $mycart2->execute();


header('Location:cart.php');

$mycart->close();
$con->close();



// }
 










?>