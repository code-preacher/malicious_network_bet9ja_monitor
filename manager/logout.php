<?php
session_start();
include('include/config.php');
$_SESSION['login']=="";
#date_default_timezone_set('Asia/Kolkata');
#$ldate=date( 'd-m-Y h:i:s A', time () );
$date=date("d/m/y \@ g:i A");
mysqli_query($con,"UPDATE manager_log  SET logout_time = '$date',status='0' WHERE cashier_id = '".$_SESSION['id']."' ");
session_unset();
session_destroy();
$_SESSION['errmsg2']="You have successfully logged out";
?>
<script language="javascript">
document.location="../user-login.php";
</script>
