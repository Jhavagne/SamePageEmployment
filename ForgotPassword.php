<?php

	if (isset($_POST["forgotPass"])){
		 include 'connectSamePageDB.php';
		 $email = mysqli_real_escape_string ( $conn , $_POST["email"]);
		 $sql = "SELECT ID FROM members WHERE email = '$email' ";
		 $result = mysqli_query($conn, $sql);
		 if(mysqli_fetch_assoc($result)){
			 	$str = "0123456789qwertyuiopasdfgjklzxcvbnm";
			 	$str = str_shuffle($str);
			 	$str = substr($str, 0, 10);
			 	$url =" http://http://localhost/samePageEmployment/resetPassword.php?token-$str&email=$email";


			 	//mail($email, "Same Page Employment - Reset Password", "To reset your password please visit the link: $url", "From:")

			 	 $sql = "UPDATE members SET token = $str WHERE email = '$email' ";
			 	 //change token????
			 	 echo "Please check your email!";
			 } else {
			 	echo "No valid email found";
			 }
		}

?>
<html>
<body>
<form action = "forgotPassword.php" method = "post">
	<input type = "text" name = "email" placeholder = "Email"><br>
	<input type = "submit" name = "forgotPass" value = "Request Password"><br>
</form>
</body>
</html>
