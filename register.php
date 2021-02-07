<?php

session_start();
header('location:login.html');

$con = mysqli_connect('localhost','root');

if($con){
	echo"connection successful";
}
else{
	echo"connection failed";
}

mysqli_select_db($con,'sogo');

$fname = $_POST['fname'];
$uname = $_POST['uname'];
$mail = $_POST['email'];
$num = $_POST['pnum'];
$pwd = $_POST['pwd'];
$rpwd = $_POST['rpwd'];

$q = "select * from login where username = '$uname' && psw = '$pwd' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo" duplicate data ";
}
else
{
	$qy = "insert into register(fname,uname, email, pnum,pwd,rpwd) values('$fname', '$uname', '$mail','$num', '$pwd','$rpwd')";
	
	mysqli_query($con, $qy);
	$p="insert into login(uname,pwd) values ('$uname','$pwd')";
	mysqli_query($con, $p);
}




?>