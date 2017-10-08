
<!DOCTYPE html>
<html>
<head>
  <title> Mining Central Production! </title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="img/favicon.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin|Lato" rel="stylesheet">
  <meta charset='utf-8'>
  <script src="js/buttons.js"> </script>
</script>
  <script src='https://www.google.com/recaptcha/api.js?hl=en' async defer></script>
  <?php
  require('recaptcha/autoload.php');
  $reCaptcha = new \ReCaptcha\ReCaptcha($secret);

  // your secret key
  $secret = "6Lf-lTMUAAAAALVXeJysNJHtkQUR3XhI56ChGFc9";

  // empty response
  $response = null;

  // check secret key
  $reCaptcha = new ReCaptcha($secret);

  // if submitted check response
  if ($_POST["g-recaptcha-response"] && $_POST["name"] && $_POST["email"]) {

      $resp = $reCaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

      if ($resp->isSuccess()) {

          echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";

      } else {

          $errors = $resp->getErrorCodes();

      }

    } else {

      echo 'You did not fill all form!';

    }
?>
</head>
<body>
  <div class="main">
  <header class="header">
    <img class="logo" src="img/favicon.jpg" />
    <div class="nav-bar">
        <ui class="nav-bar-pos">
            <li><a class="nav-bar-item current-page" href="#"> Home </a> </li>
            <li><a class="nav-bar-item" href="#"> About </a> </li>
            <li><a class="nav-bar-item" href="#"> Channel </a> </li>
            <div class="dropdown">
              <button onclick='dropdown()' class='dropdown-button'> More </button>
              <div id="dropdown" class="dropdown-content">
                <a href="#" class="nav-bar-item dropdown-item-in-nav"> Join Us? </a>
              </div>
            </div>
        <ui>
</div>
  </header>
  <form action="" method="post">

      <label for="name">Name:</label>
      <input name="name" required><br />

      <label for="email">Email:</label>
      <input name="email" type="email" required><br />

      <div class="g-recaptcha" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>

      <input type="submit" value="Submit" />

    </form>

    <!--js-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</div>
</body>
</html>
