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
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }


    // shows alert success on screen
    function showtrue(x) {
      var box = document.getElementById("img_success");
      box.innerHTML += x;
      box.style.display = "block";
    }

    // remove alert success from screen
    function hidetrue() {
      document.getElementById("img_success").style.display = "none";
    }
    setTimeout(() => {
      hidetrue();
    }, 4000);

    // shows alert wrong on screen
    function showwrong(x) {
      var box2 = document.getElementById("wrong");
      box2.innerHTML += x;
      box2.style.display = "block";
    }

    // remove alert wrong from screen
    function hidewrong() {
      document.getElementById("wrong").style.display = "none";
    }
    setTimeout(() => {
      hidewrong();
    }, 4000);
  </script>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form">
        <form action="new-password.php" method="POST" autocomplete="off">
          <h2 class="text-center" style="color:#37517e;">New Password</h2>
          <?php
          if (isset($_SESSION['info'])) {
          ?>
            <div class="alert alert-success text-center">
              <?php echo $_SESSION['info']; ?>
            </div>
          <?php
          }
          ?>
          <?php
          if (count($errors) > 0) {
          ?>
            <div class="alert alert-danger text-center">
              <?php
              foreach ($errors as $showerror) {
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
                    <!-- True Alert -->
      <div class="alert success" id="img_success" style="display: none;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Success!</strong>
      </div>

      <!-- Wrong Alert -->
      <div class="alert" id="wrong" style="display: none;">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Error!</strong>
      </div>

          <div>

            <div class="input-group has-validation">
            <label class="small mb-1" for="username">User Name</label>
              <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
              <input type="text" name="username" class="form-control" id="username" required placeholder="Username">
              <div class="invalid-feedback">Please enter your username.</div>
            </div>
            
          </div>
          <!-- <div class="form-group">
          <i class="bi bi-eye-slash" id="togglePassword0"></i>
            <input class="form-control" id="psw0" type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" maxlength="25" minlength="8" placeholder="Create new password" required>

          </div>
          <div class="form-group">
          <i class="bi bi-eye-slash" id="togglePassword2"></i>
            <input class="form-control "  id="psw2" type="password" name="cpassword" placeholder="Confirm your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Match the new password" maxlength="25" minlength="8" required>
            <i class="bi bi-eye-slash" id="togglePassword2"></i>
          </div> -->
          <!-- Form Group (new password)-->
          <div class="mb-3">
                      <label class="small mb-1" for="psw">New Password</label>
                      <i class="bi bi-eye-slash" id="togglePassword"></i>
                      <input class="form-control" type="password" id="psw" name="psw" placeholder="Enter new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" maxlength="25" minlength="8" required>
                    </div>
                    <!-- Form Group (confirm password)-->
                    <div class="mb-3">
                      <label class="small mb-1" for="psw2">Confirm Password</label>
                      <i class="bi bi-eye-slash" id="togglePassword2"></i>
                      <input class="form-control" type="password" id="psw2" name="psw2" placeholder="Confirm new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Match the new password" maxlength="25" minlength="8" required>
                    </div>

                    <div class="mb-3" style="margin-left: 25px;">
                      <p id="msg" style="display: none;"></p>
                    </div>
          <div class="form-group">
            <input class="form-control button" type="submit" name="change-password" value="Change password">

          </div>
          <div id="message">
                  <h5>Password must contain the following:</h5>
                  <p id="letter" class="invalid">A <b>lowercase</b> letter
                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter
                  <p id="number" class="invalid">A <b>number</b>
                  <p id="length" class="invalid">Minimum <b>8 characters</b>
                  <p id="length2" class="valid">Maximum <b>25 characters</b>
                </div>
        </form>
        <script type="text/javascript" src="assets/js/btn_check.js"></script>

      </div>
    </div>
    
  </div>
  
<style type="text/css">
 
  #username{
    border-radius: 0.35rem;
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;

  }
  .form-control,
  .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    /* color: #69707a; */
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }

  .nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
  }

  .nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
  }

  .btn-danger-soft {
    color: #000;
    background-color: #f1e0e3;
    border-color: #f1e0e3;
  }

 /* Alter mesage Box */
 .alert {
    padding: 20px;
    /* background-color: #f44336; */
    /* color: white; */
    /* opacity: 1; */
    transition: opacity 0.6s;
    margin-bottom: 15px;
  }

  .alert.success {
    background-color: #04AA6D;
  }

  .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
  }

  .closebtn:hover {
    color: black;
  }


  


  /* The message box is shown when the user clicks on the password field */
  #message {
    display: none;
    background: #F8F8F9;
    color: #37517e;
    position: relative;
    padding: 20px;
    margin-top: 10px;
  }

  #message p {
    /* padding: 10px 25px; */
    font-size: 16px;
   
  }

  /* Add a green text color and a checkmark when the requirements are right */
  .valid {
    color: green;
  }

  .valid:before {
    position: relative;
    left: -25px;
    content: "✔";
  }

  /* Add a red text color and an "x" when the requirements are wrong */
  .invalid {
    color: #37517e;
  }

  .invalid:before {
    position: relative;
    left: -25px;
    content: "✖";
  }

  /* Toggle Password */
  label+i {
    float: right;
    margin-right: 10px;
    cursor: pointer;
  }

  a,
  a:hover {
    text-decoration: none;
  }

  .credits>a {
    color: #47b2e4;
  }
