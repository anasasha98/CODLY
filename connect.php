<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "codly";
$table_name = "loginform";

//connect to the db
$con = mysqli_connect($host, $user, $password);

// Check connection and reload if failed
if (mysqli_connect_errno()) {
?>
  <script type="text/javascript">
    if (!alert('<?php echo "Failed to connect to MySQL: " . mysqli_connect_error(); ?>')) {
      window.location.reload();
    }
  </script>
<?php
}
// Return name of current default database
if ($result = mysqli_query($con, "SELECT DATABASE()")) {
  $row = mysqli_fetch_row($result);
  mysqli_free_result($result);
}
?>



<!-- -------------------------------------- -->


<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "codly";
$table_name = "loginform";

//connect to the db
$con = mysqli_connect($host, $user, $password);

// Check connection and reload if failed
if (mysqli_connect_errno()) {
?>
  <script type="text/javascript">
    if (!alert('<?php echo "Failed to connect to MySQL: " . mysqli_connect_error(); ?>')) {
      window.location.reload();
    }
  </script>
<?php
}
// Return name of current default database
if ($result = mysqli_query($con, "SELECT DATABASE()")) {
  $row = mysqli_fetch_row($result);
  mysqli_free_result($result);
}

if (isset($_POST['username'])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "select * from loginform where user = '$username'";
  $sql2 = "select * from loginform where user = '$email'";

  $result = mysqli_query($con, $sql);
  // $num = mysqli_num_rows($result);

  $result2 = mysqli_query($con, $sql2);
  // $num2 = mysqli_num_rows($result2);

  if (!$result || mysqli_num_rows($result) == 0) {
    echo "<script>alert('Username Already Taken');</script>";
  } elseif (!$result2 || mysqli_num_rows($result2) == 0) {
    echo "<script>alert('Email Already Taken');</script>";
  } else {
    $reg = "INSERT INTO $table_name(name, email, username, password) VALUES ('$name','$email','$username','$password')";

    if (mysqli_query($con, $reg)); {
      echo "<script>alert('Registration Successful');</script>";
      // header('location:home.php');
    }
  }
}

?>