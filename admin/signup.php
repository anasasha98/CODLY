<?php
include '../forms/connection.php';
session_start();
if (isset($_POST['submit'])) {
    $inputUserName = $_POST['inputUserName'];
    $inputEmailAddress = $_POST['inputEmailAddress'];
    $inputPassword = $_POST['inputPassword'];
    $phone = $_POST['phone'];
    $yourImage = $_POST['yourImage'];
    $errors = array();



    $user_check_query = "SELECT * FROM administrator WHERE username ='$inputUserName' OR email='$inputEmailAddress' LIMIT 1";
    $res = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($res);

    if ($user) { // if user exists
        if ($user['username'] === $inputUserName) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $inputEmailAddress) {
            array_push($errors, "email already exists");
        }
    }


    if (count($errors) == 0) {
        $result = mysqli_query($con, "insert into administrator values('$inputUserName', '$inputEmailAddress', '$inputPassword', '$phone','$yourImage')");
        if ($result) {
            echo "Registration Successfully";
            header('location: index.php');
        } else {
            echo "failed:";
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
    <title>SIGN UP || Admin Panel</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="js/all.min.js"></script>
    <script src="js/feather.min.js"></script>
    <link href="assets/img/c.png" rel="icon" />

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
                                    <h3 class="font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST">

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="small mb-1" for="inputUserName">User Name</label><input class="form-control py-4" id="inputUserName" type="text" placeholder="Enter user name" name="inputUserName" style="text-transform:lowercase"  required /></div>
                                            </div>

                                        </div>

                                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="inputEmailAddress" required /></div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="inputPassword" required /></div>
                                            </div>

                                            <div>
                                                <label for="phone">Enter your phone number:</label>
                                                <input type="tel" id="phone" name="phone" value="+962" required>
                                            </div>




                                            <div class="form-group">
                                                <label for="yourImage">Your Image</label>
                                                <input type="file" class="form-control-file" id="yourImage" name="yourImage">
                                            </div>

                                        </div>
                                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="submit" id="submit">Create Account</button></div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="signin.php">Have an account? Go to signin</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!--Script JS-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>