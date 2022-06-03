<?php
// include 'service.php';
// $username = "root";
// $password = "";
// $server = "localhost";
// $db = "codly";


// $con = mysqli_connect($server, $username, $password, $db);

include './forms/connection.php';

if (isset($_POST['add'])) {
  // $ser-id = $_POST['sno'];


  // $pricecart = $_POST['price'];
  // $sername = $_POST['job_title'];
  // $capname = $_POST['ename']; 

  $stmt = $con->prepare("INSERT INTO `cart` (`cart_id`, `customer-username`, `service-id`, `service-name`, `service-price`, `captain-username`) VALUES (1, 'hebamalo', '1007', 'editing video', '300', 'jamesbond') ");
  // $stmt -> bind_param("sis" , $sername ,$pricecart ,  $capname );
  $stmt->execute();

  header('Location: cart.php');

  $stmt->close();
  $con->close();
}





?>

















?>