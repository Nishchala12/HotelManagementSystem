<?php

    session_start();
    if (isset($_SESSION['emailA']) || isset($_SESSION['emailSA'])) {

?>

<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href = "AdminPage.css">
</head>
<body>  
<div class = "bg-image"></div>
    <p class = "welcome">Welcome <?php 
        if (isset($_SESSION['emailA']))
            echo $_SESSION['emailA'];
        else
            echo $_SESSION['emailSA'];?>!
    </p>
    <a href="Logout.php" class = "logout">Logout</a>
    <h2 class = "heading">Admin Info!</h2>
    <p class = "intro-text">
        You have access to the entire Hotel Management System. Click on 'Employee Details' to obtain a list of staff currently
        employed. Click on 'Customer Details' to obtain the list of customers signed into this portal, and click on 
        'Booking Details' to view the list of rooms booked by customers.
    </p>
    <form method = "post" action = "AdminPage.php">
        <button class = "button1" name = "employee" onClick = "viewEmployee()">Employee Details</button>
        <button class = "button2" name = "customer" onClick = "viewCustomer()">Customer Details</button>
        <button class = "button3" name = "booking" onClick = "viewBooking()">Booking Details</button>    
    </form>
</body>
</html>
<?php 
    } else {
        header("Location: Loginpage.php");
        exit();
    }
 ?>