<?php
	@session_start(); 

// define variables and set to empty values		
	$pword = $email = $name = $phone = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
		clear_input();
	}

	function clear_input () {
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
	  
	
	$conn = mysqli_connect('localhost:3308', 'root', '', 'hotelmanagement' );
	$sql = "SELECT * FROM customer WHERE email = '$email' and password = '$pword'";
	  $result = mysqli_query($conn,$sql);
	  
	  $sql1 = "SELECT * FROM admin WHERE email = '$email' and password = '$pword'";
	  $result1 = mysqli_query($conn,$sql1);

	  $sql2 = "SELECT * FROM employee WHERE email = '$email' and password = '$pword'";
	  $result2 = mysqli_query($conn,$sql2);
 
	  if(mysqli_num_rows($result1)==1)
	  {
		$row = $result1->fetch_array();
		$_SESSION['emailA'] = $row['Email'];
		echo "<script type = 'text/javascript'>alert('Admin logged in successfully!');
		window.location='AdminDisplayPage.php';</script>";
		$pword = $email = "";
	  }

	  else if(mysqli_num_rows($result) == 1)
	  {
		$row = $result->fetch_array();
		$_SESSION['email'] = $row['Email'];
		$_SESSION['name'] = $row['Name'];
		$_SESSION['phone'] = $row['ContactNo'];	
		echo "<script type = 'text/javascript'>alert('Customer logged in successfully!');
		window.location='CustomerDisplayPage.php';</script>";
		$pword = $email = "";
	  }
      else if(mysqli_num_rows($result2) == 1)
	  {
		$row = $result2->fetch_array();
		$_SESSION['emailE'] = $row['Email'];
		echo "<script type = 'text/javascript'>alert('Employee logged in successfully!');
		window.location='EmployeeDisplayPage.php';</script>";
		$pword = $email = "";
	  }
	  else
	  {
		echo "<script type = 'text/javascript'>alert('Please enter correct credentials');
		window.location='LoginPage.php';</script>";
		$pword = $email = "";
	  }

	$pword = $email = "";
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

	