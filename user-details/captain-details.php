<?php
include '../forms/connection.php';
session_start();
if (isset($_POST['submit'])) {
    $inputUserName = $_POST['inputUserName'];
    $inputFirstName = $_POST['inputFirstName'];
    $inputLastName = $_POST['inputLastName'];

    $inputEmailAddress = $_POST['inputEmailAddress'];
    $inputPassword = $_POST['inputPassword'];
    $inputPhone = $_POST['inputPhone'];

    $date = $_POST['date'];
    $YourImage = $_POST['YourImage'];
    $inputMajor = $_POST['inputMajor'];

    $WriteaboutyourSelf = $_POST['WriteaboutyourSelf'];
    $attachment = $_POST['attachment'];
    $errors = array();



    $user_check_query = "SELECT * FROM captain WHERE captain-username ='$inputUserName' OR email='$inputEmailAddress' LIMIT 1";
    $res = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($res);

    if ($user) { // if user exists
        if ($user['captain-username'] === $inputUserName) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $inputEmailAddress) {
            array_push($errors, "email already exists");
        }
    }


    if (count($errors) == 0) {
        $result = mysqli_query($con, "insert into captain values('$inputUserName','$inputFirstName', '$inputLastName',  '$inputEmailAddress',$inputPassword','$inputPhone' , '$date','$YourImage','$inputMajor','$WriteaboutyourSelf','$attachment')");
        
        if ($result) {
?>
            <script>
                alert("data inserted properly ");
            </script>
        <?php
            header('location: ./index.php');
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
                                                <div class="form-group"><label class="small mb-1" for="inputFirstName">First Name</label><input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" name="inputFirstName`" required /></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="small mb-1" for="inputLastName">Last Name</label><input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" name="inputLastName" required /></div>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="small mb-1" for="inputUserName">User name</label><input class="form-control py-4" id="inputUserName" type="text" placeholder="Enter User name" name="inputUserName" required /></div>
                                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="inputEmailAddress" required /></div>
                                        <div class="form-group"><label class="small mb-1" for="inputPhone">Your phone number</label><input class="form-control py-4" id="inputPhone" type="text" placeholder="Enter Your phone number" value="+962" name="inputPhone" required /></div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" name="inputPassword" id="inputPassword" type="password" placeholder="Enter password" required /></div>
                                            </div>
                                            <div class="form-group">
                                                <!-- Date input -->
                                                <label class="control-label" for="date">Date</label>
                                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" data-date-format="mm/dd/yyyy" type="date" />
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="small mb-1" for="inputMajor">Major</label><input class="form-control py-4" id="inputMajor" type="text" name="inputMajor" placeholder="Example : Software Engineering" required /></div>
                                        <div class="form-group">
                                            <label for="YourImage">YourImage</label>
                                            <input type="file" class="form-control-file" id="YourImage" name="YourImage">
                                        </div>
                                        <div class="form-group">
                                            <label for="WriteaboutyourSelf">Write About Your Self</label>
                                            <textarea class="form-control" id="WriteaboutyourSelf" rows="3" name="WriteaboutyourSelf"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="attachment">upload attachment</label>
                                            <input type="file" class="form-control-file" id="attachment" name="attachment">
                                        </div>
                                </div>
                                <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="submit" id="submit">Create Captain Account</button></div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="sign-in.php">Have an account? Go to signin</a></div>
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