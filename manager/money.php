<?php
session_start();
//error_reporting(0);
$cashier_id=$_SESSION['id'];
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

$ck=mysqli_query($con,"select cashier_id,shop,fullname from manager where cashier_id='$cashier_id'");	
$kc=mysqli_fetch_assoc($ck);
$cid=$kc['cashier_id'];
$shop=$kc['shop'];
$fn=$kc['fullname'];
$total=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10;
	$date=date("d/m/y \@ g:i A");


$q="insert into money_collected(manager,shop,cashier_1,amount_1,cashier_2,amount_2,cashier_3,amount_3,cashier_4,amount_4,cashier_5,amount_5,cashier_6,amount_6,cashier_7,amount_7,cashier_8,amount_8,cashier_9,amount_9,cashier_10,amount_10,total,date)  values('$fn','$shop','$c1','$a1','$c2','$a2','$c3','$a3','$c4','$a4','$c5','$a5','$c6','$a6','$c7','$a7','$c8','$a8','$c9','$a9','$c10','$a10','$total','$date')" ;
mysqli_query($con,$q);

if($q){
$_SESSION['msg2']="Money inserted Successfully !!!";
}
else
{
$_SESSION['msg1']="Money failed inserting !!!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Manager  | Money From Cashier</title>
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
if(document.chngpwd.Betid1.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid1.focus();
return false;
}
else if(document.chngpwd.Betid2.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid2.focus();
return false;
}
else if(document.chngpwd.Betid3.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid3.focus();
return false;
}
else if(document.chngpwd.Betid4.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid4.focus();
return false;
}
else if(document.chngpwd.Betid5.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid5.focus();
return false;
}
else if(document.chngpwd.Betid6.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid6.focus();
return false;
}
else if(document.chngpwd.Betid7.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid7.focus();
return false;
}
else if(document.chngpwd.Betid8.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid8.focus();
return false;
}
else if(document.chngpwd.Betid9.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid9.focus();
return false;
}
else if(document.chngpwd.Betid10.value=="")
{
alert("Bet Id Field is Empty !!");
document.chngpwd.Betid10.focus();
return false;
}
else if(document.chngpwd.a1.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a1.focus();
return false;
}
else if(document.chngpwd.a2.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a2.focus();
return false;
}
else if(document.chngpwd.a3.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a3.focus();
return false;
}
else if(document.chngpwd.a4.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a4.focus();
return false;
}
else if(document.chngpwd.a5.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a5.focus();
return false;
}
else if(document.chngpwd.a6.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a6.focus();
return false;
}
else if(document.chngpwd.a7.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a7.focus();
return false;
}
else if(document.chngpwd.a8.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a8.focus();
return false;
}
else if(document.chngpwd.a9.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a9.focus();
return false;
}
else if(document.chngpwd.a10.value=="")
{
alert("Amount Field is Empty !!");
document.chngpwd.a10.focus();
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
									<h1 class="mainTitle">Manager | Money From Cashier</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Manager</span>
									</li>
									<li class="active">
										<span>Money From Cashier</span>
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
													<h5 class="panel-title">Money From Cashier 1</h5>
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
													<form role="form" name="chngpwd" method="post" onSubmit="return valid();">
															<?php

$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);

								 ?>
														<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c1" class="form-control">
								  <?php
						  while ($bid->fetch()) {
						  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
									<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a1" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>
														
<br/>
										<h5 class="panel-title">Money From Cashier 2</h5>
										<?php

$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);

								 ?>

<br/>
<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c2" class="form-control">
								  <?php
						  while ($bid->fetch()) {
						  		  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
								<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a2" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>
														
														

				<br/>
										<h5 class="panel-title">Money From Cashier 3</h5>
										<?php

$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);

								 ?>

<br/>
<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c3" class="form-control">
								  <?php
						  while ($bid->fetch()) {
								  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
								<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a3" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>



<br/>
										<h5 class="panel-title">Money From Cashier 4</h5>
										<?php

$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);

								 ?>

<br/>
<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c4" class="form-control">
								  <?php
						  while ($bid->fetch()) {
						  			  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
								<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a4" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>
														







<br/>
										<h5 class="panel-title">Money From Cashier 5</h5>
										<?php

$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);

								 ?>

<br/>
<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c5" class="form-control">
								  <?php
						  while ($bid->fetch()) {
						  			  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
								<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a5" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>
														





<br/>
										<h5 class="panel-title">Money From Cashier 6</h5>
										<?php

$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);

								 ?>

<br/>
<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c6" class="form-control">
								  <?php
						  while ($bid->fetch()) {
						  			  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
								<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a6" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>
														


<br/>
										<h5 class="panel-title">Money From Cashier 7</h5>
										<?php
$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);
								 ?>

<br/>
<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c7" class="form-control">
								  <?php
						  while ($bid->fetch()) {
						  			  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
								<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a7" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>
														

<br/>
										<h5 class="panel-title">Money From Cashier 8</h5>
<?php

$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);

								 ?>
<br/>
<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c8" class="form-control">
								  <?php
						  while ($bid->fetch()) {
						  			  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
								<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a8" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>
														


<br/>
										<h5 class="panel-title">Money From Cashier 9</h5>
										<?php

$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);

								 ?>

<br/>
<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c9" class="form-control">
								  <?php
						  while ($bid->fetch()) {
						  			  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
								<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a9" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>
														


<br/>
										<h5 class="panel-title">Money From Cashier 10</h5>
										<?php

$bid=$con->prepare("select cashier_id,fullname from staff order by id desc");
$bid->execute();
$bid->store_result();
$bid->bind_result($btid,$fn);

								 ?>

<br/>
<div class="form-group">
										<label for="exampleInputPassword1">
																Cashier Id
															</label>					
							<select name="c10" class="form-control">
								  <?php
						  while ($bid->fetch()) {
						  		  	echo '<option>'.$btid.'('.$fn.')'.'</option>';
							  }


						   ?>
								<option value="0">Null</option>
							</select>
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Amount Submitted
															</label>
					<input type="number" name="a10" class="form-control"  placeholder="Enter Amount Submitted" required="required">
														</div>
														

																								
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
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
