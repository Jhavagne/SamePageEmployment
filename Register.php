<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration</title>
<link href="Layout.css" rel="stylesheet" type="text/css" />
<link href="Menu.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div id="Holder">
<div id="Header"></div>
<div id="NavBar">
	<nav>
		<ul>
			<li><a href = "./home.php">Home</a></li>
			<li><a href = "#">Login</a></li>
			<li><a href = "./Register.php">Register</a></li>
			<li><a href = "#">Forgot Password</a></li>
		</ul>
	</nav>
</div>
<div id="Content">
	<div id="PageHeading">
	<h1><center>Same Page Employment Registration</center></h1>
	</div>
	<div id="ContentLeft">
	<h2>message</h2> <br />
	<br />
	<h6>message</h6>
	</div>
	<div id="ContentRight" class = "fieldSet">
		<?php


if (isset($_POST['submit']))
{
 $email1 = $_POST['email1'];
 $email2 = $_POST['email2'];
 $pass1 = $_POST['pass1'];
 $pass2 = $_POST['pass2'];

 if($email1 == $email2 && $pass1 == $pass2)
 {
   //All good
   $name = mysql_escape_string($_POST['name']);
   $lname = mysql_escape_string($_POST['lname']);
   $uname = mysql_escape_string($_POST['uname']);
   $email1 = mysql_escape_string($_POST['email1']);
   $email2 = mysql_escape_string($_POST['email2']);
   $pass1 = mysql_escape_string($_POST['pass1']);
   $pass2 = mysql_escape_string($_POST['pass2']);

   $pass1 = md5($pass1);
   //Check if username is taken
   $check = mysql_query("SELECT * FROM users WHERE uname = '$uname'")or die(mysql_error());
   if (mysql_num_rows($check)>=1) echo "Username already taken";
   //Put everyting in DB
   else{
   mysql_query("INSERT INTO `users` (`id`, `name`, `lname`, `uname`, `email`, `pass`) VALUES (NULL, '$name', '$lname', '$uname', '$email1', '$pass1')") or die(mysql_error());
   echo "Registration Successful";
   }
 }
 else{
  echo "Sorry, your email's or your passwords do not match. <br />";
 }
 
}
else{
$form = <<<EOT
<form action="register.php" method="POST">
<fieldSet>
<p><label class="field" for="type"><span>*</span>Account Type:<br>
<input type="radio" name="radio" value="Radio 1">Job Seeker
<input type="radio" name="radio" value="Radio 2">Employer Contact 
<input type="radio" name="radio" value="Radio 3">Recruiter 
<p><label class="field" for="fname"><span>*</span>First Name: <input type="text" name="fname" /><p />
<p><label class="field" for="lname"><span>*</span>Last Name: <input type="text" name="lname" /><p />
<p><label class="field" for="address"><span>*</span>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="address" /><p />
<p><label class="field" for="city"><span>*</span>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="c" /><p />
<p><label class="field" for="username"><span>*</span>Username:&nbsp;&nbsp; <input type="text" name="uname" /><p />
<p><label class="field" for="email"><span>*</span>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email1" /><p />
<p><label class="field" for="email"><span>*</span>Confirm Email: <input type="text" name="email2" /><p />
<p><label class="field" for="pw"><span>*</span>Password:&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="pass1" /><p />
<p><label class="field" for="pw"><span>*</span>Confirm Password: <input type="password" name="pass2" /><p /><br>
<center><input type="submit" value="Register" name="submit" /></center>
</fieldSet>
</form>
EOT;

echo $form;

}

?>
</div>
<div id="Footer">
<h2><center>Contact us</center></h2>
</div>
</div>

</body>
</html>