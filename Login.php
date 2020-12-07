<?php


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
		echo "<script type = 'text/javascript'>alert('Admin logged in successfully!');
		window.location='AdminPage.php';</script>";
	  }

	  else if(mysqli_num_rows($result) == 1)
	  {
		$row = $result->fetch_array();
		$name = $row['Name'];
		$email = $row['Email'];
		$phone = $row['ContactNo'];	
		echo "<script type = 'text/javascript'>alert('Customer logged in successfully!');
		window.location='CustomerPage.html';</script>";
	  }
      else if(mysqli_num_rows($result2) == 1)
	  {
		echo "<script type = 'text/javascript'>alert('Employee logged in successfully!');
		window.location='EmployeePage.html';</script>";
	  }
	  else
	  {
		echo "<script type = 'text/javascript'>alert('Please enter correct credentials');
		window.location='LoginPage.php';</script>";
	  }

	//$pword = $email = "";
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

	