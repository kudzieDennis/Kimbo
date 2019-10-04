<?php
//variable
  $subject=$message=$sender="";
  $_SESSION['success']='';
  $errors=array();
  //connect to db
  $con = mysqli_connect('localhost','root','','kimbo');
  $sender = $_POST['sender'];
  $subject = $_POST['subject'];
  $message= $_POST['message'];
  $errors = array();

  if (empty($sender)) { array_push($errors, "From is required"); }

    if (count($errors) == 0){
    $query = "INSERT INTO adverts (sender,subject,message)
            VALUES('$sender','$subject','$message')";
    mysqli_query($con,$query);
    }
    else{
      echo "new";
    }
?>
