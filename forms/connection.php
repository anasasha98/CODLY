<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "codly";


$con = mysqli_connect($server, $username, $password, $db);



if ($con) {
?>
  <!-- <script>
    alert('Connection Successful')
  </script> -->
<?php

} else {

  die("Connection Failed" . mysqli_connect_error());
}








            ?>
