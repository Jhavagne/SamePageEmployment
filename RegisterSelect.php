<?php

  include 'header.php';
?>
  <form action="includes/login.inc.php" method="POST">
    <input type="text" placeholder="uid" name="uid"><br>
    <input type="password" placeholder="password" name="pwd"><br>
    <button type = "submit">LOGIN</button>
  </form>
<?php
  if(isset($_SESSION['ID'])) {
    echo $_SESSION['ID'];
  } else {
    echo "You are not logged in!";
  }
?>
<br><br><br>
  <form action="includes/Logout.inc.php">
  <button>LOG OUT</button>
  </form>


</body>
</html>