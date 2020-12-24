<?php
  session_start();

    include('include/config.php');
    include('include/checklogin.php');
check_login();

if(isset($_GET['cashier_id_m'])){

  $id=$_GET['cashier_id_m'];
  $fl=mysqli_query($con,"select cashier_id from manager where cashier_id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['cashier_id'];

  if($fl){
mysqli_query($con,"delete from manager where cashier_id='$us' ");
 $_SESSION['msg']="Manager have been deleted Successfully!!";

}
header("location:view_manager.php");
}

else if(isset($_GET['cashier_id_s'])){

	 $id=$_GET['cashier_id_s'];
  $fl=mysqli_query($con,"select cashier_id from staff where cashier_id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['cashier_id'];

  if($fl){
mysqli_query($con,"delete from staff where cashier_id='$us' ");
 $_SESSION['msg']="Staff have been deleted Successfully!!";

}
header("location:view_staff.php");
}

else if(isset($_GET['bet_id'])){

	 $id=$_GET['bet_id'];
  $fl=mysqli_query($con,"select bet_id from sport_win where bet_id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['bet_id'];

  if($fl){
mysqli_query($con,"delete from sport_win where bet_id='$us' ");
 $_SESSION['msg']="Sport Win Record have been deleted Successfully!!";

}
header("location:sport_win_history.php");
}
 else if(isset($_GET['bet_id_p'])){

	 $id=$_GET['bet_id_p'];
  $fl=mysqli_query($con,"select bet_id from payout where bet_id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['bet_id'];

  if($fl){
mysqli_query($con,"delete from payout where bet_id='$us' ");
 $_SESSION['msg']="PayOut Record have been deleted Successfully!!";

}
header("location:payout_history.php");
}
else if(isset($_GET['bet_id_b'])){

	 $id=$_GET['bet_id_b'];
  $fl=mysqli_query($con,"select bet_id from backups where bet_id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['bet_id'];

  if($fl){
mysqli_query($con,"delete from backups where bet_id='$us' ");
 $_SESSION['msg']="Backup Record have been deleted Successfully!!";

}
header("location:backup_history.php");
}
else if(isset($_GET['bet_id_u'])){

	 $id=$_GET['bet_id_u'];
  $fl=mysqli_query($con,"select bet_id from online_user where bet_id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['bet_id'];

  if($fl){
mysqli_query($con,"delete from online_user where bet_id='$us' ");
 $_SESSION['msg']="Online User Record have been deleted Successfully!!";

}
header("location:online_user_history.php");
}else if(isset($_GET['bet_id_mh'])){

	 $id=$_GET['bet_id_mh'];
  $fl=mysqli_query($con,"select id from money_collected where id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['id'];

  if($fl){
mysqli_query($con,"delete from money_collected where id='$us' ");
 $_SESSION['msg']="Money Collected Record have been deleted Successfully!!";

}
header("location:money_history.php");
}
else if(isset($_GET['bet_id_wd'])){

	 $id=$_GET['bet_id_wd'];
  $fl=mysqli_query($con,"select id from work_data where id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['id'];

  if($fl){
mysqli_query($con,"delete from work_data where id='$us' ");
 $_SESSION['msg']="Work Data Record have been deleted Successfully!!";

}
header("location:view_work_data.php");
}
else if(isset($_GET['bet_id_fin'])){

   $id=$_GET['bet_id_fin'];
  $fl=mysqli_query($con,"select id from finance where id='$id'");
$lf=mysqli_fetch_assoc($fl);
$us=$lf['id'];

  if($fl){
mysqli_query($con,"delete from finance where id='$us' ");
 $_SESSION['msg']="Finance Record have been deleted Successfully!!";

}
header("location:finance_history.php");
}
?>