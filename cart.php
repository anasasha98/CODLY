<?php




include './forms/connection.php';
session_start()

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cart - codly</title>

  <link href="assets/img/c.png" rel="icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

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


    .cart-count {
      margin-bottom: 10px;
      height: 20px;
      width: 20px;
      background-color: #243654;
      border-radius: 50%;
      display: inline-block;
    }
  </style>
</head>

<?php
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
?>

<body class="bg-light">


  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark " style=" background: #37517e;">
      <a href="index.php" class="navbar-brand">
        <h3 class="px-5">
          <!-- <i class="fas fa-shopping-basket"></i>  -->
          <!-- Shopping Cart -->
          CODLY
        </h3>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="mr-auto"></div>
        <div class="navbar-nav">
          <a href="cart.php" class="nav-item nav-link active">

            <h5 class="px-5 cart">
              <i class="fas fa-shopping-cart">
                <sub>
                  <div class="cart-count">
                    <sub style="float: right; margin: 7px 4px 0px 2px; font-size: 12px">
                      <?php
                      $cart_count = "SELECT COUNT(`customer-username`) AS count FROM `cart` WHERE `customer-username` = '$username' GROUP BY `customer-username` ";
                      $get_count = mysqli_query($con, $cart_count);
                      if ($get_count) {
                        $num = mysqli_fetch_array($get_count, MYSQLI_ASSOC);
                        if ($num != null) {
                          echo $num['count'];
                        } else {
                          echo 0;
                        }
                      }
                      ?>
                    </sub>
                  </div>
                </sub>
              </i>


            </h5>
          </a>
        </div>
      </div>

    </nav>
  </header>

  <div class="container-fluid">
    <div class="row px-5">
      <div class="col-md-7">
        <div class="shopping-cart">




        </div>

      </div>
    </div>

    <div class="col-25">
      <div class="container">
        <br><br>
        <h3 class="px-5" style="color:#37517e; text-align: left; margin-left: -50px;">
          <i class="fas fa-shopping-basket"></i>&nbsp;&nbsp;Shopping Cart
        </h3>
        <!-- <h4 style="color:#37517e;"> My Cart <span class="price" style="color:#37517e;"><i class="fa fa-shopping-cart"></i> </span></h4> -->
        <hr>

        <!--Start Table-->
        <div class="card mb-4">
          <div class="card-body">
            <div class="datatable table-responsive">
              <table class="table table-bordered table-hover" id="tablecart" width="70%" cellspacing="0">
                <thead>
                  <tr>
                    <!-- <th style="width:30px;">check</th> -->
                    <th>Captain UserName</th>
                    <th>Service Name</th>

                    <th>Price </th>
                    <th>Price Plan</th>
                    <th>Remove </th>

                    <th>Pay</th>
                  </tr>
                </thead>

                <tbody>

                  <?php
                  // if (isset($_POST['add'])){
                  $qcart = " SELECT * FROM  `cart` WHERE `customer-username` = '$username' ";
                  $rcart = mysqli_query($con, $qcart);


                  if ($rcart) {
                    while ($row = mysqli_fetch_array($rcart, MYSQLI_ASSOC)) {
                      // $cart-id =(int) $row['cart_id'];
                  ?>



                      <tr>
                        <!-- <td align="center"> -->
                        <!-- <form><input type="checkbox" id="ch1"></form> -->
                        <!-- </td> -->
                        <td align="center"><?php echo $row['captain-username']; ?> </td>
                        <td align="center"><?php echo $row['service-name']; ?> </td>
                        <td align="center"><?php echo $row['service-price']; ?>$</td>
                        <td align="center"><?php echo $row['price-plan']; ?> </td>

                        <td align="center"><a href="remove.php?cart_id=<?php echo $row['cart_id']; ?>"> <input type="submit" class="btn btn-danger mx-2 btn-hover" onClick='alert("Are you sure you want to remove it from the card?") ' value=" Remove"></a></td>
                        <td align="center"><a href="payment.php?cart_id=<?php echo $row['cart_id']; ?>"> <input type="submit" class="btn btn-success mx-2 btn-hover" value="Pay Now"></a></td>
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
        <hr>
        <!-- <h4 style="color:#37517e; display:inline;"> Total : </h4><span class="price" style="font-size:20px;"><b>30$</b></span> -->

      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>