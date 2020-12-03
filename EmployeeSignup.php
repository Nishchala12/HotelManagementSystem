<?php
// define variables and set to empty values
	$pword = $email = $name = $phone = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["esignup"])) {
		clear_input();
	}
	function clear_input() {
	  if (empty($_POST["pword"])) {
		header("Location: EmployeeSignupPage.php?error=password is required");
	    exit();
	  } 
	  else {
		  if (strlen($_POST["pword"])<8) {
			header("Location: EmployeeSignupPage.php?error=Password should be at least 8 characters long!");
			exit();
		}
		else {
		$pword = test_input($_POST["pword"]);
		}
	  }
	  if (empty($_POST["email"])) {
		header("Location: EmployeeSignupPage.php?error=Email is required!");
		exit();
	  } 
	  else {
		// check if e-mail address is well-formed
		if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			header("Location: EmployeeSignupPage.php?error=Invalid email format!");
		exit();
		}
		else {
			$email = test_input($_POST["email"]);
		}
	  }
	  if (empty($_POST["name"])) {
		header("Location: EmployeeSignupPage.php?error=Name is required!");
		exit();
	  } 
	  else {
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["name"])) {
			header("Location: EmployeeSignupPage.php?error=Only letters and whitespace allowed!");
		exit();
		}
		else {
		  $name = test_input($_POST["name"]);
		}
	  }
	  if (empty($_POST["phone"])) {
		header("Location: EmployeeSignupPage.php?error=Contact No. is required!");
		exit();
	  }
	  else{
		  if(preg_match('/[0-9]{10}/',$_POST["phone"]) && strlen($_POST["phone"])==10) {
			  $phone = test_input($_POST["phone"]);
		  }
		  else {
			header("Location: EmployeeSignupPage.php?error=Contact No. should contain ten digit and numbers only");
			exit();
		  }
	  }
	  $conn = mysqli_connect('localhost:3308','root', '','hotelmanagement');
	  $sql = "INSERT INTO employee (name, email, password, contactno) VALUES ('$name', '$email', '$pword', '$phone')";

    if (mysqli_query($conn, $sql)) {
		echo "<script type = 'text/javascript'>alert('Employee signed up successfully!');
		window.location='EmployeePage.html';</script>";
		$pword = $email = $name = $phone = "";
	} 
	else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

	