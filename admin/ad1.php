<?php session_start(); ?>
<?php 
$id=$_GET['id'];
include('include/config.php');

if(isset($_GET['cancel']))
		  {
			  $ty=mysqli_query($con,"select id from appointment where id = '".$_GET['id']."' "); 
			  $yt=mysqli_fetch_assoc($ty);
			  $id=$yt['id'];
		
		          mysqli_query($con,"delete from appointment  where id = '$id'");
                  $_SESSION['msg']="Successfully Deleted !!";
		
		  }

 header("location:appointment-history.php");

?>