<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password, "athul");

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


	$sql = "SELECT name FROM colleges";
	$result = $conn->query($sql);

	$names = array();
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	array_push($names, $row["name"]);
	    }
	} else {
	    echo "0 results";
	}

	$conn->close();



	// $names = array('ivin', 'sam', 'athul');	
	include 'templates/home.html';
	
?>