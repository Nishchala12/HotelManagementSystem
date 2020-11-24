<?php 
    $days = 5;
    $salary = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["calculate"])) {
        calculate();
    }
    function calculate () {
        $days = 5;
        $salary = $days*1200;
        echo "<h2>Four Seasons  International</h2>";
        echo "<h3>Employee Salary Details:</h3>";
        echo "Daily Wages: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR 1200<br>";
        echo "Working Days:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$days<br>";
        echo "Salary:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR $salary<br>";
    }
?>