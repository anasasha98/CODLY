<?php
include './forms/connection.php';

session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];


  $type = $_SESSION['type'];
}
if (isset($_GET['purchase_id'])) {
  $purchase_id = $_GET['purchase_id'];

  $querycustomer = " SELECT `Service Name`,`captain-username`,`method`,`Date`,`Price`,`Purchase ID` FROM `purchase_list` WHERE `purchase_list`.`Purchase ID` = '$purchase_id'";
  $result = mysqli_query($con, $querycustomer);

?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Invoice Service</title>
    <link rel="stylesheet" type="text/css" href="assets/css/billstyles.css">
    <link href="assets/img/c.png" rel="icon" />

  </head>

  <body>


    <div class="wrapper">
      <div class="invoice_wrapper">

        <?php

        $queryphone = "SELECT phonenumber  FROM $type where {$type}username = '$username' ";
        $queryphone = mysqli_query($con, "SELECT phonenumber FROM $type WHERE {$type}username = '$username' LIMIT 1");
        $customer_phone_number = mysqli_fetch_assoc($queryphone);





        if ($result) {
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        ?>
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

              </div>
            </div>

            <div class="body">
              <div class="main_table">
                <div class="table_header">
                  <div class="row">

                    <div class="col col_des">ITEM DESCRIPTION</div>
                    <div class="col col_price" style="margin-right:13%;">Date</div>
                    <div class="col col_qty">METHOD</div>
                    <div class="col col_total">PRICE</div>
                  </div>
                </div>


                <div class="table_body">
                  <div class="row">
                    <div class="col col_no">


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
                  <? $method = $row['Method']; ?>
                </div>


              </div>
            </div>

            <div class="paymethod_grandtotal_wrap" style="margin:2%" ;>
              <div class="paymethod_sec">
                <p class="bold">Payment Method</p>
                <p>Visa , Cash Amount</p>
              </div>

            </div>

      <?php
          }
        }
      }

      ?>
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