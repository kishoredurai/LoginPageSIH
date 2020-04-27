<?php 
  include('../functions.php');

  if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div class="w3-container w3-teal">
  <Center><h1>Header</h1></Center>
</div>
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact"><i class="material-icons" style="font-size:20px;"></i></a></li>
  
  <li style="float:right;font-size:20px;"><?php echo $_SESSION['user']['username']; ?></li>
</ul>
<div class="header">
    <h2>Admin - Home Page</h2>
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
    <div class="profile_info">
      <img src="../images/admin_profile.png"  >

      <div>
        <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="home.php?logout='1'" style="color: red;">logout</a>
            &nbsp; <a href="user.php"> + add user</a>
            &nbsp; <a href="display.php"> user display</a>
          </small>

        <?php endif ?>
      </div>
    </div>



  </div>
</body>
</html>
