<?php
  
  session_start();
   
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
                window.location='CustomerDisplayPage.php';</script>";
            }
            if (empty($_POST["checkout3"])) {
                echo "<script type = 'text/javascript'>alert('Select a Check-out date');
                window.location='CustomerDisplayPage.php';</script>";
            }
            if (empty($_POST["people3"])) {
                echo "<script type = 'text/javascript'>alert('Enter Number of Guests');
                window.location='CustomerDisplayPage.php';</script>";
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
                echo "<h2>Four Seasons  International</h2>";
                echo "<h3>Booking Details:</h3>";
                if (isset($_SESSION['name']))
                    echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['name']."<br>";
                else
                    echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['nameSC']."<br>";
                if (isset($_SESSION['email']))
                    echo "Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['email']."<br>";
                else
                    echo "Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['emailSC']."<br>";
                if (isset($_SESSION['phone']))  
                    echo "Contact No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['phone']."<br>";
                else
                    echo "Contact No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['phoneSC']."<br>";
                echo "Regular Room:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3-Star<br>";
                echo "Check-in Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $tempin3";
                echo "<br>";
                echo "Check-out Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$tempout3";
                echo "<br>";
                echo "No. of Days:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $datediff";
                echo "<br>";
                echo "No. of Guests:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ";
                echo $_POST["people3"];
                echo "<br>";
                echo "Total Cost: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR $totalcost<br>"; 
                echo "Kindly go back and click on 'Book Now' to confirm your booking!";
            }
        }

        

    function calculate5 () {
        if (empty($_POST["checkin5"]))
            echo "<script type = 'text/javascript'>alert('Select a Check-in date');
            window.location='CustomerDisplayPage.php';</script>";
        if (empty($_POST["checkout5"]))
            echo "<script type = 'text/javascript'>alert('Select a Check-out date');
            window.location='CustomerDisplayPage.php';</script>";
        if (empty($_POST["people5"]))
            echo "<script type = 'text/javascript'>alert('Enter Number of Guests');
            window.location='CustomerDisplayPage.php';</script>";
        else {
            $tempin5 = $_POST["checkin5"];
            $tempout5 = $_POST["checkout5"];
            $checkin5 = strtotime($_POST["checkin5"]);
            $checkout5 = strtotime($_POST["checkout5"]);
            $date = $checkout5 - $checkin5;
            $datediff = number_format(round($date /(60 * 60 * 24)));
            if ($datediff == 0)
                $datediff = 1;
            $totalcost = $datediff*$_POST["people5"]*19400;
            echo "<h2>Four Seasons  International</h2>";
            echo "<h3>Booking Details:</h3>";
            if (isset($_SESSION['name']))
                echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['name']."<br>";
            else
                echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['nameSC']."<br>";
            if (isset($_SESSION['email']))
                echo "Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['email']."<br>";
            else
                echo "Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['emailSC']."<br>";
            if (isset($_SESSION['phone']))  
                echo "Contact No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['phone']."<br>";
            else
                echo "Contact No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['phoneSC']."<br>";
            echo "Luxury Room:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5-Star<br>";
            echo "Check-in Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $tempin5";
            echo "<br>";
            echo "Check-out Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$tempout5";
            echo "<br>";
            echo "No. of Days:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $datediff";
            echo "<br>";
            echo "No. of Guests:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ";
            echo $_POST["people5"];
            echo "<br>";
            echo "Total Cost: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspINR $totalcost<br>"; 
            echo "Kindly go back and click on 'Book Now' to confirm your booking!";
        }
    }

    function book3 () {
        /*SQL to add 3 star booking to DB*/
        $name = $email = $phone = "";
        $people = $_POST["people3"];
        $tempin3 = $_POST["checkin3"];
        $tempout3 = $_POST["checkout3"];
        $checkin3 = strtotime($_POST["checkin3"]);
        $checkout3 = strtotime($_POST["checkout3"]);
        $date = $checkout3 - $checkin3;
        $datediff = number_format(round($date /(60 * 60 * 24)));
        if ($datediff == 0)
            $datediff = 1;
        $totalcost = $datediff*$_POST["people3"]*9800;

        $conn = mysqli_connect('localhost:3308','root', '','hotelmanagement');
        if(isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['phone'])) {
            $name = $_SESSION['name'];
            $phone = $_SESSION['phone'];
            $email = $_SESSION['email'];
            $sql = "INSERT INTO booking (name, email, contactno, checkin, checkout, roomtype, days, people, cost) VALUES ( '$name', '$email', '$phone', '$tempin3', '$tempout3', 'Regular - 3 Star', '$datediff', '$people', '$totalcost')";
        }
        else {
            $name = $_SESSION['nameSC'];
            $phone = $_SESSION['phoneSC'];
            $email = $_SESSION['emailSC'];
            $sql = "INSERT INTO booking (name, email, contactno, checkin, checkout, roomtype, days, people, cost) VALUES ('$name', '$email', '$phone', '$tempin3', '$tempout3', 'Regular - 3 Star', '$datediff', '$people', '$totalcost')";
        }
        if (mysqli_query($conn, $sql)) {
            echo "<script type = 'text/javascript'>alert('Booking confirmed! Payment will be processed at the Hotel. Thank you for choosing Four Seasons!');
            window.location='CustomerDisplayPage.php';</script>";
            $name = $phone = $email = "";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    function book5 () {
        /*SQL to add 5 star booking to DB*/
        $name = $email = $phone = "";
        $people = $_POST["people5"];
        $tempin5 = $_POST["checkin5"];
        $tempout5 = $_POST["checkout5"];
        $checkin5 = strtotime($_POST["checkin5"]);
        $checkout5 = strtotime($_POST["checkout5"]);
        $date = $checkout5 - $checkin5;
        $datediff = number_format(round($date /(60 * 60 * 24)));
        if ($datediff == 0)
            $datediff = 1;
        $totalcost = $datediff*$_POST["people5"]*19400;

        $conn = mysqli_connect('localhost:3308','root', '','hotelmanagement');
        if(isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['phone'])) {
            $name = $_SESSION['name'];
            $phone = $_SESSION['phone'];
            $email = $_SESSION['email'];
            $sql = "INSERT INTO booking (name, email, contactno, checkin, checkout, roomtype, days, people, cost) VALUES ('$name', '$email', '$phone', '$tempin5', '$tempout5', 'Luxury - 5 Star', '$datediff', '$people', '$totalcost')";
        }
        else {
            $name = $_SESSION['nameSC'];
            $phone = $_SESSION['phoneSC'];
            $email = $_SESSION['emailSC'];
            $sql = "INSERT INTO booking (name, email, contactno, checkin, checkout, roomtype, days, people, cost) VALUES ('$name', '$email', '$phone', '$tempin5', '$tempout5', 'Luxury - 5 Star', '$datediff', '$people', '$totalcost')";
        }
        if (mysqli_query($conn, $sql)) {
            echo "<script type = 'text/javascript'>alert('Booking confirmed! Payment will be processed at the Hotel. Thank you for choosing Four Seasons!');
            window.location='CustomerDisplayPage.php';</script>";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }   
?>