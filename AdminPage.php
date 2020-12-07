<?php
    $buttonNameStatus = "Update";
    $buttonStyleStatus = "showButton";
       
    $conn = mysqli_connect('localhost:3308','root', '','hotelmanagement');
    $sql = "SELECT Name, Email, ContactNo FROM employee";
    $name = $phone = $email = "";
    if ($result = mysqli_query($conn, $sql)) {
		if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
             
            }
          } else {
            echo "0 results";
          }
	} 
	else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    function searchEmployee () {
        if($buttonStyleStatus == "hideButton")
            $buttonStyleStatus = "showButton";
    }
    function update () {
        if($buttonNameStatus == "Update")
             $buttonNameStatus == "Save";

    }
?>

<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href = "AdminPage.css">
</head>

<script type="text/javascript">
    function searchEmployee(){
            document.getElementById('update').className = "showButton";
            document.getElementById('input1').className = "showInput1";
            document.getElementById('input2').className = "showInput2";
    }

</script>

<body>  
<div class = "bg-image"></div>
    <a href="LoginPage.php" class = "logout">Logout</a>
    <h2 class = "heading">Welcome Admin!</h2>
    <p class = "intro-text">
        Here are the list of staff currently employed. Attendance of the employees can be marked.
        Incase of deletion of employees, click on the 'Delete' button.
    </p>
    <div class = "column1">
      <input class = "search-bar" type = "text" placeholder="Enter Employee Email ID" name="search">
      <button  name = "search" type = "submit" class = "button1" onclick = "searchEmployee()">🔍</button>
      <div>
        <button id = "update" class = "hideButton" type = "submit" onclick = "update()"><?php echo htmlspecialchars($buttonNameStatus);?></button>
        <input id = "input1" class = "hideInput1" type = "text" value = "sauhdaiuvbudvb"/>
        <input id = "input2" class = "hideInput2" type = "number" value = 0/>

      </div>
    </div>
</body>
</html>


