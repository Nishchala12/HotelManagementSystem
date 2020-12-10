<?php
  @session_start();
  
  if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["employee"])) {
    viewEmployee();
  }
  elseif ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["customer"])) {
    viewCustomer();
  }
  elseif ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["booking"])) {
    viewBooking();
  }

  function viewEmployee () {
    $conn = mysqli_connect('localhost:3308','root', '','hotelmanagement');
    $sql = "SELECT Name, Email, ContactNo FROM employee";
    if ($result = mysqli_query($conn, $sql)) {
      if ($result->num_rows > 0) {
        echo "<h2>Four Seasons International</h2>";
        echo "<h3>Signed-up Employees:</h3>";
        while($row = $result->fetch_assoc()) {
          echo "-------------------------------------------<br>";
          echo "Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["Email"]."<br>";
          echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["Name"]."<br>";
          echo "Contact No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["ContactNo"]."<br>";
          echo "-------------------------------------------<br><br><br>";

        }
      } else {
          echo "<h2>Four Seasons International</h2>";
          echo "<h3>Signed-up Employees:</h3>";
          echo "0 results";
        }
    } 
	  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  function viewCustomer () {
    $conn = mysqli_connect('localhost:3308','root', '','hotelmanagement');
    $sql = "SELECT Name, Email, ContactNo FROM customer";
    if ($result = mysqli_query($conn, $sql)) {
      if ($result->num_rows > 0) {
        echo "<h2>Four Seasons International</h2>";
        echo "<h3>Signed-up Customers:</h3>";
        while($row = $result->fetch_assoc()) {
          echo "-------------------------------------------<br>";
          echo "Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["Email"]."<br>";
          echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["Name"]."<br>";
          echo "Contact No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["ContactNo"]."<br>";
          echo "-------------------------------------------<br><br><br>";
        }
      } else {
          echo "<h2>Four Seasons International</h2>";
          echo "<h3>Signed-up Customers:</h3>";
          echo "0 results";
        }
    } 
	  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  function viewBooking () {
    $conn = mysqli_connect('localhost:3308','root', '','hotelmanagement');
    $sql = "SELECT Name, Email, ContactNo, Checkin, Checkout, RoomType, Days, People, Cost FROM booking";
    if ($result = mysqli_query($conn, $sql)) {
      if ($result->num_rows > 0) {
        echo "<h2>Four Seasons International</h2>";
        echo "<h3>Booked Rooms:</h3>";
        while($row = $result->fetch_assoc()) {
          echo "-------------------------------------------<br>";
          echo "Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["Email"]."<br>";
          echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["Name"]."<br>";
          echo "Contact No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["ContactNo"]."<br>";
          echo "Check-in Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["Checkin"]."<br>";
          echo "Check-out Date:&nbsp&nbsp&nbsp&nbsp&nbsp".$row["Checkout"]."<br>";
          echo "Room Type:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["RoomType"]."<br>";
          echo "No. of Days:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["Days"]."<br>";
          echo "No. of Guests:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row["People"]."<br>"; 
          echo "Total Cost:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR ".$row["Cost"]."<br>"; 
          echo "-------------------------------------------<br><br><br>";
        }
      } else {
          echo "<h2>Four Seasons International</h2>";
          echo "<h3>Booked Rooms:</h3>";
          echo "0 results";
        }
    } 
	  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


  }



 
?>




