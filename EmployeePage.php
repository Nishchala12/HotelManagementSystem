<?php 
    $days = 5;
    $salary = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["calculate"])) {
        calculate();
    }
    function calculate () {
        $salary = 7*1200;
        echo "<h2>Four Seasons  International</h2>";
        echo "<h3>Employee Salary Details:</h3>";
        echo "Daily Wages: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR 1200<br>";
        echo "Working Days:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp7<br>";
        echo "Salary:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR $salary<br>";
        echo "Tips:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspApprox INR 500 - INR 1000 (Customer-Dependent)<br>";
        echo "Bonus: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR 10,000/year (Performance-Based)<br>";
        echo "Insurance: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp INR 10,000/month plus added benefits<br>";
    }
?>