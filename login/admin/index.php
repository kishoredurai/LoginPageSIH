<?php 
  include('../functions.php');

  if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta content="width=device-width, initial-scale=1,user-scalable=no" name="viewport">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="main.css" type="text/css" />
  <link rel="stylesheet" href="/admin/style.css">


 <div class="alert-box hide hidden">
     Message Text Here
     <span class="close-alert">&times;</span>
 </div>

 
 
 <script>
   const myBtn=document.querySelector(".my-btn");
   const alertBox=document.querySelector(".alert-box");
   const closeBtn=document.querySelector(".close-alert")     
   let timer;
  
   closeBtn.addEventListener("click",function () {
        hideAlertBox();
        clearTimeout(timer);
   })

   function showAlertBox(){
      alertBox.classList.remove("hide");
      alertBox.classList.add("show");
      // hide animation onload 
      if(alertBox.classList.contains("hidden")){
          alertBox.classList.remove("hidden");
      }
      timer=setTimeout(function(){
          hideAlertBox();
      },6000)
   }
    document.getElementById("hello").innerHTML = showAlertBox(); 
   function hideAlertBox(){
     alertBox.classList.remove("show");
      alertBox.classList.add("hide");
   }
 </script>























  <script type="text/javascript" src="time.js"></script>
	<title>ADMIN</title>
</head>
<body onload="startTime(),startDate()">	
<div class="head">
<div id="header">
 <center> <h1 style="color:red;font-size:250%">ADMIN SECTION</h1> </center>
</div>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <h3 class="w3-bar-item">&nbsp;&nbsp;&nbsp;Menu</h3>
   <br>
  <a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a>
  <a href="display.php"><i class="fa fa-map-marker"></i>&nbsp;Display </a>
  <a href="user.php"><i class="fa fa-gears"></i>&nbsp;Settings</a>
  <a href="index.php?logout='1'"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>  
</div>

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

<div class="top-nav1">  
  <?php if(isset($_SESSION['username'])): ?>
        <a style="font-size:90%;style=float:left">USER NAME:<STRONG><?php echo $_SESSION['username']; ?></STRONG></a>
         <?php endif ?>
<i style="float:right">&nbsp;</i>
<div style="float:right" id="time" ></div>
<i style="float:right;color:green; font-size: 19px;" class="fa fa-calendar-check-o"></i>&nbsp;
<i style="float:right">&nbsp;&nbsp;</i>

<div style="float:right" id="date" ></div>
 <i style="float:right">&nbsp;</i>
<i style="float:right;color:green; font-size: 20px;" class="fa fa-clock-o"></i>
</div>


<div class="topnav" >
  <a  onclick="openNav()"><i class="fa fa-bars" style="color:white;"></i>&nbsp;MENU</a>
  <a style="float:right" href="#notification"><i class="fa fa-bell-o"></i></a>
 </div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


</body>
</html>