<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" type="text/css" href="style.css">  
</head>
<body>
	<a href="home.php">Back to Home</a>
	<button class="openbtn" onclick="openForm()">Admin Page</button>
	<div class="overlay" id="myOverlay">
                    <span class="closebtn" onclick="closeForm()" title="Close Overlay">&#215</span>
                    <div class="input-group">
					<div class="header"> <h2>Admin Signin</h2></div>
                        <form action="admin.php" method="POST" onsubmit="return validation()">
                            <input type="text" id="username" autocomplete="off" placeholder="Enter Preferred Username">
                            <input type="password" id="password" autocomplete="off" placeholder="Enter New Password">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
  <div class="header">
  	<h2>Login</h2>
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
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <script src="./admin.js" ></script>
</body>
</html>