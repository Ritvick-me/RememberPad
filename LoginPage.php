<?php
  
  session_start();

  error_reporting(0);

  $_SESSION['Output'];

  $_SESSION['badGateway'];

  $_SESSION['goodGateway'];

?>

<!DOCTYPE HTML>

<head>
    <title>REMEMBER | Log In</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./Assets/images/LOGO.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="generator" content="Webflow">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/index.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light rvp-navbg">
    <a class="navbar-brand" href="index.php">REMEMBER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link rvp-inactive rvp-active" href="index.php">Home<span class="sr-only">(current)</span></a>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row rvp-log align-items-center">
      <div class="col col-md-6 rvp-border">
        <h2>Sign Up</h2>
        <form action="signUp.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" name="name" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col col-md-6">
        <h2>Login</h2>
        <form action="LogIn.php" method="POST">
          <div class="form-group">
            <label for="InputEmail">Email address</label>
            <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <?php
        if(isset($_SESSION['badGateway']))
        {
          echo '<h3 style="color: red; font-size:20px;">'.$_SESSION['badGateway'].'</h3>';
          $_SESSION['badGateway'] = '';
        }
        if(isset($_SESSION['goodGateway']))
        {
          echo '<h3 style="color: blue; font-size:20px;">'.$_SESSION['goodGateway'].'</h3>';
          $_SESSION['goodGateway'] = '';
        }
      ?>
    </div>
  </div>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script type="text/javascript" src="./Assets/js/index.js"></script>
  </body>
</HTML>