<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sound Account</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/main/main.css">
  <link rel="stylesheet" type="text/css" href="css/main/footer.css">
  <link rel="stylesheet" type="text/css" href="css/forms/forms.css">
<link rel="stylesheet" type="text/css" href="sweetalert-master/sweetalert-master/dist/sweetalert.css">
</head>

<body>
  <div id="header" class="scrolled" class="container-fluid">
    <?php

    ?>
  </div>


  <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
            <h3>Have you ever wanted to help a friend finding a job? Now there is a way allowing you to win money of that</h3>
            <p>Register here as a bounty hunter</p>
            <br>
            <p><a class="btn btn-primary btn-lg" href="register" role="button">Learn more</a></p>
            <br>
            <p>You want to find the best candidate for your company? Post an advertisement here!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            <div id="main" class="container-fluid">
              <div id="buttons-form-container" class="acc-button col-xs-10 col-md-4 col-xs-offset-1 col-md-offset-4">
                <div class="row">
                  <div class="acc-button col-md-4 col-xs-4 col-md-offset-1 col-xs-offset-1">
                    <a href="#/">
                      <p id="sign-in-link" class="acc-button-text">SIGN IN</p>
                    </a>
                  </div>
                  <div class="acc-button col-md-4 col-xs-4 col-md-offset-2 col-xs-offset-2">
                    <a href="#/">
                      <p id="register-link" class="acc-button-text">REGISTER</p>
                    </a>
                  </div>
                </div>
                <!--Here are loaded the forms  -->
                 <div id="form-container">
                </div>
              </div>
            </div>
        </div>

      </div>
  </div>
  </div>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="sweetalert-master/sweetalert-master/dist/sweetalert.min.js"></script>
  <script src="js/form-loader.js"></script>
  <script src="js/auth/ajax-login.js"></script>
  <script src="js/auth/ajax-register.js"></script>
</body>

</html>
