<?php

session_start();

include './forms/connection.php';





if ($con->connect_error){
  die('connection failed : '.$conn->connect_error);

}

  else{
    $cart_id = $_GET['cart_id'];
  $query = " DELETE  FROM `cart` where cart_id='$cart_id'   ";
  $result = mysqli_query($con, $query);
  
 


header('Location:cart.php');

  }

?>