<?php

  include 'header.php';
?>

<?php
  if(isset($_SESSION['ID'])) {
    echo "HELLO USER";
  } else {
    echo "<center>You are not logged in!</center>";
  }
?>
</body>
</html>