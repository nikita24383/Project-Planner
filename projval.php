<?php

session_start();

$conn = mysqli_connect('localhost','root','root');
// (server_name,username,password)
mysqli_select_db($conn, 'project_planner');
// connection to the database Project_Planner 

$pname = trim($_POST['pname']);
$ppass = $_POST['ppass'];

$query = "select * from project_table where pname = '$pname' && ppass = '$ppass'";
//  uname and upass are column names of table user_table from database Project_Planner

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);

if($num >= 1){
	$_SESSION['username'] = $name;
	header('location:entries.php');
}else{
	// alert("Try again");
	header('location:home.php');
}

?>