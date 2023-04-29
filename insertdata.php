<?php
	
	$servername = "localhost"; 
    $username = "root";
    $password = "";        
    $dbname = "alldata";
	
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) 
	{
        die("Can't connect to the database" . $conn->connect_error);
    }
	else
	{
		//echo "Connected to the database!!!";
		
		date_default_timezone_set('Europe/Budapest');
		$d = date("Y-m-d");
		$t = date("H:i:s");

		
		$sensor = $_POST["Content"];


		
		$sql = "INSERT INTO sensorstt (status, date, time) VALUES ('".$sensor."', '".$d."', '".$t."')";

		if (mysqli_multi_query($conn, $sql)) 
		{
		    echo "Connected to Database!!!";
		} 
		else 
		{
		    echo "Error";
		}			
	}
	
	$conn->close();  

?>