<?php
include '../forms/connection.php';
session_start();
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $firstName = $_POST['firstName'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];

  $errors = array();



  $user_check_query = "SELECT * FROM `customer` WHERE `customerusername` = '$username' OR `email` = '$email' OR `phonenumber` = '$phone' LIMIT 1";
  $res = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_array($res, MYSQLI_ASSOC);

  if ($user) { // if user exists
    if (isset($user['customerusername'])) {
      if ($user['customerusername'] == $username) {
        array_push($errors, "Username already exists");
      }
    } else if (isset($user['email'])) {
      if ($user['email'] == $email) {
        array_push($errors, "email already exists");
      }
    } else if (isset($user['phonenumber'])) {
      if ($user['phonenumber'] == $phone) {
        array_push($errors, "phone number already exists");
      }
    }
  }

  if (count($errors) == 0) {
    $cus_new = "insert into `customer` (`customerusername`, `firstname`, `lastname`, `password`, `email`, `phonenumber`, `dob`) values('$username','$firstName', '$lastname', '$password', '$email','$phone' , '$date')";
    $result = mysqli_query($con, $cus_new);

    if ($result) {
      echo '<script type="text/javascript">';
      echo 'alert("data inserted properly");';
      echo '</script>';
      // header('location: ../sign-in.php');
?>
      <script>
        setTimeout("document.location.href='../sign-in.php';", 10);
      </script>

<?php
    } else {
      echo '<script type="text/javascript">';
      echo 'alert("data not inserted");';
      echo '</script>';
    }
  } else {
    echo '<script type="text/javascript"">';
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
  <title>Customer Sign Up Detail</title>

  <!-- Phone Number with Country Key -->
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <link href="../admin/css/styles.css" rel="stylesheet" />
  <link href="../assets/img/c.png" rel="icon">
  <!-- <link rel="icon" type="image/x-icon" href="../admin/assets/img/favicon.png" /> -->
  <script data-search-pseudo-elements defer src="../admin/js/all.min.js"></script>
  <script src="../admin/js/feather.min.js"></script>

  <style>
    body {
      color: #6e6b6b;
      background-color: #397cab;
    }

    .btn-primary {
      color: #fff;
      background-color: #44a6eb;
      border-color: #44a6eb;
    }

    .btn-primary:hover {
      background-color: #3476a5;
      border-color: #3476a5;
    }

    .card {
      border: 1px solid rgb(203 210 213);
    }
  </style>

</head>

<body>
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header justify-content-center">
                  <h3 class="font-weight-light my-4">Customer Sign Up Details</h3>
                </div>
                <div class="card-body">
                  <form method="POST">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="firstName">First Name</label><input class="form-control py-4" id="firstName" type="text" placeholder="Enter first name" name="firstName" required /></div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"><label class="small mb-1" for="lastname">Last Name</label><input class="form-control py-4" id="lastname" type="text" placeholder="Enter last name" name="lastname" required /></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="small mb-1" for="username">Username</label>
                      <input class="form-control py-4" id="username" type="text" placeholder="Enter username" name="username" style="text-transform:lowercase" required />
                    </div>
                    <div class="form-group">
                      <label class="small mb-1" for="email">Email</label><input class="form-control py-4" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" min="1900-01-01" max="3000-01-01" onfocus="this.max=new Date().toISOString().split('T')[0]" required />
                    </div>
                    <div class="form-group">
                      <label class="small mb-1" for="phone">Phone Number</label><br>
                      <input class="form-control py-4" id="phone" type="text" placeholder="Enter your phone" name="phone" required maxlength="13" style="padding-right: 24.125rem;" />
                    </div>
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="small mb-1" for="password">Password</label>
                          <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- Date input -->
                          <label class="small mb-1" for="date">Birth Date</label>
                          <input class="form-control py-4" id="date" name="date" placeholder="MM/DD/YYY" data-date-format="mm/dd/yyyy" type="date" required />
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="image">In your profile add your image <small style="font-size: 0.835em; font-weight: 200;"></small></label>
                      <!-- <input type="file" class="form-control-file" id="image" name="image" style="font-size: 0.90em;"> -->
                    </div>
                    <div class="form-group mt-4 mb-0">
                      <button class="btn btn-primary btn-block" type="submit" name="submit" id="submit">Create Customer Account</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card-footer text-center">
                <div class="small"><a href="../sign-in.php" style="color: #F9F5EC;">Have an account? Go to sign in</a></div>
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






  <!-- Phone number with Country Key -->
  <!-- Start script -->
  <script>
    const phoneInputField = document.querySelector(" #phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>

  <script>
    function process(event) {
      event.preventDefault();

      const phoneNumber = phoneInput.getNumber();

      // document.getElementById("phone").value = `${phoneNumber}`;
    }
  </script>

  <script>
    function getIp(callback) {
      fetch('https://ipinfo.io/json?token=<your token>', {
          headers: {
            'Accept': 'application/json'
          }
        })
        .then((resp) => resp.json())
        .catch(() => {
          return {
            country: 'us',
          };
        })
        .then((resp) => callback(resp.country));
    }
  </script>

  <script>
    const phoneInput = window.intlTelInput(phoneInputField, {
      preferredCountries: ["us", "co", "in", "de"],
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>

  <!-- End script -->



</body>

</html>