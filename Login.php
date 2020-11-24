<?php
// define variables and set to empty values
	$pword = $email = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["pword"])) {
		header("Location: Loginpage.php?error=password is required");
	    exit();
		//echo "<script type = 'text/javascript'>alert('Password is  required');</script>"; 
	  } else {
		  if (strlen($_POST["pword"])<8) {
			header("Location: Loginpage.php?error=Password should be at least 8 characters long!");
			exit();
		  //echo "<script type = 'text/javascript'>alert('Password should be at least 8 characters long!');</script>"; 
		} 
		else {
		$pword = test_input($_POST["pword"]);
		}
		// check if name only contains letters and whitespace
		
	  }
	  if (empty($_POST["email"])) {
		header("Location: Loginpage.php?error=Email is required");
	    exit();
	  } 
	  else {
		// check if e-mail address is well-formed
		if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			header("Location: Loginpage.php?error=Invalid email format!");
			exit();
		  // echo "<script type = 'text/javascript'>alert('Invalid email format!');</script>"; 
		}
		else {
			$email = test_input($_POST["email"]);
		}		
	  }
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	function clear_input() {
		header("Location: Loginpage?error=user logg in");
			exit();
		//echo "<script type = 'text/javascript'>alert('User logged in!');</script>";
	  $pword = $email = "";
	}
?>

	