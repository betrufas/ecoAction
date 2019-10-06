<?php


$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
	if (!empty($password)){

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
				$result = mysqli_query($conn, "SELECT * FROM Users WHERE user_name = '$username' AND user_password = '$password'") or die("Failed to query database".mysqli_error());
				$row = mysqli_fetch_array($result);
				if ($row['user_name'] == $username && $row['user_password'] == $password){
					$id = $row['user_id'];
					$result = mysqli_query($conn, "UPDATE Currents SET current_user_id = $id;");
					include 'web_portada.html';
				}
				else {
					echo "User or Password incorrect";
					die();
				}

				$conn->close();
			}

			
	}
	else{
		echo "Password should not be empty";
		die();
	}
}
else{
	echo "Username should not be empty";
	die();
}

?>