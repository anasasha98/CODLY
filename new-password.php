<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                      <!-- <div class="form-group">
                        <input class="form-control" type="email" name="email1" placeholder=" your email" required value="<?php $email ?>">
                     
                    </div> -->
                    <div >
                      
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username" required placeholder="Username">
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                      <br>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Create new password" required >
                        
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="password" name="cpassword" placeholder="Confirm your password" required>
                        <i class="bi bi-eye-slash" id="togglePassword2"></i>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change">
    
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>