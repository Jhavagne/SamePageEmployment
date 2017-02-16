
<?php
session_start();
include '../connectSamePageDB.php';
//get inputs
$first = $_POST['first'];
$last = $_POST['last'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$state = $_POST['state'];
$gender = $_POST['gender'];
$month = $_POST['DOBMonth'];
$day = $_POST['DOBDay'];
$year = $_POST['DOBYear'];
//check for blank fields
if(empty($first)){
	header("Location:../signup.php?error=empty");
	exit();
}
if(empty($last)){
	header("Location:../signup.php?error=empty");
	exit();
}
if(empty($address)){
	header("Location:../signup.php?error=empty");
	exit();
}
if(empty($city)){
	header("Location:../signup.php?error=empty");
	exit();
}
if(empty($zip)){
	header("Location:../signup.php?error=empty");
	exit();
}
if(empty($state)){
	header("Location:../signup.php?error=empty");
	exit();
}
if(empty($gender)){
	header("Location:../signup.php?error=empty");
	exit();
}
if(empty($month)){
	header("Location:../signup.php?error=empty");
	exit();
}
if(empty($day)){
	header("Location:../signup.php?error=empty");
	exit();
}
if(empty($year)){
	header("Location:../signup.php?error=empty");
	exit();
}
else{
		$dob = $month.'/'.$day. '/'.$year;
		$user = $_SESSION['ID'];
		$alias = $_SESSION['ID'] + rand(1000, 9999);

		$sql = "INSERT INTO jobseekers (jsid, uid,js_fname, js_lname, js_address, js_city, js_state, js_zip, js_dob, js_gender) 
		VALUES ($alias, $user,  '$first', '$last', '$address', '$city', '$state', $zip,'$dob', '$gender')";

		$result = mysqli_query($conn, $sql);
	if(!$result) {
		echo"<script>window.alert('Something went wrong!!')</scipt>";
	} else {
		$_SESSION['ID'] = $user;
		header("Location: ../seekerMembersArea.php");
	}
}
?>
