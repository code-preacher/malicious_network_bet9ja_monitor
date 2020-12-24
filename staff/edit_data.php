<?php
session_start();
//error_reporting(0);
$id=$_GET['id'];
include('include/config.php');
include('include/checklogin.php');
check_login();



date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

$_SESSION['msg1']=" ";
$_SESSION['msg2']=" ";
$_SESSION['msg3']=" ";
extract($_POST);
if(isset($_POST['submit'])){
$ck=mysqli_query($con,"select id from work_data where id='$id'");	
$kc=mysqli_fetch_assoc($ck);
$id=$kc['id'];

	$date=date("d/m/y \@ g:i A");

$q="update work_data set amount_given='$amountg',amount_made='$amountm',balance='$balance',feeding='$feeding',other_expenses='$expenses',expenses_detail='$ex_detail',virtual_bonus='$bonus' where id='$id'" ;
mysqli_query($con,$q);


if($q){
$_SESSION['msg2']="Work Data Updated Successfully !!!";
}
else
{
$_SESSION['msg1']="Work Data failed inserting !!!";
}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Staff  | Edit Work Data</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, Staff-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
<script type="text/javascript">
function valid()
{
if(document.chngpwd.amountg.value=="")
{
alert("Amount Given Field is Empty !!");
document.chngpwd.Betid.focus();
return false;
}
else if(document.chngpwd.amountm.value=="")
{
alert("Amount Made Field is Empty !!");
document.chngpwd.amountm.focus();
return false;
}
else if(document.chngpwd.balance.value=="")
{
alert("Amount Made Field is Empty !!");
document.chngpwd.balance.focus();
return false;
}
else if(document.chngpwd.feeding.value=="")
{
alert("feeding Field is Empty !!");
document.chngpwd.feeding.focus();
return false;
}
else if(document.chngpwd.expenses.value=="")
{
alert("Expenses Field is Empty !!");
document.chngpwd.expenses.focus();
return false;
}
else if(document.chngpwd.bonus.value=="")
{
alert("Virtual Bonus Field is Empty !!");
document.chngpwd.bonus.focus();
return false;
}
return true;
}
</script>

	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Staff | Edit Customer Work Data</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Staff</span>
									</li>
									<li class="active">
										<span> Edit Customer Work Data</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-10">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title"> Edit Customer Work Data</h5>
												</div>
												<div class="panel-body">
							
								<?php
								if(!empty($_SESSION['msg1'])){
								echo "<p style='color:red;'>".htmlentities($_SESSION['msg1'])."</p>";	
								}
								if(!empty($_SESSION['msg2'])){
								echo "<p style='color:green;'>".htmlentities($_SESSION['msg2'])."</p>";		
								}
								else{

								echo htmlentities($_SESSION['msg3']);	
								}
								
								?>	
<?php 
$sql=mysqli_query($con,"select * from work_data where id='$id'");
$data=mysqli_fetch_array($sql);
?>
													<form role="form" name="chngpwd" method="post" onSubmit="return valid();">
														<div class="form-group">
									<label for="exampleInputPassword1">
															Amount Given
															</label>
					<input type="number" name="amountg" value="<?php echo htmlentities($data['amount_given']);?>" class="form-control"  placeholder="Enter Amount Given" required="required">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
															Remaining Balance
															</label>
					<input type="number" name="balance" value="<?php echo htmlentities($data['balance']);?>" class="form-control"  placeholder="Enter Balance" required="required">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Virtual Bonus
															</label>
					<input type="number" name="bonus" class="form-control" value="<?php echo htmlentities($data['virtual_bonus']);?>" placeholder="Enter Virtual Bonus" required="required">
														</div>	
														
														<div class="form-group">
															<label for="exampleInputPassword1">
															Feeding
															</label>
					<input type="number" name="feeding" class="form-control" value="<?php echo htmlentities($data['feeding']);?>"  placeholder="Enter Feeding Amount" required="required">
														</div>

													
														
														
														<div class="form-group">
															<label for="exampleInputPassword1">
																Other Expenses
															</label>
					<input type="number" name="expenses" class="form-control" value="<?php echo htmlentities($data['other_expenses']);?>" placeholder="Enter Other Expenses if any" required="required">
														</div>
														

<div class="form-group">
															<label for="exampleInputPassword1">
																Other Expenses Details
															</label>
					<input type="text" name="ex_detail" class="form-control" value="<?php echo htmlentities($data['expenses_detail']);?>" placeholder="Enter Other Expenses Details if any" required="required">
														</div>

														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Made
															</label>
					<input type="number" name="amountm" class="form-control" value="<?php echo htmlentities($data['amount_made']);?>" placeholder="Enter Amount Made" required="required">
														</div>
														


														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									
								</div>
							</div>
						
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			<>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
