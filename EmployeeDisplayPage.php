<?php

    session_start();
    if (isset($_SESSION['emailE']) || isset($_SESSION['emailSE'])) {

?>

<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href= "EmployeePage.css">
</head>
<body>  

<div class = "bg-image"></div>
    <p class = "welcome">Welcome <?php 
        if (isset($_SESSION['emailE']))
            echo $_SESSION['emailE'];
        else
            echo $_SESSION['emailSE'];?>!
    </p>
    <a href="Logout.php" class = "logout">Logout</a>
    <h2 class = "heading">Employee Details!</h2>
    <p class = "intro-text">
        Thank you for joining our ever-prepared staff team of Four Seasons International! 
        Click on 'View Time Table' to take a look at your weekly schedule and click on
        'Calculate Salary' to calculate your wages. If you have any queries/issues, kindly contact the Admin. 
    </p>
    <button class = "button1" name = "view" onClick = 'window.location.href = "TimeTable.html"'>View Time Table</button>
    <form method = "post" action = "EmployeePage.php">
        <button class = "button2" name = "calculate" onClick = "calculate()">View Salary Details</button>    
    </form>
</body>
</html>
<?php 
    } else {
        header("Location: Loginpage.php");
        exit();
    }
 ?>