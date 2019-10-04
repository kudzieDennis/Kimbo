<?php
	//include 'server.php';
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kimbo Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include_once('header.php') ?>
</head>
<body>
	<div class="header">
		<h2>Kimbo Dashboard</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
	<a href="index.php?logout='1'" style="color: red;">logout</a>
		<?php endif ?>
	</div>

	<div class="header-btn">
		<h3>
			Manage Clients
		</h3>
		<small>Get to know your clients, see when you last texted who and do something for then. Know their birthdays e.t.c...</small>
		<div class="menu">
			<button type="submit" class=click name="" onclick="location.href='clients.php'" style="color: white">Clients</button>
		</div>
	</div>

	<div class="header-btn">
		<h3>
			View reports
		</h3>
		<small>Understand your customer, know where customers are having problem and any campaign reports... Which products are favourites...</small>
		<div class="menu">
			<button type="submit" class="click" id="wait"name="reports" onclick="location.href='reports.php'" style="color: white">View reports</button>
		</div>
	</div>
	<div class="header-btn">
		<h3>
			Create Advert
		</h3>
		<small>Create profesional email campaigns, put them on autopilot and get better results...</small>
		<div class="menu">
			<button type="submit" class="click" name="adverts" onclick="location.href='adverts.php'">Adverts</button>
		</div>
	</div><br><br><br>


</body>
<?php include_once('footer.php') ?>
</html>
