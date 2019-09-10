<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    session_start();
	$id = $_SESSION['user_id'];
	$firstname = $_POST['user_first'];
	$lastname = $_POST['user_last'];
	$gender = $_POST['user_gender'];
	$age = $_POST['user_age'];
	$about = $_POST['user_about'];
	$edu = $_POST['user_edu'];
	$skills = $_POST['user_skills'];
	$contact = $_POST['user_contact'];

	$sql = "INSERT INTO registered_user_data (user_first, user_last, user_gender, user_age, user_about, user_edu, user_skills, user_contact)
	VALUES ('$firstname','$lastname', '$gender', '$age', '$about', '$edu', '$skills', '$contact');";

	if (mysqli_query($conn, $sql)) {
	    header("Location: log in.php");
	} else {
	    header("Location: signup.php?servererror");
	}

	mysqli_close($conn);

?>