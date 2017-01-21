<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Factory</title>

    <link href="css/app.css" rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300" rel="stylesheet" /> -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <style>
      .wrapper {
      display: block;
      flex-flow: row wrap;
      justify-content: center;
      align-content: space-between;
      align-items: center;
      position: relative;
      height: 30vh;
      }

      .head-links {
      flex: 1 100%;
      align-self: flex-start;
      padding: 20px;
      }

      .head-links a
      {
        color:#000;
        border: 0px solid #ddd;
        padding:10px;
      }

      .head-links a:hover
      {
        box-shadow: 0 0 5px rgba(0,0,0,0.3);
        border:0px;
        transition: 0.2s;
      }

      .head-links a{
      text-decoration: none;
      color: #a7a7a7;
      font-size: 150%;
      }

      .title, .desc, .a, body {
      font-family: 'Quicksand', sans-serif;
      }

      .title {
      font-size: 200%;
      margin-bottom: 10px;
      }

      .desc {
      font-size: 18pt;
      margin-bottom: 40px;
      }

      .login {
      font-size: 13pt;
      margin-bottom: 40px;
      line-height: 30px;
      }

      input
      {
        border:1px solid #aaa;
      }

      .form {
      margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid wrapper">
      <div class="head-links">
        <a href="/">Home</a>
        <a href="about">About</a>
        <a href="/pricing">Pricing</a>
        <a href="/download">Download</a>
        <a href="/demo">Demo</a>
        <a href="/contact">Contact</a>
        <a href="/contributors">Contributors</a>
        <a href="/login">Login</a>
      </div>
      <div class="content">
        <div class="row" id='login_div'>
          <div class="text-center title">Login</div>
          <div class="text-center login col-md-4 col-md-push-4">
            <div class="panel panel-default">
              <div class="panel-body">
                  <form action="/login/authenticate" method="POST">
                      <label class="pull-left">Enter Email</label><br />
                      <input type="text" name="email" placeholder="Enter your email" style="width:100%;padding:5px">
                      <label class="pull-left">Enter Password</label><br />
                      <input type="password" name="pass" placeholder="Enter your password" style="width:100%;padding:5px">
                      <span class='pull-left'><input type="checkbox" id="remember" name="" value=""><label for="remember">&nbsp;Remember me</label></span>
                  </form>
              </div>
              <div class="panel-footer">

                <button type="submit" name="login" class="btn btn-lg btn-default btn-block">Login</button>
              </div>
            </div>

            Not yet a member? <a href='javascript:' onclick="hide_1()">Sign up here</a>
          </div>
        </div>

        <div class="row" id='register_div' style="display:none">
          <div class="text-center title">Register</div>
          <div class="text-center login col-md-4 col-md-push-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <label class="pull-left">Enter Name</label><br />
                <input type="text" name="" placeholder="Enter your name" style="width:100%;padding:5px">
                <label class="pull-left">Enter Username</label>
                <input type="text" name="" placeholder="Enter your username" style="width:100%;padding:5px">
                <label class="pull-left">Enter Email</label>
                <input type="text" name="" placeholder="Enter your email" style="width:100%;padding:5px">
                <label class="pull-left">Enter Password</label>
                <input type="password" name="" placeholder="Enter your password" style="width:100%;padding:5px">
              </div>
              <div class="panel-footer">

                <button type="button" name="button" class="btn btn-lg btn-default btn-block">Register</button>
              </div>
            </div>

            Already a Registered? <a href='javascript:' onclick="hide_2()">Login here</a>
          </div>
        </div>
      </div>
    </div>
    <script src="js/app.js"></script>
    <script type="text/javascript">
      function hide_1()
      {
        document.getElementById("login_div").style.display="none";
        document.getElementById("register_div").style.display="block";
      }
      function hide_2()
      {
        document.getElementById("login_div").style.display="block";
        document.getElementById("register_div").style.display="none";
      }
    </script>
  </body>
</html>
