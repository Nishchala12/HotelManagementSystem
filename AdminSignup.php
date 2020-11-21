
<?php
// define variables and set to empty values
	$pword = $email = $name = $phone = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["pword"])) {
		echo "<script type = 'text/javascript'>alert('Password is  required');</script>"; 
	  } 
	  else {
		  if (strlen($_POST["pword"])<8) {
		  echo "<script type = 'text/javascript'>alert('Password should be at least 8 characters long!');</script>"; 
		}
		else {
		$pword = test_input($_POST["pword"]);
		}
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
	  if (empty($_POST["name"])) {
		echo "<script type = 'text/javascript'>alert('Name is required');</script>";
	  } 
	  else {
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		  echo "<script type = 'text/javascript'>alert('Only letters and whitespace allowed!');</script>";
		}
		else {
		  $name = test_input($_POST["name"]);
		}
	  }
	  if (empty($_POST["phone"])) {
		echo "<script type = 'text/javascript'>alert('Contact No. is required');</script>";
	  }
	  else{
		  if(preg_match('/[0-9]{10}/',$_POST["phone"]) && strlen($_POST["phone"])==10) {
			  $phone = test_input($_POST["phone"]);
		  }
		  else {
			  echo "<script type = 'text/javascript'>alert('Contact No. should contain ten digit and numbers only!');</script>";
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
	  echo "<script type = 'text/javascript'>alert('User signed up!');</script>";
	  $pword = $email = "";
	}
?>

	