<!DOCTYPE HTML>  
<html>
<head>
<link rel ="stylesheet" href = "EmployeeSignup.css">
</head>
<body>  
<div class = "bg-image"></div>
	<h2 class = "heading">Welcome! Register yourself as an Employee!</h2>
	<div class = "form-text">
	<form method = "post" action = "EmployeeSignup.php">
	<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<input class = "text-input" type = "text" name = "name"  placeholder="Name">
		<br><br>  
		<input class = "text-input" type = "text" name = "email"  placeholder="Email">
		<br><br>
		<input class = "text-input" type = "password" name = "pword"  placeholder="Password">
		<br><br>
		<input class = "text-input" type = "text" name = "phone"  placeholder="Contact No.">
		<br><br>	
		<button style = "margin-left: 20px;" name = "esignup" class = "button" onclick = "clear_input()">Sign Up</button>  
	</form>
	</div>

</body>
</html>