</style>

<!-- ==== New Password Conditions ==== -->
<script>
  var myInput = document.getElementById("psw");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");

  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }

  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
  }

  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }

    // Validate length
    if (myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
</script>

<!-- ==== Confirmation Password ==== -->
<script>
  var myInput2 = document.getElementById("psw2");
  var msg = document.getElementById("msg");

  // When the user clicks on the password field, show the message box
  myInput2.onfocus = function() {
    msg.style.display = "none";
    msg.removeAttribute('class');
    msg.style.display = "block";
    msg.innerHTML = "password did not match";
    msg.classList.add("invalid");
  }

  // When the user starts to type something inside the password field
  myInput2.onkeyup = function() {
    // Validate lowercase letters
    var pw1 = document.getElementById("psw").value;
    var pw2 = document.getElementById("psw2").value;
    if (pw1 != pw2 && pw1 != "" && pw2 != "") {
      msg.style.display = "block";
      msg.innerHTML = "password did not match";
      msg.removeAttribute('class');
      msg.classList.add("invalid");
    } else if (pw1 == pw2 && pw1 != "" && pw2 != "") {
      msg.style.display = "block";
      msg.innerHTML = "Password matched successfully";
      msg.removeAttribute('class');
      msg.classList.add("valid");
    }
  }
</script>

<script>
  const togglePassword0 = document.querySelector("#togglePassword0");
  const togglePassword = document.querySelector("#togglePassword");
  const togglePassword2 = document.querySelector("#togglePassword2");

  // const password = document.querySelector("#password");
  var ps0 = document.getElementById("psw0");
  var ps = document.getElementById("psw");
  var ps2 = document.getElementById("psw2");

  togglePassword0.addEventListener("click", function() {
    // toggle the type attribute
    if (ps0.type == 'password') {
      ps0.type = 'text';
    } else {
      ps0.type = 'password';
    }

    // toggle the icon
    this.classList.toggle("bi-eye");
  });

  togglePassword.addEventListener("click", function() {
    // toggle the type attribute
    if (ps.type == 'password') {
      ps.type = 'text';
    } else {
      ps.type = 'password';
    }

    // toggle the icon
    this.classList.toggle("bi-eye");
  });

  togglePassword2.addEventListener("click", function() {
    // toggle the type attribute
    if (ps2.type == 'password') {
      ps2.type = 'text';
    } else {
      ps2.type = 'password';
    }

    // toggle the icon
    this.classList.toggle("bi-eye");
  });
</script>

<script type="text/javascript">

</script>
<script src="assets/js/main.js"></script>
</body>

</html>