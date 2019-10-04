  <div class="sidenav">
    <a href="index.php">Home</a>
    <button class="dropdown-btn" onclick="location:href='clients.php'">Clients
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="clients.php">Customers</a>
      <a href="appointments.php">Appointments</a>
      <a href="orders.php">Orders</a>
    </div>
    <a href="reports.php">Reports</a>
    <a href="adverts.php">Adverts</a>
    <a href="about.php">About</a>
    <a href="login.php">Logout</a>
  </div>

<style media="screen">
/* Fixed sidenav, full height */
.sidenav {
height: 100%;
width: 15%;
position: fixed;
z-index: 1;
top: 0;
left: 0;
background-color: #111;
overflow-x: hidden;
font-size: 80%;
padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a,.dropdown-btn {
padding: 15px 8px 6px 16px;
text-decoration: none;
font-size: 20px;
color: #818181;
display: block;
border: none;
background: none;
width:100%;
text-align: left;
cursor: pointer;
outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
color: #f1f1f1;
}

/* Main content */
.main {
margin-left: 200px; /* Same as the width of the sidenav */
font-size: 20px; /* Increased text to enable scrolling */
padding: 0px 10px;
}

/* Add an activeclass to the active dropdown button */
.active {
background-color: green;
color: white;
}

/* Dropdown container (hidden by default).Optional: add a lighter background color and some left padding to change thedesign of the dropdown content */
.dropdown-container {
display: none;
background-color: #262626;
padding-left: 8px;
}

/* Optional:Style the caret down icon */
.fa-caret-down {
float: right;
padding-right: 8px;
}
</style>
<script type="text/javascript">
//* Loop through all dropdown buttons to toggle between hiding and showing itsdropdown content - This allows the user to have multiple dropdowns without anyconflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
dropdown[i].addEventListener("click",  function() {
  this.classList.toggle("active");
   var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display  === "block") {
    dropdownContent.style.display  = "none";
  } else {
     dropdownContent.style.display = "block";
  }
});
}
</script>
