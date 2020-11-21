<?php
// define variables and set to empty values
	$pword = $email = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["pword"])) {
		echo "<script type = 'text/javascript'>alert('Password is  required');</script>"; 
	  } else {
		  if (strlen($_POST["pword"])<8) {
		  echo "<script type = 'text/javascript'>alert('Password should be at least 8 characters long!');</script>"; 
		} 
		else {
		$pword = test_input($_POST["pword"]);
		}
		// check if name only contains letters and whitespace
		
	  }
	  if (empty($_POST["email"])) {
		echo "<script type = 'text/javascript'>alert('Email is required');</script>";
	  } 
	  else {
		// check if e-mail address is well-formed
		if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		   echo "<script type = 'text/javascript'>alert('Invalid email format!');</script>"; 
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
		echo "<script type = 'text/javascript'>alert('User logged in!');</script>";
	  $pword = $email = "";
	}
?>

	