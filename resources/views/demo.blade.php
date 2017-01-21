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
            flex-flow: column;
            justify-content: center;
            align-content: space-between;
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

        #demo{
            display: flex;
            flex-direction: row;
            align-content: space-around;
            margin: 5%;
        }
        #works{
            flex: 1.5;
        }
        #request{
            flex: 1;
        }

        #video{
            margin-top: 20px;
            border: 3px solid blue;
            width: 566px;
            height: 355px;
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
        <div id="demo">
            <div id="works">
                <h3>How it Works</h3>
                <span>See a short video of how our product works</span>
                <div id="video">
                    <iframe width="560" height="350" src="https://www.youtube.com/embed/A1WOE5puKno" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div id="request">
                <h3>Request A Demo</h3>
                <p style="width: 400px;">Kindly input your email address below to let one  of our agents walk you through the process</p>


                <div class="form col-md-9" style="margin-left: -16px;">
                    <div class="input-group">
                        <input type="text" class="form-control input-md" placeholder="Enter email address">
                        <span class="input-group-btn">
                <button class="btn btn-md btn-default" type="button">Request Demo</button>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
