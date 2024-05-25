<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/sb-new.css">
    <link rel="stylesheet" href="loginas.css">

  </head>

  <body class="bg-dark">

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
       <img class="back2Img" src="images/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <?php session_start();
          if (isset($_GET['error'])) {
            if ($_GET["error"]=="wrongpwd") {
              echo '<p class="signuperror">Wrong password</p>';
            }
            
            } 

            if (isset($_GET['error'])) {
              if ($_GET["error"]=="emptyfields") {
                echo '<p class="signuperror">Fill in all fields</p>';
              }
              elseif ($_GET["error"]=="invalidmail") {
                 echo '<p class="signuperror">Invalid Email</p>';
              }
              elseif ($_GET["error"]=="invaliduid") {
                 echo '<p class="signuperror">Invalid Username</p>';
              }
              elseif ($_GET["error"]=="passwordcheck") {
                 echo '<p class="signuperror">Your password do not match</p>';
              }
              elseif ($_GET["error"]=="usertaken") {
                 echo '<p class="signuperror">Username is already taken</p>';
              }
              elseif ($_GET["error"]=="emailtaken") {
                 echo '<p class="signuperror">Email/Username is already taken</p>';
              }
              } 
               if (isset($_GET['register'])) {
                if ($_GET["register"]=="success") {
                 echo '<p class="signupsuccess">Register successful</p>';
               }
           }
             
         
           ?>
          <form action="includes/signin.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" id="inputEmail" name="mailuid" required autofocus="autofocus" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" id="inputPassword" name="pwd" required>
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me">
                    Remember Password
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block" name="login-submit">Login</button>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
              
            </div>
        </form>
      </div>

      <div class="signup-form">
          <div class="title">Signup</div>
          
        <form action="includes/signup.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" id="firstName" name="firstname" placeholder="Enter your first name" autofocus="autofocus" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" id="lastName" name="lastname" placeholder="Enter your last name" autofocus="autofocus" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" id="inputEmail" name="mail" placeholder="Enter your email" autofocus="autofocus" required>
              </div>
              <?php
            if (isset($_SESSION['userid'])) {
              echo '<div class="form-group">
              <div class="form-label-group">
                <select type="text" id="inputEmail2" name="pos" class="form-control" placeholder="Position">
                  <option>Encoder</option>
                  <option>Admin</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="hidden" id="inputContact" name="con" class="form-control" placeholder="Email address">
                <label for="inputContact">Contact</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="hidden" id="inputAddress" name="addre" class="form-control" placeholder="Email address">
                <label for="inputAddress">Address</label>
              </div>
            </div>';
            }else{
              echo '<div class="form-group">
              <div class="form-label-group">
                <input type="number" id="inputContact" name="con" class="form-control" placeholder="Email address">
                <label for="inputContact">Contact</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputAddress" name="addre" class="form-control" placeholder="Email address">
                <label for="inputAddress">Address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="hidden" id="inputPos" name="pos" class="form-control" placeholder="Position"value="Customer">
                <label for="inputPos">Contact</label>
              </div>
            </div>';
            }
            ?>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" id="inputEmail1" name="uid" placeholder="Set a Username"  required>
              </div>


              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" id="inputPassword" name="pwd" placeholder="Enter your password" required>
              </div>

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" id="confirmPassword" name="pwdcon" placeholder="Confirm your password" required>
              </div>

              <button type="submit" class="btn btn-primary btn-block" name="signup-submit">Register</button>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>

 <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
