<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Factory</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="css/basic.style.css" rel="stylesheet" />
    <script src="js/app.js"></script>
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300" rel="stylesheet" /> -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <style>
      .wrapper {
      display: flex;
      flex-flow: row wrap;
      justify-content: center;
      align-content: space-between;
      align-items: center;
      position: relative;
      height: 100vh;
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

      .content {
      }

      a, a:hover, a:active, a:visited {
      text-decoration: none;
      color: #a7a7a7;
      font-size: 150%;
      }

      .title, .desc, .a, body {
      font-family: 'Quicksand', sans-serif;
      }

      .title {
      font-size: 700%;
      margin-bottom: 10px;
      }

      .desc {
      font-size: 18pt;
      margin-bottom: 40px;
      }

      .form {
      margin-bottom: 20px;
      }

      .nav li{
        font-size: 10px;
      }
      .navbar-default .navbar-toggle .icon-bar {
    background-color: #5bc0de;
      }

      .navbar-default .navbar-brand {
    color: #5bc0de;
      }
      .panel {
      border: 2px solid #5bc0de; 
      border-radius:0;
      height: 300px;
  }

    </style>
  }
  </head>
  <body>
    @yield('content')
  </body>
</html>
