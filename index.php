<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="css/style.css">
 
  
  <title>Frontend Mentor | Intro component with sign up form</title>
  <script defer type="text/javascript" src="eventlistener.js"></script>
  <style>
    
  </style>
</head>
<body style="background-image: url(images/bg-intro-desktop.png);">

<?php

$nameErr = $lastNameErr = $emailErr = $passwordErr = "";
$name = $lastName = $email = $password = "" ;


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "[Field Name] cannot be empty.";
        /*header('Location: ../signup-form-master');
        exit();*/
  } else {
        $name = test_input($_POST['name']);
    }

    if (empty($_POST["lastName"])) {
      $lastNameErr = "[Field Lastname] cannot be empty";
        /*header('Location: ../signup-form-master');
        exit();*/
  } else {
        $lastName = test_input($_POST['lastName']);
  }

  if (empty($_POST["email"])) {
        $emailErr = "[Field Email] cannot be empty";
        /*header('Location: ../signup-form-master');
        exit();*/
  } else {
        $email = test_input($_POST['email']);
  }

  if (empty($_POST['password'])) {
        $passwordErr = "[Field Password] cannot be empty";
        /*header('Location: ../signup-form-master');
        exit();*/
  } else {
        $password = test_input($_POST['password']);
  }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 

?>

<div class="grid-container">
<!--<div class="container">-->
<div class="grid-item1">
  
      <h1>Learn to code by watching others</h1>

      <p>See how experienced developers solve problems in real-time. Watching scripted tutorials is great, 
          but understanding how developers think is invaluable. </p>
    
</div>
<div class="grid-item2">
  <div class="trial">
    <p class="trial-content"><span style="font-weight: bold;">Try it free 7 days</span> then $20/mo. thereafter</p>
  </div>
  
  
  <form id="form" name="frm1" class="input-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="fname">
      <input type="text" id="fname" name="name" placeholder="First Name">
      <span style="font-size: 10px;" id="error">*<?php echo $nameErr;?></span>
    </div>
    <div class="lname">
      <input type="text" id="lname" name="lastname" placeholder="Last Name">
      <span style="font-size: 10px;" id="error">*<?php echo $lastNameErr;?></span>
    </div>
    <div class="email">
      <input type="email" id="email" name="email" placeholder="Email Address">
      <span style="font-size: 10px;" id="error">*<?php echo $emailErr;?></span>
    </div>
    <div class="password">
      <input type="password" id="password" name="password" autocomplete="on" placeholder="Password"> 
      <span style="font-size: 10px;" id="error">*<?php echo $passwordErr;?></span>
    </div>
    <div  class="submit">
    <input id="submit" name="submit" type="submit" value="CLAIM YOUR FREE TRIAL">
    </div>
    <div name="note" class="note">
      <p>By clicking the button, you are agreeing to our Terms and Services</p>
    </div>
    </form>
  
</div>
 
</div> 

<div id=attribution>
  <footer>
  <p class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="https://github.com/bjmontillon" target="_blank">Bee Jay Pangilinan</a>.
  </p>
</footer>
</div>

</body>

</html>