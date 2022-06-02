<?php

session_start();

include './forms/connection.php';
// include 'service.php' ;
// include 'service.php';


// if(isset($_POST['add'])){
// $cartq = $con -> prepare("INSERT INTO `cart` ( `service-id`, `service-name`, `service-price`) value(1004,'fff',20) ") ; 
// // $cartq -> bind_param("isis" ,    );
// $resu = mysqli_query($con, $cartq);


// SELECT `sno`, `name`, `price` FROM `detailed-service` where sno=1006
// }

// $total = 0;
// if (isset($_SESSION['cart'])){
//     $product_id = array_column($_SESSION['cart'], 'service_id');


//     while ($row = mysqli_fetch_assoc($result)){
//         foreach ($product_id as $id){
//             if ($row[''] == $id){

//                 $total = $total + (int)$row['product_price'];
//             }
//         }
//     }
// }else{
//     echo "<h5>Cart is Empty</h5>";
// }




// add to cart
// if (isset($_POST['add'])){
//   require_once ('service.php');
//   // $ser-id  = $_POST['sno'];
//   $query = " SELECT * FROM `service-provider` WHERE `sno` =1006";
//   $result = mysqli_query($con, $query);
//   if ($result) {
//     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//       $CaptainName = $row['ename'];


//     }}
//     $query = " SELECT name FROM `detailed-service` WHERE `sno` = 1006 ";
//     $result = mysqli_query($con, $query);
//     if ($result) {

//         $servName = $row['name'];
//       }



//   $cartq = $con -> prepare("INSERT INTO `cart` (  `service-id`, `service-name`, `service-price`, `captain-username`) VALUES (?,?,?,?) ") ;
// $cartq -> bind_param("isis" ,  1006 , 'logo' , 60 , 'heba');
// $cartq->execute();



// $cartq->close();
// $con->close();}

// $serName = " SELECT name FROM `detailed-service` WHERE `sno` = 1006";



if (isset($_POST['remove'])) {
  if ($_GET['action'] == 'remove') { {
      $query = "   DELETE FROM `cart` where cart_id = $cart-id ";
      $result = mysqli_query($con, $query);


      echo "<script>alert('Product has been Removed...!')</script>";
      echo "<script>window.location = 'cart.php'</script>";
    }
  }
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cart</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="style.css">  -->
  <style>
    #tablecart thead tr th {
      /* width:50%; */
      text-align: center;
      color: #37517e;



    }
  </style>
</head>

<body class="bg-light">


  <?php
  require_once('header.php');
  ?>

  <div class="container-fluid">
    <div class="row px-5">
      <div class="col-md-7">
        <div class="shopping-cart">
          <!-- <h6>My Cart</h6>
                <hr> -->


        </div>

      </div>
    </div>

<<<<<<< HEAD
<div class="col-25">
            <div class="container">
                <br><br>
              <h4 style="color:#37517e;"> My Cart <span class="price" style="color:#37517e;"><i class="fa fa-shopping-cart"></i> </span></h4>
            <hr>
          
           <!--Start Table-->
<div class="card mb-4">
        <div class="card-body">
          <div class="datatable table-responsive">
            <table class="table table-bordered table-hover" id="tablecart" width="70%" cellspacing="0">
              <thead>
                <tr>
                    <!-- <th style="width:30px;" >check</th> -->
                  <th >Service Name</th>
                  <th >Price </th>
                  <th>Remove  </th>
                  <th>Pay</th>
                </tr></thead>

              <tbody>
                
              <?php
              // if (isset($_POST['add'])){
               $qcart = " SELECT * FROM  `cart` ";
                $rcart = mysqli_query($con, $qcart);
            
               
                if ($rcart) {
                  while ($row = mysqli_fetch_array($rcart, MYSQLI_ASSOC)) { ?>
                    
      
                    
=======
    <div class="col-25">
      <div class="container">
        <br><br>
        <h4 style="color:#37517e;"> My Cart <span class="price" style="color:#37517e;"><i class="fa fa-shopping-cart"></i> </span></h4>
        <hr>

        <!--Start Table-->
        <div class="card mb-4">
          <div class="card-body">
            <div class="datatable table-responsive">
              <table class="table table-bordered table-hover" id="tablecart" width="70%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="width:30px;">check</th>
                    <th>Service Name</th>
                    <th>Price </th>
                    <th>Remove </th>
                  </tr>
                </thead>
>>>>>>> c858743f7492b624d75cafcae28f5ded1832f9b3

                <tbody>

<<<<<<< HEAD
                    <tr>
                     <!-- <td align="center"> <form><input type="checkbox" id="ch1"></form></td> -->
                      <td align="center"><?php echo $row['service-name']; ?> </td>
                      <td align="center"><?php echo $row['service-price']; ?>$</td>
                      <td align="center"> <input type="submit" class="btn btn-danger mx-2 btn-hover" name="remove" value="remove"></td>
                      <td align="center"><a href="payment.php"> <input type="submit"  class="btn btn-success mx-2 btn-hover" value="pay now"></a></td>
                     </tr>
                  
                     <?php   }
                } 
                
              // }
              ?>
                
              </tbody>
=======
                  <?php
                  // if (isset($_POST['add'])){
                  $qcart = " SELECT * FROM  `cart` ";
                  $rcart = mysqli_query($con, $qcart);
>>>>>>> c858743f7492b624d75cafcae28f5ded1832f9b3


                  if ($rcart) {
                    while ($row = mysqli_fetch_array($rcart, MYSQLI_ASSOC)) {
                      // $cart-id =(int) $row['cart_id'];
                  ?>



                      <tr>
                        <td align="center">
                          <form><input type="checkbox" id="ch1"></form>
                        </td>
                        <td align="center"><?php echo $row['service-name']; ?> </td>
                        <td align="center"><?php echo $row['service-price']; ?>$</td>
                        <td align="center"> <button type="submit" class="btn btn-danger mx-2 btn-hover" name="remove" value="<?php $row['cart_id']; ?>">remove</button></td>
                        <!-- <td align="center"></td> -->
                      </tr>

                  <?php   }
                  }

                  // }
                  ?>

                </tbody>

              </table>
            </div>
          </div>
        </div>
        <!--End Table-->
        <!-- <p><a href="#">Product 2</a> <span class="price">$5</span></p>
              <p><a href="#">Product 3</a> <span class="price">$8</span></p>
              <p><a href="#">Product 4</a> <span class="price">$2</span></p> -->
<<<<<<< HEAD
              <hr>
              <!-- <h4 style="color:#37517e; display:inline;"> Total : </h4><span class="price" style="font-size:20px;" ><b>30$</b></span> -->
             <!-- <a href="payment.php"> <input type="submit" style="float:right;" class="btn btn-success mx-2 btn-hover" value="Pay Naw"></a> -->
            </div>
          </div>
=======
        <hr>
        <h4 style="color:#37517e; display:inline;"> Total : </h4><span class="price" style="font-size:20px;"><b>30$</b></span>
        <a href="payment.php"> <input type="submit" style="float:right;" class="btn btn-success mx-2 btn-hover" value="Pay Naw"></a>
      </div>
    </div>
>>>>>>> c858743f7492b624d75cafcae28f5ded1832f9b3

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>