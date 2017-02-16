
<?php
session_start();
include 'connectSamePageDB.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM members WHERE password = '$uid' AND alias = '$pwd' ";
$result = mysqli_query($conn, $sql);
if(!$row = mysqli_fetch_assoc($result)) {
	echo"username of password is incorrect!";
} else {
	$_SESSION['ID'] = $row['ID'];
}

header("Location: RegisterSelect.php");
?>