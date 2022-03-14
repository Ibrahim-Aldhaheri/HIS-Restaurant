<?php
	require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
<?php
include 'header.php';
?>
<br>
<br>
<div class="container">
    <div class="container">
        <div class="card login-card">

          <div class="row no-gutters">
            <div class="col-md">
               <div class="card-body">
                  <h3 class="login-card-description">Create account</h3>
                  <form method="POST" action="reg.php" id="signup-form" class="col-auto">
                      
                      <div class="form-group">
                          <label for="username" class="sr-only"><b>Username:</b></label>
                          <input type="text" class="form-control" name="username" id="username" placeholder="Your Username"/>
                      </div>
                      <div class="form-group">
                          <label class="sr-only" for="email"><b>Email:</b></label>
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                      </div>
                      <div class="form-group">
                          <label class="sr-only" for="password"><b>Password:</b></label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
                          <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                      </div>
                      <div class="form-group">
                              <label class="sr-only" for="password"><b>Repeat your password:</b></label>
                              <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Repeat your password"/>
                      </div>
                              <hr>
                      <div class="form-group">
                              <label class="sr-only" for="phone_number"><b>Phone number:</b></label>
                              <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Your phone number"/>
                      </div>
                      <div class="form-group">
                              <label class="sr-only" for="address"><b>Address:</b></label>
                              <input type="textarea" class="form-control" name="address" id="address" placeholder="Your address"></input>
                      </div>
                      <div class="form-group">
                                  <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                  <label for="agree-term" class="label-agree-term">I agree all statements in Terms of service</label>
                      </div>
                      <div class="form-group">
                                  <input type="submit" name="Submission" id="submit" class="btn btn-block btn-dark login-btn mb-4" value="Sign up"/>
                      </div>
                  </form>

                          <p class="login-card-footer-text ">
                              Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                          </p>
            </div>

          </div>
        </div>
       </div>
     </div>

  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

 

  <script type="text/javascript">
  $(document).ready(function() {
  load_cart_item_number();

function load_cart_item_number() {
  $.ajax({
    url: 'action.php',
    method: 'get',
    data: {
      cartItem: "cart_item"
    },
    success: function(response) {
      $("#cart-item").html(response);
    }
  });
}
  });
  </script>
  <br>
  <br>
  <br>
  <?php include 'footer.php';?>

</body>

</html>