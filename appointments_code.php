<?php
  session_start();

  // variable declaration
  $date     ="";
  $client_type ="";
  $time     ="";
  $email    = "";
  $address  = "";
  $client_name =  "";
  $contact  = "";
  $errors   = array();
  $_SESSION['success'] = "";
//connection to db
  $con = mysqli_connect('localhost','root','','kimbo');

    $client_name  = $_POST['client_name'];
    $date     = $_POST['date'];
    $email    = $_POST['email'];
    $address  = $_POST['address'];
    $contact  = $_POST['contact'];
    $client_type= $_POST['client_type'];
    $time     = $_POST['time'];
    $errors   = array();
    if (empty($client_name)) { array_push($errors, "First name is required"); }
    if (empty($date)) { array_push($errors, "Client name is required"); }
    $date_now = date("d/m/Y");
    if ($date < $date_now){array_push($errors,"Invalid date, choose a future date"); }
    if (empty($time)) { array_push($errors, "Time is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }
    if (empty($contact)) { array_push($errors, "Contact is required"); }
    if (empty($client_type)) { array_push($errors, "Client name required"); }

    if (count($errors) == 0) {
      $query = "INSERT INTO appointments (client_name,date,time,email,address,contact,client_type)
            VALUES('$client_name','$date','$time' ,'$email', '$address','$contact','$client_type')";
      mysqli_query($con, $query);

      $_SESSION['success'] = "Registered successful";
      header('location: appointments.php');
    }else{
      echo "Failure incurred ";
      header('location: index.php');
    }




 ?>
 <?php include_once('footer.php') ?>
