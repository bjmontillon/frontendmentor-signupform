<?php

$nameErr = $lastNameErr = $emailErr = $passwordErr = "";
$name = $lastName = $email = $password = "" ;


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
        /*header('Location: ../signup-form-master');
        exit();*/
  } else {
        $name = test_input($_POST['name']);
    }

    if (empty($_POST["lastName"])) {
      $lastNameErr = "Last name is required.";
        /*header('Location: ../signup-form-master');
        exit();*/
  } else {
        $lastName = test_input($_POST['lastName']);
  }

  if (empty($_POST["email"])) {
        $emailErr = "Email address name is required.";
        /*header('Location: ../signup-form-master');
        exit();*/
  } else {
        $email = test_input($_POST['email']);
  }

  if (empty($_POST['password'])) {
        $passwordErr = "Password is required.";
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