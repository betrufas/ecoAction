<?php

$host = "localhost";
$dbusername = "mamut";
$dbpassword = "Mamut_1234";
$dbname = "mamuthack";
$tbl_name = "Users";


//Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			

if (mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_errno() .') '
	. mysqli_connect_error());
}
else { //Si s'ha connectat be
				
	//El id de l'usuari amb mateix nom que el del index
	$result = mysqli_query($conn, "SELECT * FROM Users WHERE user_id = '$user_id'") or die("Failed to query database".mysqli_error());
	$row = mysqli_fetch_array($result);
	echo $row['user_name'];

	$conn->close();
}

?>