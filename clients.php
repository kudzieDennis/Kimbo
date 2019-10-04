<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Client Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
    	<?php include_once('header.php') ?>
  <body>
    <div class="header">
      <h2>Register new client</h2>
    </div>

    <form method="post" action="add_client.php">

  		<div class="input-group">
  			<label>First name</label>
  			<input type="text" name="fname" required>
  		</div>
      <div class="input-group">
        <label>Last name</label>
        <input type="text" name="lname" required >
      </div>
  		<div class="input-group">
  			<label>Email</label>
  			<input type="email" name="email" value="" required>
  		</div>
  		<div class="input-group">
  			<label>Company name </label>
  			<input type="text" name="client_name" required>
  		</div>
  		<div class="input-group">
  			<label>Address</label>
  			<input type="text" name="address" required>
  		</div>
      <div class="input-group">
  			<label>Contact</label>
  			<input type="number" name="contact" required>
  		</div>
  		<div class="input-group">
  			<button type="submit" class="btn">Add Client</button>
  		</div>

  	</form>
    <div class="header-btn">
      <h3 style="color: black">
        View all your Customers
      </h3>
      <small>Excellent customer service is the number one job in any company.
        It is the personality of the company and the reason customers come back.
         Without customers, there is no company</small>
      <div class="menu">
        <button type="submit" class="click" name="reports" onclick="location.href='customers.php'" style="color: white">See all Customers </button>
      </div>
    </div>
    <div class="header-btn">
      <h3 style="color: black">
        Manage Appointments
      </h3>
      <small>"Being on time to appointments and meetings is a phase of self-discipline and an evidence of self-respect.
        Punctuality is a courteous compliment the intelligent person pays to his associates."
         ~ Marvin J. Ashton</small>
      <div class="menu">
        <button type="submit" class="click" name="reports" onclick="location.href='appointments.php'" style="color: white">Goto Appointments</a> </button>
      </div>
    </div>
    <div class="header-btn">
      <h3 style="color: black">
        Manage Orders
      </h3>
      <small>“A customer is the most important visitor on our premises. He is not dependent on us.
        We are dependent on him. He is not an interruption of our work. He is the purpose of it. He is not an outsider of our business.
        He is part of it. We are not doing him a favour by serving him. He is doing us a favour by giving us the opportunity to do so.”</small>
      <div class="menu">
        <button type="submit" class="click" name="orders" onclick="location.href='orders.php'" style="color: white">Orders</a> </button>
      </div>
    </div>

    <p><h5>Recent  Purchases </h5> </p>
    <p><h5>Customer Orders </h5> </p>
    <p><h5>Follow Ups </h5> </p>
  </body>
  <footer>
<?php include_once('footer.php') ?>
  </footer>
</html>
