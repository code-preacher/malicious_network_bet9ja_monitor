<?php
session_start();
error_reporting(0);
include("db/config.php");
if(isset($_POST['submit']))
{
$uname=Cleanse(mysqli_real_escape_string($con,$_POST['username']));
$pass=Cleanse(mysqli_real_escape_string($con,$_POST['password']));
	
	
	#staff
$ret=mysqli_query($con,"SELECT cashier_id,fullname,password FROM staff WHERE cashier_id='$uname' and password='$pass'");
$num=mysqli_fetch_array($ret);

if($num>0)
{
$extra="staff/dashboard.php";//
$_SESSION['login']=$num['fullname'];
$_SESSION['id']=$num['cashier_id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$dt=date("d/m/y \@ g:i A");
mysqli_query($con,"update staff_log set userip='$uip',status='$status',login_time='$dt' where cashier_id='".$_SESSION['id']."' ");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else{

	$_SESSION['errmsg']="Invalid credentials, please check inputs and try again";
	header("location:user-login.php");
}

#manager
$ret2=mysqli_query($con,"SELECT cashier_id,fullname,password FROM manager WHERE cashier_id='$uname' and password='$pass'");
$num2=mysqli_fetch_array($ret2);

if($num2>0)
{
$extra="manager/dashboard.php";//
$_SESSION['login']=$num2['fullname'];
$_SESSION['id']=$num2['cashier_id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$dt=date("d/m/y \@ g:i A");
mysqli_query($con,"update manager_log set userip='$uip',status='$status',login_time='$dt' where cashier_id='".$_SESSION['id']."' ");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else{

	$_SESSION['errmsg']="Invalid credentials, please check inputs and try again";
	header("location:user-login.php");
}

#admin
$ret3=mysqli_query($con,"SELECT * FROM admin WHERE username='$uname' and password='$pass'");
$num3=mysqli_fetch_array($ret3);


if($num3>0)
{
$extra="admin/dashboard.php";//
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num3['username'];
header("location:http://$host$uri/$extra");
exit();
}
else{

	$_SESSION['errmsg']="Invalid credentials, please check inputs and try again";
	header("location:user-login.php");
}

}


function Cleanse($Data)
{
$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
$Data = htmlentities($Data, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
$Data = stripslashes($Data); /** Add Strip Slashes Protection */
return $Data;
}
?>

