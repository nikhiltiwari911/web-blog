<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>

    <style>
      body {
        font-family: 'Open Sans', sans-serif;
        text-transform:capitalize;
      }
      .card {
        box-shadow: 0 1px 4px 0 rgba(0,0,0,0.2);
        padding: 10% 5%;
        border-radius: 5px;
      }
      a{
        color: #049341;
      }
      .main-image {
        width: 100%;
        padding: 5%;
      }
      .btn-blue {
        background-color: #1A237E;
        color: #fff;
        border-radius: 2px
      }

      .btn-blue:hover {
        cursor: pointer;
        background-color: #063cdd;
        border-color: #063cdd;
        color: #fff;
      }
      label.error{
        color: red;
      }
    </style> 
</head>
<body>
<div class="container">
    <div class="row">
      <div class="main-conatiner" style="padding: 10% 0;">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
        <div class="col-sm-12 col-xs-12 col-md-5 col-lg-5">
          <img class="main-image" src="https://i.imgur.com/uNGdWHi.png">
        </div>
        <div class="col-sm-0 col-xs-0 col-md-2 col-lg-2">
          
        </div>
        
          <div class="col-sm-12 col-xs-12 col-md-5 col-lg-5">
            <div class="card">
          <form action="<?php echo base_url(); ?>index.php/User_details/login" id="login-form" method="post" accept-charset="utf-8">
                
            <div class="">
              
              <h3 class="">Sign In</h3>
              <p class="">Welcome back! Please signin to continue.</p>
              <br>
              <div class="form-group">
                <label for="user_type">Choose user type:</label>
                <select id="user_type" name="user_type" class="form-control">
                  <option value="Auth">Auth</option>
                  <option value="Guest">Guest</option>
                </select>
              </div> 
              <div class="login-content">
              <div class="form-group">
                <label>Email address </label>
                <input  name="email" id="email" type="email" class="form-control" placeholder="yourname@yourmail.com" required>
              </div>
              <div class="form-group">
                <div class="">
                  <label class="">Password</label>
                  <!-- <a href="#" class="">Forgot password?</a> -->
                </div>
                <input type="password" name="password" minlength="5" class="form-control" placeholder="Enter your password" required>
              </div>
              </div>
                <input type="submit" name="submit" value="Log in" class="btn btn-block btn-blue">
            </div>
            </form>
          </div>
        </div>
        
      </div>
      </div>
      
    </div>
</div>

<script>
$("#login-form").validate();
</script>
 
 <script type="text/javascript">
   $(function() {
    $('#user_type').change(function() {
        $('.login-content').toggle(1000);
    });
  });
 </script>
        
        
 



</body>
</html>