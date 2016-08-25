<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "sconjorg_login";
$dbuser		= "sconjorg_zmf";
$dbpass		= "sconj080815";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data

$fname = $_POST['fname'];
$lname = $_POST['lname'];

if($fname == '') {
	$errmsg_arr[] = 'You must enter your First Name';
	$errflag = true;
}
if($lname == '') {
	$errmsg_arr[] = 'You must enter your Last Name';
	$errflag = true;
}

if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: reg1.php");
	exit();
}
// query
$sql = "INSERT INTO users (username,password) VALUES (:sas,:asas)";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$fname,':asas'=>$lname));
header("location: index.php");

?>