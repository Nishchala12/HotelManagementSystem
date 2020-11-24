<?php
    $checkin3 = $checkin5 = $checkout3 = $checkout5  = $tempin3 = $tempout3 = $tempin5 = $tempout5 = "";
    $datediff = $totalcost = $people5 = $people3 = 0;
    
        echo htmlspecialchars($_SERVER["PHP_SELF"]);
        if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["calculate3"])) {
            calculate3();
        }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["calculate5"])) {
            calculate5();
        }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["book3"])) {
            book3();
        }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["book5"])) {
            book5();
        }

        function calculate3() {
            if (empty($_POST["checkin3"])) {
                echo "<script type = 'text/javascript'>alert('Select a Check-in date');
                window.location='CustomerPage.html';</script>";
            }
            if (empty($_POST["checkout3"])) {
                echo "<script type = 'text/javascript'>alert('Select a Check-out date');
                window.location='CustomerPage.html';</script>";
            }
            if (empty($_POST["people3"])) {
                echo "<script type = 'text/javascript'>alert('Enter Number of Guests');
                window.location='CustomerPage.html';</script>";
            }
            else {
                $tempin3 = $_POST["checkin3"];
                $tempout3 = $_POST["checkout3"];
                $checkin3 = strtotime($_POST["checkin3"]);
                $checkout3 = strtotime($_POST["checkout3"]);
                $date = $checkout3 - $checkin3;
                $datediff = number_format(round($date /(60 * 60 * 24)));
                if ($datediff == 0)
                    $datediff = 1;
                $totalcost = $datediff*$_POST["people3"]*9800;
                echo "<h2>Four Seasons  International</h2><br>";
                echo "<h3>Booking Details:</h3>";
                echo "Regular Room (3-Star)<br>";
                echo "Check-in Date: $tempin3";
                echo "<br>";
                echo "Check-out Date: $tempout3";
                echo "<br>";
                echo "No. of Days: $datediff";
                echo "<br>";
                echo "No. of Guests: ";
                echo $_POST["people3"];
                echo "<br>";
                echo "TotalCost: INR $totalcost<br>"; 
                echo "Kindly go back and click on 'Book Now' to confirm your booking!";
            }
        }

    function calculate5 () {
        if (empty($_POST["checkin5"]))
            echo "<script type = 'text/javascript'>alert('Select a Check-in date');</script>";
        if (empty($_POST["checkout5"]))
            echo "<script type = 'text/javascript'>alert('Select a Check-out date');</script>";
        if (empty($_POST["people5"]))
            echo "<script type = 'text/javascript'>alert('Enter Number of Guests');</script>";
        else {
            $tempin5 = $_POST["checkin5"];
            $tempout5 = $_POST["checkout5"];
            $checkin3 = strtotime($_POST["checkin5"]);
            $checkout3 = strtotime($_POST["checkout5"]);
            $date = $checkout3 - $checkin3;
            $datediff = number_format(round($date /(60 * 60 * 24)));
            if ($datediff == 0)
                $datediff = 1;
            $totalcost = $datediff*$_POST["people5"]*19400;
            echo "<h2>Four Seasons  International</h2>";
            echo "<h3>Booking Details:</h3>";
            echo "Luxury Pool-Side Room (5-Star)<br>";
            echo "Check-in Date: $tempin5";
            echo "<br>";
            echo "Check-out Date: $tempout5";
            echo "<br>";
            echo "No. of Days: $datediff";
            echo "<br>";
            echo "No. of Guests: ";
            echo $_POST["people5"];
            echo "<br>";
            echo "Total Cost: INR $totalcost<br>"; 
            echo "Kindly go back and click on 'Book Now' to confirm your booking!";
        }
    }

    function book3 () {
        /*SQL to add 3 star booking to DB*/
        echo "<script type = 'text/javascript'>alert('Booking confirmed! Payment will be processed at the Hotel. Thank you for choosing Four Seasons!');
        window.location='CustomerPage.html';</script>";   
    }

    function book5 () {
        /*SQL to add 5 star booking to DB*/
        echo "<script type = 'text/javascript'>alert('Booking confirmed! Payment will be processed at the Hotel. Thank you for choosing Four Seasons!');
        window.location='CustomerPage.html';</script>";
    }
    
?>