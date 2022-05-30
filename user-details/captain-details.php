<?php
include '../forms/connection.php';
session_start();
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $image = $_POST['image'];
  $major = $_POST['major'];
  $writeaboutself = $_POST['writeaboutself'];
  $attachment = $_POST['attachment'];
  $errors = array();



  $user_check_query = "SELECT * FROM captain WHERE 'captainusername' ='$username' OR email='$email' LIMIT 1";
  $res = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($res);

  if ($user) { // if user exists
    if ($user['captainusername'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  if (count($errors) == 0) {
    $result = mysqli_query($con, "insert into captain values('$username','$firstname', '$lastname', '$password', '$email','$phone' , '$date','$major','$writeaboutself','$attachment','$image')");

    if ($result) {
?>
      <script>
        alert("data inserted properly ");
      </script>
    <?php
      header('location: ../sign-in.php');
    } else {
    ?>
      <script>
        alert("data not inserted ");
      </script>
<?php
    }
  } else {
    echo '<script language="javascript">';
    echo 'alert("Username or email already exists")';
    echo '</script>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Captain SignUp Detail</title>
  <link href="../admin/css/styles.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="../admin/assets/img/favicon.png" />
  <script data-search-pseudo-elements defer src="../admin/js/all.min.js"></script>
  <script src="../admin/js/feather.min.js"></script>
</head>

<body class="bg-primary">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header justify-content-center">
                  <h3 class="font-weight-light my-4">Captain SignUp Detail</h3>
                </div>
                <div class="card-body">
                  <form method='post'>
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="firstname">First Name</label><input class="form-control py-4" id="firstname" type="text" placeholder="Enter first name" name="firstname" required /></div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="lastname">Last Name</label><input class="form-control py-4" id="lastname" type="text" placeholder="Enter last name" name="lastname" required /></div>
                      </div>
                    </div>
                    <div class="form-group"><label class="small mb-1" for="username">User name</label><input class="form-control py-4" id="username" type="text" placeholder="Enter User name" name="username" required /></div>
                    <div class="form-group"><label class="small mb-1" for="email">Email</label><input class="form-control py-4" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" required /></div>
                    <div class="form-group"><label class="small mb-1" for="phone">Your phone number</label><input class="form-control py-4" id="phone" type="text" placeholder="Enter Your phone number" value="+962" minlength="13" maxlength="13" name="phone" required /></div>
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="password">Password</label><input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" required /></div>
                      </div>
                      <div class="form-group">
                        <!-- Date input -->
                        <label class="control-label" for="date">Birth Date</label>
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" data-date-format="mm/dd/yyyy" type="date" required />
                      </div>
                    </div>
                    <div class="form-group"><label class="small mb-1" for="major">Major</label><input class="form-control py-4" id="major" type="text" name="major" placeholder="Example : Software Engineering" required /></div>
                    <div class="form-group">
                      <label for="image">image</label>
                      <input type="file" class="form-control-file" id="image" name="image" required>
                    </div>
                    <div class="form-group">
                      <label for="writeaboutself">Write About Your Self</label>
                      <textarea class="form-control" id="writeaboutself" rows="3" name="writeaboutself" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="attachment">upload attachment</label>
                      <input type="file" class="form-control-file" id="attachment" name="attachment" required>
                    </div>
                </div>
                <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="submit" id="submit">Create Captain Account</button></div>
                </form>
              </div>
              <div class="card-footer text-center">
                <div class="small"><a href="sign-in.php" style="color: #F9F5EC;">Have an account? Go to sign in</a></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </main>
  </div>
  </div>

  <!--Script JS-->
  <script src="../admin/js/jquery-3.4.1.min.js"></script>
  <script src="../admin/js/bootstrap.bundle.min.js"></script>
  <script src="../admin/js/scripts.js"></script>
</body>

</html>