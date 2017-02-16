<?php
  
  session_start();
?>
<head>
<meta charset="UTF-8">
<title>Registration</title>
<link rel = "stylesheet" type = "text/css" href="style.css">
</head>
<body>
<header>
<div class = 'wrapper'>
		<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<?php
  				if(isset($_SESSION['ID'])) {
    				  echo "<form action='includes/Logout.inc.php'>
  					  <button>LOG OUT</button>
 					  </form>";
  				} else {
    				echo "<form action='includes/login.inc.php' method='POST'>
    				<input type='text' placeholder='User Name' name='uname'>
    				<input type='password' placeholder='password' name='pwd'>
    				<button type = 'submit'>LOGIN</button>
  					</form><form action='ForgotPassword.php' method='POST'>
  					<button type = 'submit'>ForgotPasword</button></form>";
  				}

				?>
				<li><a href="signup.php">SIGN UP</a></li>
			</ul>
			</nav>
			</div>
</header>
</body>