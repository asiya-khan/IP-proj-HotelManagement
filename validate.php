<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'sogo');

// $name = $_POST['user'];
// $pass = $_POST['password'];
 $username = $_POST['uname'];
 $password = $_POST['pwd'];


$q = " select * from login where uname = '$username' && pwd = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['uname'] = $username;
	header('location:bill.php');


}else{

	echo "unsuccessful";
	header('location:login.html');
}



?>