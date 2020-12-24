<?php
  session_start();
  $id=$_GET['id'];
  include('include/config.php');
$fl=mysqli_query($con,"select * from drugs where id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['id'];
if($fl){
mysqli_query($con,"delete from drugs where id='$us' ");
 $_SESSION['msg']="Drug have been deleted !!";

}
 header("location:drugs.php");
?>