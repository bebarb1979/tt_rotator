<?php 
session_start();
require("config.php");
if (isset($_COOKIE['frames'])){
	$frames_cookie = $_COOKIE['frames'];
}else{
	$frames_cookie = false; 
}
if (isset($_COOKIE['directPayout'])){
	$directPayout_cookie = $_COOKIE['directPayout'];
}else{
	$directPayout_cookie = false;
}
if (isset($_COOKIE['popups'])){
	$popups_cookie = $_COOKIE['popups'];
}else{
	$popups_cookie = false;
}
if (isset($_COOKIE['shortlink'])){
	$shortlink_cookie = $_COOKIE['shortlink'];
}else{
	$shortlink_cookie = false;
}
if (isset($_COOKIE['disabled'])){
	$disabled_cookie = $_COOKIE['disabled'];
}else{
	$disabled_cookie = true;
}
$faucet_count = 0;

if (isset ($_POST['link'])){
	$linkToSearch = $_POST['link'];
	//$faucet_name =  $_POST['faucet_name'];
	$faucet_name =  str_replace("'", "\'", $_POST['faucet_name']);
	
	$faucet_timer = $_POST['faucet_timer'];
	$direct_payout = $_POST['direct_payout'];
	$frames = $_POST['frames'];
	$popups = $_POST['pop_ups'];
	$shortlinks = $_POST['shortlinks'];
	$disabled = $_POST['disabled'];
	$last_verified = $_POST['verified_date'];
	$captcha_type = $_POST['captcha_type'];
	$admin_link = $_POST['admin_link'];
	$ref_link = $_POST['ref_link'];
	$table = getTable($currency);
	$query = "UPDATE `".$table."` SET 
	`faucet_name`='".$faucet_name."',
	`owner_name`='".$owner_name."',
	`faucet_timer` ='".$faucet_timer."', 
	`direct_payout` =".$direct_payout.",
	`admin_link` ='".$admin_link."',
	`ref_link` ='".$ref_link."',
	`frames` =".$frames.",
	`pop_ups` = ".$popups.",
	`shortlink_req` = ".$shortlinks.",
	`empty_disabled` = ".$disabled.",
	`captcha_type` = '".$captcha_type."',
	`last_verified_date`='".$last_verified."' 
	WHERE `ref_link`='".$linkToSearch."'";
	
	//echo $query;
	
	if  ($mysqli->query($query) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $mysqli->error;
	}
}
if (isset ($_POST['delete'])){
	$linkToSearch = $_POST['deletelink'];
	$table = getTable($currency);
	$query = "DELETE FROM `".$table."` WHERE
	`ref_link`='".$linkToSearch."'";

	//echo $query;

	if  ($mysqli->query($query) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $mysqli->error;
	}
}

function getTable($currency){
	$table = "";
	if ($currency == "BTC"){
		$table = "bitcoin_faucets";
	} else if ($currency == "ETH"){
		$table = "ethereum_faucets";
	}else if ($currency == "LTC"){
		$table = "litecoin_faucets";
	}else if ($currency == "POT"){
		$table = "potcoin_faucets";
	}else if ($currency == "DOGE"){
		$table = "dogecoin_faucets";
	}else if ($currency == "BCH"){
		$table = "bitcoincash_faucets";
	}else if ($currency == "BTX"){
		$table = "bitcore_faucets";
	}else if ($currency == "BLK"){
		$table = "blackcoin_faucets";
	}else if ($currency == "DASH"){
		$table = "dashcoin_faucets";
	}else if ($currency == "PPC"){
		$table = "peercoin_faucets";
	}else if ($currency == "XPM"){
		$table = "primecoin_faucets";
	}
	
	return $table;
}
$table = getTable($currency);
$frames = "";
$pop_ups = "";
$shortlink_req = "";
$last_verified_date = "";
$admin_link = "2.php";
$ref_link = "2.php";
$startingFaucet = array(
	$frames, 
	$pop_ups, 
	$shortlink_req, 
	$last_verified_date, 
	$admin_link,
	$ref_link
	);
$faucetArray = array($startingFaucet);
$linkArray = array($ref_link);

$query = "SELECT * from ".$table." ORDER BY CASE 
WHEN `empty_disabled` = 1 THEN 4
WHEN (`shortlink_req`= 1 AND `pop_ups`= 1) THEN 3 
WHEN `shortlink_req`= 1 THEN 2 
WHEN `pop_ups`= 1 THEN 1 
END ASC, 
last_verified_date DESC";
$result = $mysqli->query($query);
while ($row = $result->fetch_array()){
	$faucet_name = $row['faucet_name'];
	$faucet_timer = $row['faucet_timer'];
	$direct_payout = $row['direct_payout'];
	$frames = $row['frames'];
	$pop_ups = $row['pop_ups'];
	$shortlink_req = $row['shortlink_req'];
	$last_verified_date = $row['last_verified_date'];
	$admin_link = $row['admin_link'];
	$ref_link = $row['ref_link'];
	$disabled = $row['empty_disabled'];
	$captcha_type = $row['captcha_type'];
	$faucet = array(
		'faucet_name' => $faucet_name,
		'faucet_timer' => $faucet_timer,
		'direct_payout' => $direct_payout,
		'frames' => $frames, 
		'pop_ups' => $pop_ups, 
		'shortlink_req' => $shortlink_req, 
		'last_verified_date' => $last_verified_date, 
		'admin_link' => $admin_link,
		'ref_link'=> $ref_link,
		'captcha_type' =>$captcha_type,
		'disabled' => $disabled
	);
	
	if (($frames_cookie == "true") && ($frames == 0)){
		
		continue;
	
	}
	//echo "<h3>Faucet Name: ".$faucet_name. " Direct_payout: ".$direct_payout." DirectPayout Cookie: ".$directPayout_cookie. "<h3>";
	if ($directPayout_cookie == "true" && $direct_payout == 0){
		
		continue;
	}
	if($popups_cookie == "true" && $pop_ups == 1){
		
		continue;
	}
	if ($shortlink_cookie == "true" && $shortlink_req == 1){
		
		continue;
	}
	if($disabled_cookie == "true" && $disabled == 1){
		
		continue;
	}
	array_push($faucetArray, $faucet);
	$faucet_count++;
	if ($admin){
		array_push($linkArray, $admin_link);
	}else{
		array_push($linkArray, $ref_link);
		 
	}
			
}

$linkArray = json_encode($linkArray);
$faucetArray = json_encode($faucetArray);

?>

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">

<?php 
 echo "var s=".$linkArray.";";
if ($faucetArray){
	echo "var faucetArray=".$faucetArray.";";
}

?>
var adr,i,x=0,c=s.length;
var counter = 0;

</script>
