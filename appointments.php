<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Appointments</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    	<?php include_once('header.php') ?>
  </head>
  <body>
    <div class="header">
      <h2>Set new appointments</h2>
    </div>

    <form method="post" action="appointments_code.php">

      <div class="input-group">
        <label>Client_name</label>
        <input type="text" name="client_name" required>
      </div>
      <div class="input-group">
        <label>Date</label>
        <input type="date" name="date" required >
      </div>
      <div class="input-group">
        <label>Time</label>
        <input type="time" name="time" value="" required>
      </div>
      <div class="input-group">
        <label>Client type</label>
        <select class="" name="client_type">
            <option value="potential_client">Potential Client</option>
            <option value="existing_client">Existing Client</option>
            <option value="not_sure">Not sure</option>
        </select>
      </div>
      <div class="input-group">
        <label>Meeting Address</label>
        <input type="text" name="address" required>
      </div>

      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" required>
      </div>

      <div class="input-group">
        <label>Contact</label>
        <input type="number" name="contact" required>
      </div>
      <div class="input-group">
        <button type="submit" name="set_appointment" class="btn">Add Appointment</button>
      </div>
    </form>
    <center>
      <div class="input-group">
        <button name="appointment_List" onclick="location.href='appointments_list.php'" class="btn" >See All Appointments</button>

      </div>

    <div class="input-group">
      <button name="" onclick="location.href='notes.php'" class="btn" >See Upcoming Events</button>
    </div>
  </  center>

  </body>
  <?php include_once('footer.php') ?>
</html>
