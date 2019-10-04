<?php
  session_start();

  // variable declaration
  $fname    = "";
  $lname    = "";
  $email    = "";
  $address  = "";
  $client_name = "";
  $contact  = "";
  $errors  =array();
  $_SESSION['success'] = "";
//connection to db
  $con = mysqli_connect('localhost','root','','kimbo');

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $contact = $_POST['contact'];
  $client_name= $_POST['client_name'];
  $errors = array();
  if (empty($fname)) { array_push($errors, "First name is required"); }
  if (empty($lname)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($contact)) { array_push($errors, "Contact is required"); }
  if (empty($client_name)) { array_push($errors, "Preferred name required"); }

  if (count($errors) == 0) {
    $query = "INSERT INTO customers (fname,lname,email,address,contact,client_name)
              VALUES('$fname','$lname','$email','$address','$contact','$client_name')";
      mysqli_query($con, $query);
      $_SESSION['username'] = $username;
      $_SESSION['success'] = " Added successfully";
      header('location: clients.php');
    }else
    {
      header('location: index.php');
    }

?>
