<?php
  
  session_start();

  error_reporting(0);

  if(isset($_SESSION['UserName']))
  {
    header("location:notepadUser.php"); 
  }

?>

<!DOCTYPE HTML>

<head>
    <title>REMEMBER</title>
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/images/LOGO.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="generator" content="Webflow">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/index.css?v=<?php echo time(); ?>">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light rvp-navbg">
    <a class="navbar-brand" href="#">REMEMBER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link rvp-inactive rvp-active" href="#kz-bout">About Us<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link rvp-inactive" href="#instructions">Instructions</a>
        <a class="nav-item nav-link rvp-inactive" href="#contact">Contact Us</a>
        <a class="nav-item nav-link rvp-inactive" href="loginPage.php">Sign Up</a>
        <a href="loginPage.php"><button>Log In</button></a>
      </div>
    </div>
  </nav>

  <div class="container-fluid rvp-hero">
    <div class="hero-cover"></div>
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center rvp-row">
        <div class="col col-12 text-center">
          <H1>REMEMBER</H1>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid faders" id="kz-bout">
    <div class="row" style="padding-top: 50px;">
      <div class="col col-12 col-lg-6 text-center kz-col">
        <div class="rvp-about">
          <h2>About REMEMBER</h2>
        </div>
      </div>
      <div class="col col-12 col-lg-6 text-center">
        <div class="container-fluid">
          <div class="row align-items-center" style="height: 400px;">
            <div class="col col-12">
              <p style="text-align: justify;">
                  REMEMBER is the re-incarnation of our old buddy, Notepad. Its improved to work on mobile as well as any device 
                  you could possibly imagine, whether it be desktop or tablet. It is a product of the consumer, for the consumer and 
                  by the consumer. Its built for you to carry your secret diary in your pocket always, or create your own to-do list
                  or create a list of items you wish to carry on an unforgettable trip. Literally, UN-FORGETTABLE.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <h3 class="text-center">About me</h3>
    <div id="about" class="row justify-content-center rvp-us">
      <div class="col col-12 col-lg-3" style="position: relative; margin: 0px 10px 0px 10px;">
        <div class="rvp-formal" id="rvp-me"></div>
        <div class="rvp-fade" id="rvp-meFade"></div>
        <div class="container-fluid rvp-aboutCards">
          <div class="row align-items-center" style="height: 500px;">
            <div class="col col-12 text-center rvp-header" id="rvp-h2me">
              <h2>Ritvick V. Pandey</h2>
              <h3>(Developer)</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid faders instruct" id="instructions">
    <h3>INSTRUCTIONS</h3>
    <br><br>
    <p>
      How to use REMEMBER? Easy. <br><br>
      Just search for a blue bar of magic at the top, where you will find a spell called, "Sign Up", clicking on which you will be 
      teleported to another page. Upon reaching this page, it'll ask for you to cast the spell you just learned. Its easy to do it, 
      just enter your wizard name, Email and a password to keep your wizard spells and potions safe.
      <br><br>
      Once registered, you will be notified about your registration confirmation in this secret wizards club. Now all you need to do is,
      login using your Email and passcode. Now you are teleported to another secure and safe page  which asks you to give a name to your
      book of secrets. Once you've named your book, you are again made to travel through time into another webpage (GOD these many 
      pages!!) and here you can start writing the names of the spells you create or the classified recipies of your potions.
      <br><br>
      And the best part is, any time you feel you don't require these spells and potions, you can tap the 'Erase Folder' button and POOF!
      All of the traces and remains of your data will be erased!!
      <br><br>
      So what are you waiting for? Go and cook your own magical recipies!!
    </p>
  </div>
  
  <br><br>

  <div class="container-fluid contact-bg" id="contact">
    <h2>CONTACT US</h2>
    <br><br>
    <form action="" method="GET">
      <label for="name" class="Name">Name</label> &nbsp &nbsp &nbsp
      <input class="Name" type="text" name="name">
      <br><br>
      <label for="phone" class="phone">Mobile </label>&nbsp &nbsp
      <input class="phone" maxlength="10" type="text" name="phone">
      <br><br>
      <label for="mail" class="mail">Email</label>&nbsp &nbsp &nbsp &nbsp
      <input type="email" class="mail">
      <br><br>
      <label for="mssg" class="mssg">Message</label>
      <textarea name="message" class="message"></textarea>
      <br><br>
      <button class="send">Send</button>
    </form>
  </div>
    
    
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
  <script type="text/javascript" src="./Assets/js/index.js"></script>
</body>
</HTML>