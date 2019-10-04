<?php
//declaring variables
  session_start();
  $_SESSION['success']="";
  $client_name  = "";
  $product      = "";
  $quantity     = "";
  $description  = "";
  $price        = "";
  $contact      = "";
  $errors       =array();
  $_SESSION['success'];
  //connect db
  $con = mysqli_connect('localhost','root','','kimbo');
  echo "Connection established\n";
          //intantiating
      $client_name  = $_POST['client_name'];
      $product      = $_POST['product'];
      $quantity     = $_POST['quantity'];
      $description  = $_POST['description'];
      $price        = $_POST['price'];
      $contact      = $_POST['contact'];
      $errors = array();
    if ($client_name == "Select Customer...") { array_push($errors, "Client name is required"); }
    if (empty($price)) { array_push($errors, "Total price is required"); }

    if (count($errors) == 0) {
      echo " no errors";
      $query = "INSERT INTO orders (price, product, quantity, description, contact,client_name)
              VALUES('$price','$product','$quantity','$description','$contact','$client_name')";
      mysqli_query($con, $query);

      $_SESSION['succes']='Quoatation served';
        header('location: orders.php');

    }
        else
    {
        echo "Failure";
        header('location: index.php');
    }
 ?>
