<!DOCTYPE html>
<html dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SCDB - Login Page</title>
  <link rel="icon" type="image/png" sizes="16x16" href="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png">
  <link href="assets/mode/dist/css/style.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
</head>
<?php include "layout.php"; ?>
<body onload="typeWriter()">
  <div class="main-wrapper">
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
      </div>
    </div>
    <div id="login-box">
      <br>
      <div class="container" id="container">
        <div class="form-container sign-up-container">
          <a href="http://127.0.0.1/app-rskg-dev/IPDNDashboard/html/index-2.html" class="form-scdb" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png" class="lingkaran">
            <br>
            <br>
            <button>Dashboard</button>
          </a>
        </div>
        <div class="form-container sign-in-container">
          <form action="logedin.php" method="POST">
            <h1 id="demo"></h1>
            <div class="social-container">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="text" name="nip" placeholder="NIP" required="required" />
            <input type="password" name="password" placeholder="Password" required="required"/>
            <a href="#">Forgot your password?</a>
            <button>Sign In</button>
          </form>
        </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>Welcome Back, Friends!</h1>
              <p>To stay connected with us, please log in with your personal info. Click "Sign In" to enter the Superadmin & Administrator page</p>
              <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Hello, Friends!</h1>
              <p>Click "SCBD Dashboard" to view the SCBD Graph</p>
              <button class="ghost" id="signUp">SCBD Dashboard</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="particles-js"></div>
  <?php include "javascript.php"; ?>
</body>
</html>