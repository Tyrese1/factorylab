<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Factory</title>

  <link href="css/app.css" rel="stylesheet" />
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
      height: 65vh;
    }

    .head-links {
      flex: 1 100%;
      align-self: flex-start;
      padding: 20px;
    }

    .head-links a {
      color: #000;
      border: 0px solid #ddd;
      padding: 10px;
    }

    .head-links a:hover {
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
      border: 0px;
      transition: 0.2s;
    }

    .content {}

    a,
    a:hover,
    a:active,
    a:visited {
      text-decoration: none;
      color: #a7a7a7;
      font-size: 150%;
    }

    .title,
    .desc,
    .a,
    body {
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
    <div class="row">
      <div class="text-center title">Download</div>

      <div class="text-center desc col-md-8 col-md-push-2">
        {{$sitename}} gives you flexible pricing, so you pay only for features you need.
        <br />&nbsp;
        <br /> Click the Download Link to Get started
      </div>
      <div class="form col-md-6 col-md-push-3 text-center">
        <div class="input-group text-center">
          <a href="pricing">
            <button class="btn btn-primary">Click here to Download</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/js/app.js"></script>
</body>

</html>