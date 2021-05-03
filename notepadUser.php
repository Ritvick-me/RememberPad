<?php

  include_once('config.php');
  include_once('sessions.php');
  
  error_reporting(0);
?>

<!DOCTYPE HTML>

<head>
    <title>
        <?php echo 'REMEMBER | '.$_SESSION['User']['name'];?>
    </title>
    <link rel="icon" type="image/png" sizes="32x32" href="./Assets/images/LOGO.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="generator" content="Webflow">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/index.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light rvp-navbg">
    <?php echo '<a class="navbar-brand" href="#">Welcome, '.$_SESSION['User']['name'].'</a>'?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link rvp-inactive rvp-active" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Logout<span class="sr-only">(current)</span></a>
      </div>
    </div>
  </nav>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-style: none; background-color: rgb(40, 44, 77);">
        <div class="modal-header rvp-header-bg">
          <h5 class="modal-title rvp-head" style="color: rgb(255, 242, 0);">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background-color: var(--tartiary-color); padding-top: 0px;">
          <h3 class="rvp-logout" style="color: rgb(255, 242, 0);padding-top: 20px; padding-bottom: 20px;">Are you sure you want to log out?</h3>
          <form action="logOut.php" method="post">
            <button type="button" class="rvp-close" data-dismiss="modal">Close</button>
            <button type="submit" class="rvp-logout-btn">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
    if($_SESSION['User']['tbl'] == 0){
      echo '<div class="container-fluid" id="Database" style="">
        <form action="./userData/dbcreate.php" method="POST">   
          <input type="text" name="dbName" placeholder="Write Name of the folder here..." required>
          <button type="submit">Create folder</button>
        </form>
      </div>';
    }
    else{
      echo '<div class="container-fluid text-center" id="insData">
              <form action="./userData/dataIns.php" method="POST">   
                <input type="text" name="dataVal" placeholder="Share your secrets with us..." required>
                <button type="submit">Insert</button>
              </form>
            </div>';

      $sqlGetTable = "SELECT Data FROM ".$_SESSION['User']['dbName'];
      $query2 = mysqli_query($conn, $sqlGetTable);
      $userData = mysqli_fetch_all($query2);

      echo '<div class="container-fluid" id="rvp-disp-items">
              <ul style="">';
              foreach ($userData as &$value) {
                echo '<li class="rvp-list-des" style="">'.$value[0].'<br></li>';
              }

      echo '<div class="container-fluid text-center" id="insData" style="padding-top: 20px;">
            <form action="./userData/dataDel.php" method="POST">   
              <input type="text" name="dataVal" placeholder="Make your secret private..." required>
              <button type="submit">Delete</button>
            </form>
          </div>';
            
      echo '<div class="container-fluid" id="Erase" style="padding-top: 20px;">
              <form action="./userData/dberase.php" method="POST">   
                <button type="submit">Erase Folder</button>
              </form>
            </div>';
    }
  ?>


    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script type="text/javascript" src="./Assets/js/index.js"></script>
  </body>
</HTML>