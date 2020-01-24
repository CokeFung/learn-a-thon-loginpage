<?php
session_start();
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}
session_regenerate_id();
$_SESSION['loggedin'] = TRUE;
$_SESSION['name'] = $_POST['username'];

if ($_POST['username'] == 'user' && $_POST['password'] == 'user'){
	//echo 'Welcome ' . $_SESSION['name'] . '!';
	header('Location: home.php');
}
else{
	echo "incorrect username or password.";
}

?>