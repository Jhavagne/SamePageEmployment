<?php
  include 'header.php';
  include 'connectSamePageDB.php';
  $id = $_SESSION['ID'];
  $sql = "SELECT jsid FROM jobseekers WHERE uid = $id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
?>

<?php
  if(isset($_SESSION['ID'])) {
    echo "WELCOME TO THE JOB SEEKERS MEMBER AREA. QUIZ START WILL GO ON THIS PAGE<br>";
    echo "MY ALIAS IS -- ".$row['jsid'];
  } else {
    echo "<center>You are not logged in!</center>";
  }
?>
</body>
</html>