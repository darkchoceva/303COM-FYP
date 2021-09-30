<?php
session_start();

//initializing variables
$manager_name = "";
$manager_contact = "";
$manager_email = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'db_warehouse');

//register for warehouse manager
if(isset($_POST['signup'])){
  //receive all input values
  $manager_name = mysqli_real_excape_string($db, $_POST['manager_name']);
  $manager_contact = mysqli_real_excape_string($db, $_POST['manager_contact']);
  $manager_email = mysqli_real_excape_string($db, $_POST['manager_email']);
  $manager_pw1 = mysqli_real_excape_string($db, $_POST['manager_pw1']);
  $manager_pw2 = mysqli_real_excape_string($db, $_POST['manager_pw2']);

  //sign up form validation
  if(empty($manager_name)) {array_push($errors, "Your name is required");}
  if(empty($manager_contact)) {array_push($errors, "Your contact number is required");}
  if(empty($manager_email)) {array_push($errors, "Your email address is required");}
  if(empty($manager_pw1)) {array_push($errors, "Please enter your password");}
  if($manager_pw1 != $manager_pw2) {
    array_push($errors, "Please enter the same passwords");
  }

  //check whether manager user does not exist in database
  $manager_check_query = "SELECT * FROM manager WHERE manager_name='$manager_name' OR manager_email='$manager_email' LIMIT 1";
  $result = mysqli_query($db, $manager_check_query);
  $manager = mysqli_fetch_assoc($result);

  if($manager) {
    if($manager['manager_name'] === $manager_name) {
      array_push($errors, "This manager's name already exists");
    }

    if($manager['manager_email'] === $manager_email) {
      array_push($errors, "This manager's email already exists");
    }
  }

  //proceed to register if there are no errors
  if(count($errors) == 0) {
    //password encryption before saving into database
    $manager_password = md5($manager_pw1);

    $query = "INSERT INTO manager (manager_name, manager_contact, manager_email, manager_password)
              VALUES('$manager_name', '$manager_contact', 'manager_email', 'manager_password')";
    mysqli_query($db, $query);
    $_SESSION['manager_name'] = $manager_name;
    $_SESSION['success'] = "welcome, warehouse manager.";
    header('location: ');
  }
}

?>
