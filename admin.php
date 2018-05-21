<?php 
session_start();
include 'config.php';
require("get_faucets.php");
function get_token($length) {
	$str = "";
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
}

if (isset($_POST['username']) and isset($_POST['password']) and !isset($_SESSION['data'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['secr'] = get_token(100); 
	

	if (md5($username . $password . $_SESSION['secr']) == md5($admin_username . $admin_password . $_SESSION['secr'])) {
		$_SESSION['data'] = md5($username . $password . $_SESSION['secr']);
		
	} else {
		$alert = 'Invalid Login';
		
		$_SESSION['secr'] = get_token(100); 
	}
}
if (isset($_SESSION['data'])) {
	if ($_SESSION['data'] == md5($admin_username . $admin_password . $_SESSION['secr'])) {
		$logged = true;
		
	} else {
		$_SESSION['secr'] = get_token(100); 
	}
}

if (isset($_POST['faucet_name'])) {
	$table = getTable($currency);
	$faucet_name =  $_POST['faucet_name'];
	$owner_name = $_POST['owner_name'];
	$faucet_timer = $_POST['faucet_timer'];
	if ($_POST['directPayout'] == "on"){
		$direct_payout = 1;
	}else {$direct_payout = 0;}
	if ($_POST['frames'] = "on"){
		$frames = 1;
	}else {$frames = 0;}
	
	if($_POST['popups'] == "on"){
		$popups = 1;
	}else{$popups = 0;}
	if($_POST['shortlink'] == "on"){
		$shortlinks = 1;
	}else{$shortlinks = 0;}
	
	if($_POST['admin_empty'] == "on"){
		$disabled = 1;
	}else {$disabled = 0;}
	
	$last_verified = $_POST['faucet_verified_date'];
	$captcha_type = $_POST['captcha_type'];
	$admin_link = $_POST['admin_link'];
	$ref_link = $_POST['ref_link'];
	
	
	$query = "INSERT INTO `".$table."` (faucet_name, owner_name, faucet_timer, direct_payout, admin_link,
			ref_link, frames, pop_ups, shortlink_req, empty_disabled, captcha_type, last_verified_date)
			VALUES('".$faucet_name."', '".$owner_name."', '".$faucet_timer."', ".$direct_payout.", '"
					.$admin_link."', '".$ref_link."', ".$frames.", ".$popups.", ".$shortlinks.", ".$disabled.", 
					'".$captcha_type."', '".$last_verified."')";

	
	if  ($mysqli->query($query) === TRUE) {
		echo "Record added successfully";
	} else {
		echo "Error updating record: " . $mysqli->error;
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin Area</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="template/css/countdown.css"> 
</head>
<body>
	<div class="container">
		<?php
		if ($logged == true) { 
			$_SESSION['admin'] = true;
			?>
			<form method="post">
				<div class="form-group row">
					<label for="faucet_name"  class="col-sm-1 col-form-label">Faucet Name</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="faucet_name" id="faucet_name" placeholder="Faucet Name">
					</div>
					<label for="owner_name"  class="col-sm-1 col-form-label">Faucet Name</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="owner_name" id="owner_name" placeholder="Owner Name">
					</div>
					<label for="faucet_timer"  class="col-sm-1 col-form-label">Faucet Timer</label>
					<div class="col-sm-2">
						<input type="text" class="form-control"  name = "faucet_timer" id="faucet_timer" placeholder="XX Minutes">
					</div>
					<label for="faucet_captcha_type"  class="col-sm-1 col-form-label">Captcha Type</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name = "faucet_captcha_type" id="faucet_captcha_type" placeholder="CAPTCHA">
					</div>
					<label for="faucet_verified_date"  class="col-sm-1 col-form-label">Last Verified Date</label>
			      	<div class="col-sm-2">		        
			        	<input type="text" class="form-control"  id="faucet_verified_date" placeholder="DATE">			      	
			      	</div>			      
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
		        		<label class="custom-control custom-checkbox">						
							<input class="custom-control-input" name="frames" id="frames" type="checkbox">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description" id="framesSpan">Works in this rotator</span>
						</label>
			      	</div>
			      	<div class="col-sm-2">
		        		<label class="custom-control custom-checkbox">						
							<input class="custom-control-input" name="directPayout" id="directPayout" type="checkbox">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description" id="payoutSpan">Direct Payout</span>						
						</label>
			      	</div>
			      	<div class="col-sm-2">
			        	<label class="custom-control custom-checkbox">						
							<input class="custom-control-input" name="popups" id="popups" type="checkbox">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description" id="popUpsSpan">Annoying or Excessive Pop-ups</span>						
						</label>
			      	</div>
			      	<div class="col-sm-2">
		        		<label class="custom-control custom-checkbox">						
							<input class="custom-control-input" name="shortlink" id="shortlink" type="checkbox">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description" id="shortlinkSpan">Shortlink visit Required</span>
						</label>
			      	</div>			      
			    	<div class="col-sm-2">
			        	<label class="custom-control custom-checkbox">	
							<input class="custom-control-input" name="admin_empty" id="admin_empty" type="checkbox">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description" id="admin_emptySpan">Empty/Disabled/Broken</span>						
						</label>
			      	</div>
	      		</div>
	      		<div class="form-group row">
	      			<label for="admin_link"  class="col-10 col-form-label">Admin Link</label>
					<div class="col-10">
						<input type="text" class="form-control" name="admin_link" id="admin_link" placeholder="http://somefaucet.com">
					</div>
	      		</div>
	      		<div class="form-group row">
	      			<label for="ref_link"  class="col-10 col-form-label">Referral Link</label>
					<div class="col-10">
						<input type="text" class="form-control" name="ref_link" id="ref_link" placeholder="http://somefaucet.com/?ref=xxxxx">
					</div>
	      		</div>	      		
			    <div class="form-group row">
			   		<input type="submit" class="btn btn-info" value="ADD" name="submit" id="submit"/>
		      		<a class ="btn btn-success" href="index.php">Rotator</a>
		      		<a class ="btn btn-danger" href="logout.php">Logout</a>
			    </div> 
		      
			
				
		
			</form>
			
			<?php //header('Location: '.$cfg_site_url);
	

		} else {  if (isset($alert)) {echo $alert;}
		?> 
		<form action="admin.php" method="post">
			<div class="form-group">
				<label for="username">Email address</label>
				<input type="text" name="username" class="form-control" id="username" placeholder="Enter username"> 
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
			</div> 
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<?php } ?>
	</div>
</body>
</html> 