<?php
	if (isset($_GET["email"]) && isset($GET["token"])){
		 include 'connectSamePageDB.php';
		  $email = mysqli_real_escape_string ( $conn , $_GET["email"]);
		  $token = mysqli_real_escape_string ( $conn , $_GET["token"]);

		 $sql = "SELECT ID FROM members WHERE email = '$email' AND token = '$token'";
		 $result = mysqli_query($conn, $sql);
		 if(mysqli_fetch_assoc($result)){
		 	echo "
		 	<form action = 'resetPassword.php' method = 'post'>
			<input type = 'password' name = 'pw1' placeholder = 'New Password'><br>
			<input type = 'password' name = 'pw2' value = 'Confirm Password'><br>
			<input type = 'submit' name = 'submit' value = 'Confirm'><br>
			</form> ";
		 } else {
		 	echo "Please check your link!";
		 } 
	}else{
		header("Location: index.php");
}
?>