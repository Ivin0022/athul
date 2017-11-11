<?php 

    require 'helpers.php';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "athul";

        // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

        // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }



    $sql = "SELECT name FROM colleges";
    $result = $conn->query($sql);

    $data = array();
    while(true == true) 
    {
        $row = $result->fetch_assoc();
        if($row == null) break;
        array_push($data, $row['name']);
    }

    $collegeData = array();
    foreach ($data as $value) {
        $sql = sprintf("SELECT * FROM ug WHERE clg_name='%s'", $value);
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $row = array_slice($row, 1);
        // array_push($collegeData, $row);
        $collegeData[$value] = $row;
    }    

    $conn->close();


    $ug_courses = array('BCA', 'BSC', 'BTech');
    $pg_courses = array('MCA', 'MSC', 'MTech');
    include 'templates/home.php';

?>