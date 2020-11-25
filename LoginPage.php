<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href= "Login.css">
</head>
<body>  

<div class = "bg-image"></div>
	<h2 class = "heading">Four Seasons <br> Hotels and Resorts</h2>
	<div class = "form-text">
	<form method = "post" action = "login.php">  
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<input class = "text-input" type = "text" name = "email" placeholder="Email">
		<br><br>
		<input class = "text-input" type = "password" name = "pword" placeholder="Password">
		<br><br>
		<button style = "margin-left: 20px;" name = "login" class = "button" onclick = 'clear_input()'>Login</button>  
	</form>
	<p class = "signup-text">New User? Sign up below!</p>
	<button class = "button" onclick='window.location.href="CustomerSignupPage.php"'>Customer</button>
	<button class = "button" onclick='window.location.href="AdminSignupPage.php"'>Admin</button>
	<button class = "button" onclick='window.location.href="EmployeeSignupPage.php"'>Employee</button>
	</div>

</body>
</html>