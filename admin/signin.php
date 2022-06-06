<?php
session_start();

include '../forms/connection.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $inputPassword = $_POST['inputPassword'];
  

   
        
        $query = "SELECT * FROM `administrator` WHERE username='$username' AND password ='$inputPassword'";
        $results = mysqli_query($con, $query);
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
    $username = $row['username'];
    $password = $row['password'];
    $email = $row['email'];
    $image = $row['image'];
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $email;
            $_SESSION['image'] = $row['image'];
            
            header("location: index.php");
        } else {

            echo '<script language="javascript">';
            echo 'alert("Wrong username/password combination")';
            echo '</script>';
            header('location: signin.php');
        }
    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SIGN IN || Admin Panel</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="js/all.min.js"></script>
    <script src="js/feather.min.js"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="font-weight-light my-4">SIGN IN</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-group"><label class="small mb-1" for="username">User Name</label><input class="form-control py-4" id="username" type="text" placeholder="Enter User Name" name="username" required /></div>
                                        <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="inputPassword" required /></div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="submit" id="submit">Sign In</button></div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="signup.php">Need an account? Sign up!</a></div>
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