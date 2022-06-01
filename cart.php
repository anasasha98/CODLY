<?php

session_start();

include './forms/connection.php';




if (isset($_POST['add'])){
    //  print_r($_POST['sno']);
    if(isset($_SESSION['cart'])){
    

        $item_array_id = array_column($_SESSION['cart'], "service-id");

        if(in_array($_POST['service-id '], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'service-id' => $_POST['service-id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'service-id' => $_POST['service-id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
  
}

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["service-id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="style.css">  -->
    <style>
        #tablecart thead tr{
text-align="center";
            color :#37517e;;



        }




        </style>
</head>
<body class="bg-light">

<?php
    require_once ('header.php');
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

<div class="col-25">
            <div class="container">
                <br><br>
              <h4 style="color:#37517e;"> My Cart <span class="price" style="color:#37517e;"><i class="fa fa-shopping-cart"></i> </span></h4>
            <hr>
          
           <!--Start Table-->
<div class="card mb-4">
        <div class="card-body">
          <div class="datatable table-responsive">
            <table class="table table-bordered table-hover" id="tablecart" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th style="width:30px;" >check</th>
                  <th align="center">Service Name</th>
                  <th align="center">Price </th>
                </tr></thead>
              <tbody>
               

                    <tr>
                     <td> <form><input type="checkbox" ></form></td>
                      <td align="center"><p><a href="#">Product 1</a> </P></td>
                      <td align="center"><P> <span class="price">$15</span></p></td>
                      <!-- <td align="center"></td> -->
                     </tr>
                     <tr>
                     <td> <form><input type="checkbox" ></form></td>
                      <td align="center"><p><a href="#">Product 1</a> </P></td>
                      <td align="center"><P> <span class="price">$15</span></p></td>
                      <!-- <td align="center"></td> -->
                     </tr>
                     <tr>
                     <td> <form><input type="checkbox" ></form></td>
                      <td align="center"><p><a href="#">Product 1</a> </P></td>
                      <td align="center"><P> <span class="price">$15</span></p></td>
                      <!-- <td align="center"></td> -->
                     </tr>
                     <tr>
                     <td> <form><input type="checkbox" ></form></td>
                      <td align="center"><p><a href="#">Product 1</a> </P></td>
                      <td align="center"><P> <span class="price">$15</span></p></td>
                      <!-- <td align="center"></td> -->
                     </tr>
                
              </tbody>

            </table>
          </div>
        </div>
      </div>
      <!--End Table-->
              <!-- <p><a href="#">Product 2</a> <span class="price">$5</span></p>
              <p><a href="#">Product 3</a> <span class="price">$8</span></p>
              <p><a href="#">Product 4</a> <span class="price">$2</span></p> -->
              <hr>
              <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
            </div>
          </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
