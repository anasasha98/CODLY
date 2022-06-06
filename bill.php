<?php
session_start();

include './forms/connection.php';



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

			<?
			if (isset($_SESSION['username'])) {
				$username = $_SESSION['username'];
				include './forms/connection.php';
				
$queryphone = "SELECT phonenumber  FROM `customer` where customerusername = '$username' ";
						$customer_phone_number = mysqli_query($con, $query);
				$query = " SELECT * FROM  `purchase_list` ";
				$result = mysqli_query($con, $query);
				if ($result) {
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						; ?>
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
									<p>Bill To</p>
									<p class="bold name"><?php echo $username; ?></p>
									<span>
										><?php echo $customer_phone_number;?>
									</span>
								</div>
								<div class="total_wrap">
									<p>Total Due</p>
									<p class="bold price">USD: $170</p>
								</div>
							</div>
						</div>
						<div class="body">
							<div class="main_table">
								<div class="table_header">
									<div class="row">
										<div class="col col_no">NO.</div>
										<div class="col col_des">ITEM DESCRIPTION</div>
										<div class="col col_price"></div>
										<div class="col col_qty">PLAN</div>
										<div class="col col_total">PRICE</div>
									</div>
								</div>
								<div class="table_body">
									<div class="row">
										<div class="col col_no">
											<p>01</p>
										</div>
										<div class="col col_des">
											<p class="bold">Web Design</p>
											<p>captain: Ali0ziadeh</p>
										</div>
										<div class="col col_price">
											<!-- <p>$350</p> -->
										</div>
										<div class="col col_qty">
											<p>Standard</p>
										</div>
										<div class="col col_total">
											<p>$10.00</p>
										</div>
									</div>
									<div class="row">
										<div class="col col_no">
											<p>02</p>
										</div>
										<div class="col col_des">
											<p class="bold">Web Development</p>
											<p>captain: james_bond</p>
										</div>
										<div class="col col_price">
											<!-- <p>$350</p> -->
										</div>
										<div class="col col_qty">
											<p>Premium</p>
										</div>
										<div class="col col_total">
											<p>$40.00</p>
										</div>
									</div>
									<div class="row">
										<div class="col col_no">
											<p>03</p>
										</div>
										<div class="col col_des">
											<p class="bold">GitHub</p>
											<p>captain: </p>
										</div>
										<div class="col col_price">
											<!-- <p>$120</p> -->
										</div>
										<div class="col col_qty">
											<p>Professional</p>
										</div>
										<div class="col col_total">
											<p>$70.00</p>
										</div>
									</div>
									<div class="row">
										<div class="col col_no">
											<p>04</p>
										</div>
										<div class="col col_des">
											<p class="bold">Backend Design</p>
											<p>captain: </p>
										</div>
										<div class="col col_price">
											<!-- <p>$350</p> -->
										</div>
										<div class="col col_qty">
											<p>Standard</p>
										</div>
										<div class="col col_total">
											<p>$30.00</p>
										</div>
									</div>
									<div class="row">
										<div class="col col_no">
											<p>05</p>
										</div>
										<div class="col col_des">
											<p class="bold">Backend Development</p>
											<p>Lorem ipsum dolor sit.</p>
										</div>
										<div class="col col_price">
											<!-- <p>$150</p> -->
										</div>
										<div class="col col_qty">
											<p>Standard</p>
										</div>
										<div class="col col_total">
											<p>$20.00</p>
										</div>
									</div>
								</div>
							</div>
							<div class="paymethod_grandtotal_wrap">
								<div class="paymethod_sec">
									<p class="bold">Payment Method</p>
									<p>Visa, master Card and We accept Cheque</p>
								</div>
								<div class="grandtotal_sec">
									<!-- <p class="bold">
			            <span>SUB TOTAL</span>
			            <span>$7500</span>
			        </p>
			        <p>
			            <span>Tax Vat 18%</span>
			            <span>$200</span>
			        </p>
			        <p>
			            <span>Discount 10%</span>
			            <span>-$700</span>
			        </p> -->
									<p class="bold">
										<span>Grand Total</span>
										<span>$170.0</span>
									</p>
								</div>
							</div>

						</div>
						<div class="footer">
							<p>Thank you and Best Wishes</p>
							<div class="terms">
								<p class="tc bold">Violations</p>
								<p>Please report any violations of the TOS to<strong> Phone:</strong> +962 32179000
									<strong> Email:</strong> codlywb@gmail.com </strong>
								</p>
							</div>
						</div>
			<?php   }
				}
			} ?>
		</div>

	</div>


</body>

</html>