<?php 
require("config.php");
$table = "";
$faucet_name = "";
$faucet_timer = "";
$direct_payout = "";
$frames = "";
$pop_ups = "";
$shortlink_req = "";
$last_verified_date = "";
$admin_link = "";
$ref_link = "";
$faucetArray = array();

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
}else if ($currency == "DASH"){
	$table = "dashcoin_faucets";
}else if ($currency == "XPM"){
	$table = "primecoin_faucets";
}else if ($currency == "BCH"){
	$table = "bitcoincash_faucets";
}else if ($currency == "BTX"){
	$table = "bitcore_faucets";
}else if ($currency == "BLK"){
	$table = "blackcoin_faucets";
}else if ($currency == "PPC"){
	$table = "peercoin_faucets";
}


$query = "SELECT * from ".$table." ORDER BY last_verified_date DESC, CASE 
WHEN `empty_disabled` = 1 THEN 4
WHEN (`shortlink_req`= 1 AND `pop_ups`= 1) THEN 3 
WHEN `shortlink_req`= 1 THEN 2 
WHEN `pop_ups`= 1 THEN 1 
END ASC";
$result = $mysqli->query($query);
while ($row = $result->fetch_array()){
	$faucet_name = $row['faucet_name'];
	$timer = $row['faucet_timer'];
	$direct_payout = $row['direct_payout'];
	$frames = $row['frames'];
	$pop_ups = $row['pop_ups'];
	$shortlink_req = $row['shortlink_req'];
	$last_verified_date = $row['last_verified_date'];
	$admin_link = $row['admin_link'];
	$ref_link = $row['ref_link'];
	$disabled = $row['empty_disabled'];
	$faucet = array(
		'faucet_name' =>$faucet_name,
		'timer' =>$timer,
		'direct_payout' =>$direct_payout,
		'frames' => $frames, 
		'pop_ups' => $pop_ups, 
		'shortlink_req' => $shortlink_req, 
		'last_verified_date' => $last_verified_date, 
		'admin_link' => $admin_link,
		'ref_link'=> $ref_link
	);
	array_push($faucetArray, $faucet);

}

?>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<style>
.table {
	background-color: #2B3E50 !important;
	color: #FFF;

}
tbody td{
background-color: #2B3E50 !important;
}
tbody tr.odd td{
background-color: #4e5d6c !important;
}




</style>




<script>
$(document).ready(function() {
    var table = $('#listTable').DataTable( {
        responsive: true
       
        
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>

<table id="listTable" class="table display compact table-bordered table-hover" style="width:100%">
<thead>
<tr>
<td><strong>Faucet Name</strong></td>
<td><strong>Timer</strong></td>
<td><strong>Direct payout or Withdrawal</strong></td>
<td><strong>Annoying or Excessive Popup Behavior</strong></td>
<td><strong>Shortlink Required</strong></td>
<td><strong>Link</strong></td>
</tr>
</thead>
<tbody>
<?php foreach($faucetArray as $faucetToDisplay){?>
	<tr>
		<td><?php echo $faucetToDisplay['faucet_name'];?></td>
		<td><?php echo $faucetToDisplay['timer'];?></td>
		<td><?php if ($faucetToDisplay['direct_payout'] == 1){
			echo "Direct Payout";
		}else{echo "Withdrawl Required";}?></td>
		<td><?php if($faucetToDisplay['pop_ups']){
			echo "Yes";
		} else{echo "No";}?></td>
		<td><?php if ($faucetToDisplay['shortlink_req']){
			echo "Yes";
		}else {echo "No";}?></td>		
		<?php if($admin){?>
			<td><a target=__blank href="<?php echo $faucetToDisplay['admin_link'];?>"><button type="button" class="btn btn-success">Go Claim!</button></a></td>
		<?php }else{ ?>
			<td><a target=__blank href="<?php echo $faucetToDisplay['ref_link'];?>"><button type="button" class="btn btn-success">Go Claim!</button></a></td>	
		<?php } ?>
	</tr>
<?php }?>

</tbody>
</table>