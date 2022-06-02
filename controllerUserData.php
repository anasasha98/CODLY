<?php
session_start();

include 'forms/connection.php';

$email = "";
$name = "";

$errors = array();






//if user click continue button in forgot password form
if (isset($_POST['check-email'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $check_email = "SELECT * FROM customer WHERE email='$email'";
  $run_sql = mysqli_query($con, $check_email);
  if (mysqli_num_rows($run_sql) > 0) {
    $_SESSION['info'] = "";


    $email = $fetch_data['email'];
    $_SESSION['email'] = $email;
    $info = "Please create a new password that you don't use on any other site.";
    $_SESSION['info'] = $info;
    header('location: new-password.php');
    exit();
  } else {
    $errors['email'] = "This email address does not exist!";
  }
}

//if user click check reset otp button


//if user click change password button
if (isset($_POST['change-password'])) {
  $_SESSION['info'] = "";
  $username = $_POST['username'];
  $password = mysqli_real_escape_string($con, $_POST['psw']);
  $cpassword = mysqli_real_escape_string($con, $_POST['psw2']);
  if ($password !== $cpassword) {
    $errors['psw2'] = "Confirm password not matched!";
  } else {
    $q = "SELECT * FROM customer WHERE customerusername = '$username' ";
    $r = mysqli_query($con, $q);
    if (mysqli_num_rows($r) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";

      $email1 = $_POST['email1'];
      $email = $fetch_data['email'];
      // $email = $_SESSION['email']; 

      //getting this email using session
      $encpass = password_hash($password, PASSWORD_BCRYPT);
      $update_pass = "UPDATE customer SET  password = '$password' WHERE customerusername = '$username'";
      $run_query = mysqli_query($con, $update_pass);
      if ($run_query) {
        $info = "Your password changed. Now you can login with your new password.";
        $_SESSION['info'] = $info;
        header('Location: password-changed.php');
      } else {
        $errors['db-error'] = "Failed to change your password!";
      }
    } else {

      echo '<script language="javascript">';
      echo 'alert("Wrong username")';
      echo '</script>';
    }
  }
}


//if login now button click
if (isset($_POST['login-now'])) {
  header('Location: sign-in.php');
}


if (isset($_POST['update-status'])) {

  $purchaseId = "SELECT `Purchase ID` FROM `purchase_list`  ";
  $updateQuery = "UPDATE purchase_list SET Status ='complete' ";

  $run_query = mysqli_query($con, $updateQuery);

  if ($run_query) {



    header('Location: captain-work.php');
  } else {
    $_SESSION['status'] = ' not updated';
    header('Location: captain-work.php');
  }
  // header('Location:purchase-cabtain.php');













}
