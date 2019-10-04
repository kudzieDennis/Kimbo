<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to kimbo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<script type="text/javascript">
	// START DATE SCRIPT

	var showdate	= "yes"  	// SHOW THE DATE | yes | no |

	   if (showdate == "yes") {
	document.write('<div id="date-location">');
	var d=new Date();
	var weekday=new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	var monthname=new Array('January','February','March','April','May','June','July','August','September','October','November','December');
	document.write('<span class="date-font">' + weekday[d.getDay()] + ' ');
	document.write(monthname[d.getMonth()] + ' ');
	document.write(d.getDate() + '. ');
	document.write(d.getFullYear())
	document.write('<br></span>')
	document.write('</div>');
	}
	var TxtRotate = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtRotate.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function () {
        that.tick();
    }, delta);
};

window.onload = function () {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
};


	</script>

	<div class="header">
		<h1 style="text-shadow:2px 1px black;">
		Kimbo is
		<span class="txt-rotate"
					data-period="2000"
					data-rotate='[ " a CRM SYSTEM.", " there to store all your customers.", "here to help with customer management.", " a DSC Xerox property.", " an advertising tool.", "progress report system."]'></span>
</h1>
		<h2>Login To Kimbo</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Register</a>
		</p>
	
	</form>


</body>
</html>
