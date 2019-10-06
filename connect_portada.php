<form action='' method='POST'>
<?php


if (isset($_POST['1'])) {
	$id = 1;
}
if (isset($_POST['2'])) {
	$id = 2;
}
if (isset($_POST['3'])) {
	$id = 3;
}
if (isset($_POST['4'])) {
	$id = 4;
}
/*$id1 = $_POST['1'];
$id2 = $_POST['2'];
$id3 = $_POST['3'];
$id4 = $_POST['4'];*/



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
	
	$result = mysqli_query($conn, "SELECT current_user_id FROM Currents") or die("Failed to query database".mysqli_error());
	$row = mysqli_fetch_array($result);
	$user_id = $row['current_user_id'];
	//El id de l'usuari amb mateix nom que el del index
	/*$result = mysqli_query($conn, "SELECT * FROM Activities WHERE activity_id = '$id'") or die("Failed to query database".mysqli_error());*/
	$sql = "INSERT INTO Registers (user_id,activity_id) VALUES ('$user_id','$id')";
}
	
if ($conn->query($sql)){
	include 'web_portada.html';
}
else{
	echo "Error: ". $sql ."<br>". $conn->error;
}

$conn->close();


			


?>