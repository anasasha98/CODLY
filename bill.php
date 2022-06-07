<?php
include './forms/connection.php';
session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $type = $_SESSION['type'];
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Invoice Service</title>
  <link rel="stylesheet" type="text/css" href="assets/css/billstyles.css">
</head>

<body>


  <div class="wrapper">
    <div class="invoice_wrapper">

      <?php

      $queryphone = "SELECT phonenumber  FROM $type where {$type}username = '$username' ";
      $queryphone = mysqli_query($con, "SELECT phonenumber FROM $type WHERE {$type}username = '$username' LIMIT 1");
      $customer_phone_number = mysqli_fetch_assoc($queryphone);


      $query = " SELECT *,SUM(`Price`) AS total FROM  `purchase_list` where `Customer Username` = '$username' GROUP BY '$username' ";
      $result = mysqli_query($con, $query);
      $rowcount = 0;

      $counter = 0;
      if ($result) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          $counter += 1;

          if ($counter == 1) { ?>
            <div class="header">
              <div class="logo_invoice_wrap">
                <div class="logo_sec">
                  <img src="assets/img/codingboss.png" alt="code logo" width="60px">
                  <div class="title_wrap">
                    <p class="title bold">Codly</p>
                    <p class="sub_title">Freelancer Website</p>
                  </div>
                </div>

                <div class="invoice_sec">
                  <p class="invoice bold">INVOICE</p>
                  <p class="invoice_no">
                    <span class="bold">Invoice</span>
                    <span>#<?php echo $row['Purchase ID']; ?></span>
                  </p>
                  <p class="date">
                    <span class="bold">Date</span>
                    <span><?php echo $row['Date']; ?></span>
                  </p>
                </div>
              </div>
              <div class="bill_total_wrap">
                <div class="bill_sec">
                  <p style="margin-right: 2%">Bill To</p>
                  <p class="bold name"><?php echo $username; ?></p>
                  <span>
                    <?php echo $customer_phone_number['phonenumber']; ?>
                  </span>
                </div>
                <div class="total_wrap">
                  <p>Total Due</p>
                  <p class="bold price">JD: $<?php echo $row['total'] ?></p>
                </div>
              </div>
            </div>
            <div class="body">
              <div class="main_table">
                <div class="table_header">
                  <div class="row">
                    <div class="col col_no">NO.</div>
                    <div class="col col_des">ITEM DESCRIPTION</div>
                    <div class="col col_price" style="margin-right:13%;">Date</div>
                    <div class="col col_qty">METHOD</div>
                    <div class="col col_total">PRICE</div>
                  </div>
                </div>
              <?php
            }
              ?>
              <div class="table_body">
                <div class="row">
                  <div class="col col_no">
                    <p><?php echo $rowcount + 1; ?></p>
                  </div>
                  <div class="col col_des">
                    <p class="bold"><?php echo $row['Service Name']; ?></p>
                    <p>captain: <?php echo $row['captain-username']; ?></p>
                  </div>
                  <div class="col col_des">
                    <?php echo $row['Date']; ?>
                  </div>
                  <div class="col col_qty">
                    <p><?php echo $row['method']; ?></p>
                  </div>
                  <div class="col col_total">
                    <p><?php echo $row['Price']; ?></p>
                  </div>
                </div>

              </div>

              </div>
            </div>
               <?php
              $tot=  $row['total'];
        }
      }
            ?>
            <div class="paymethod_grandtotal_wrap" style="margin-top:1%";>
              <div class="paymethod_sec">
                <p class="bold">Payment Method</p>
                <p>Visa , Cash amount</p>
              </div>
              <div class="grandtotal_sec" style="margin-left: 83%">
                <p class="bold">

                  <span>Grand Total: $<?php echo $tot; ?></span>
                </p>
              </div>
            </div>
      

    </div>
    <br>
    <div class="footer" style="font-weight: bold;">
      <p>Thank you and Best Wishes</p>
      <br>
      <div class="terms">
        <p class="tc bold">Violations</p>
        <p>Please report any violations of the TOS to<strong> Phone:</strong> +962 32179000
          <strong> Email:</strong> codlywb@gmail.com </strong>
        </p>
      </div>
    </div>



  </div>

  </div>


</body>

</html>