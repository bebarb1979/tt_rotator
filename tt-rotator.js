$(document).ready(function(){
	 
	var $framesCookie = getCookie('frames');
	if ($framesCookie == 'true'){
		$("#framesFilter").prop('checked', true);	
	}else{
		$("#framesFilter").prop('checked', false);
	}
	var $directPayoutCookie = getCookie('directPayout');
	if ($directPayoutCookie == 'true'){
		$("#directPayoutFilter").prop('checked', true);	
	}else{
		$("#directPayoutFilter").prop('checked', false);
	}
	var $popupsCookie = getCookie('popups');
	if ($popupsCookie == 'true'){
		$("#popupsFilter").prop('checked', true);	
	}else{
		$("#popupsFilter").prop('checked', false);
	}
	var $shortlinkCookie = getCookie('shortlink');
	if ($shortlinkCookie == 'true'){
		$("#shortlinkFilter").prop('checked', true);	
	}else{
		$("#shortlinkFilter").prop('checked', false);
	}
	var $disabledCookie = getCookie('disabled');
	if ($disabledCookie == 'true'){
		$("#brokenFilter").prop('checked', true);	
	}else{
		$("#brokenFilter").prop('checked', false);
	}
	
	
	$("#updateFilters").click(function(){
		
		var $frames = $("#framesFilter").prop('checked');
		setCookie("frames", $frames, 365);
		var $directPayout = $("#directPayoutFilter").prop('checked');
		setCookie("directPayout", $directPayout, 365);
		var $popups =  $("#popupsFilter").prop('checked')
		setCookie("popups", $popups, 365);
		var $shortlink = $("#shortlinkFilter").prop('checked');
		setCookie("shortlink", $shortlink, 365);
		var $disabled = $("#brokenFilter").prop('checked');
		setCookie("disabled", $disabled, 365);
		location.reload();
	
	});
	
	$("#report_button").click(function(){
		var name = $("#faucet_name").val();
		$("#form_name").val(name);
	});	
	
	
});

function next(){
	x+=1;
	
	if (x>c-1){
 	 x=0;
  	}
	
	changeSrc();
	$("#counter").html(x);
}
function prev(){
x-=1;


if (x<=0)
  {
  x=c-1;
  }
$("#counter").html(x);
changeSrc();
}
function jumpTo() {
i=prompt("Enter a number to skip to that faucet.");
x=0;
while (i!=x) {
  if (x>c-2) {
  break;
  }
  x+=1;
}
changeSrc();
}

function newTab() {
	var win=window.open(document.getElementById("fm").src, '_blank');
	win.focus();
}
function changeSrc() {
	document.getElementById("fm").src=s[x];
	$("#send_button").html('<input type="submit" class="btn btn-success btn-send" value="Send message" onclick="reportMe()">');
	
	if(document.getElementById("faucet_name")){ 
		document.getElementById("faucet_name").value = faucetArray[x]['faucet_name'];
	}
	if (document.getElementById("faucet_timer")){
		document.getElementById("faucet_timer").value = faucetArray[x]['faucet_timer'];
	}
	if (faucetArray[x]['direct_payout'] == 1){
		
			document.getElementById("directPayout").checked = true;
			document.getElementById("payoutSpan").innerHTML = "Direct Payout";
			document.getElementById("payoutSpan").style.color ="#66FF00";
		
	}else{
		document.getElementById("directPayout").checked = false;
		document.getElementById("payoutSpan").innerHTML = "Withdrawal Required";
		document.getElementById("payoutSpan").style.color ="red";
	} 

	if (faucetArray[x]['last_verified_date']){
		//document.getElementById("verified_date").innerHTML = "Last Verified Date: "+faucetArray[x]['last_verified_date']+"&nbsp";
		if (document.getElementById("faucet_verified_date")){
			document.getElementById("faucet_verified_date").value = faucetArray[x]['last_verified_date'];
		}
	}else {
		document.getElementById("faucet_verified_date").innerHTML = "";
	}
	if(faucetArray[x]['captcha_type']){
		document.getElementById('faucet_captcha_type').value = faucetArray[x]['captcha_type'];
		if(faucetArray[x]['captcha_type'] =="Coinhive" || faucetArray[x]['captcha_type'] =="WebMinePool" ||
				faucetArray[x]['captcha_type'] =="WebMinePool/Captchame" ||
				faucetArray[x]['captcha_type'] =="Raincaptcha"){
			document.getElementById('faucet_captcha_type').style.backgroundColor ="red";
		}else if (faucetArray[x]['captcha_type'] =="ReCaptcha"){
			document.getElementById('faucet_captcha_type').style.backgroundColor ="orange";
			}else{
			document.getElementById('faucet_captcha_type').style.backgroundColor ="#66FF00";
			}		
	}else {
		document.getElementById('faucet_captcha_type').value = "COMING SOON";
		document.getElementById('faucet_captcha_type').style.backgroundColor ="#4E5D6C";
	}
	

	if(faucetArray[x]['frames'] == 0 ){
		document.getElementById("frames").checked = false;
		document.getElementById("framesSpan").style.color="red";
		document.getElementById("framesSpan").style.fontSize ="xx-large";
		document.getElementById("framesSpan").innerHTML = "CLick BLUE LINK button";
		
	} else{
		document.getElementById("frames").checked = true;
		document.getElementById("framesSpan").style.color="#66FF00";
		document.getElementById("framesSpan").style.fontSize = "inherit";
		document.getElementById("framesSpan").innerHTML = "Works in this rotator";
	}
	if(faucetArray[x]['pop_ups'] == 1){
		document.getElementById("popups").checked = true;
		document.getElementById("popUpsSpan").style.color ="orange"
	}else{
		document.getElementById("popups").checked = false;
		document.getElementById("popUpsSpan").style.color ="#999999"
	}
	if(faucetArray[x]['shortlink_req'] == 1){
		document.getElementById("shortlink").checked = true;
		document.getElementById("shortlinkSpan").style.color = "yellow";
		
	}else{
		document.getElementById("shortlink").checked = false;
		document.getElementById("shortlinkSpan").style.color = "#999999";
	}
	if(faucetArray[x]['disabled'] == 1){
		if(document.getElementById("admin_empty")){
			document.getElementById("admin_empty").checked = true;
			document.getElementById("admin_emptySpan").style.color = "red";
		}
		
	}else{
		if(document.getElementById("admin_empty")){
			document.getElementById("admin_empty").checked = false;
			document.getElementById("admin_emptySpan").style.color = "#66FF00";
		}
	}
	
	if(faucetArray[x]['admin_link']){
		if(document.getElementById('admin_link')){
			document.getElementById('admin_link').value = faucetArray[x]['admin_link'];
		}		
	}
	if(faucetArray[x]['ref_link']){
		if (document.getElementById('ref_link')){
			document.getElementById('ref_link').value = faucetArray[x]['ref_link'];
		}
		
	}
	
}
function updateMe() {
	
	var link = faucetArray[x]['ref_link'];
	var faucet_name = document.getElementById('faucet_name').value;
	var faucet_timer = document.getElementById('faucet_timer').value;
	var verified_date = document.getElementById('faucet_verified_date').value;
	var captcha_type = document.getElementById('faucet_captcha_type').value;
	var admin_link = document.getElementById('admin_link').value;
	var ref_link = document.getElementById('ref_link').value;
	var direct_payout;
	if (document.getElementById('directPayout').checked==true){
		direct_payout = 1;
	}else {direct_payout = 0;}
	var frames;
	if (document.getElementById('frames').checked==true){
		frames = 1;
	}else {frames = 0;}	
	var popups;
	if (document.getElementById('popups').checked==true){
		popups = 1;
	}else {popups = 0;}
	var shortlinks;
	if (document.getElementById('shortlink').checked==true){
		shortlinks = 1;
	}else {shortlinks = 0;}	
	var disabled;
	if(document.getElementById('admin_empty').checked==true){
		disabled = 1;
	}else {disabled = 0;}
		
	$.ajax({
		type: 'POST',
		url: null,
		data: {'link' : link ,
		'faucet_name' : faucet_name,
		'admin_link' : admin_link,
		'ref_link' : ref_link,
		'faucet_timer' : faucet_timer,
		'verified_date' : verified_date,
		'direct_payout' : direct_payout,
		'frames' : frames,
		'pop_ups' : popups,
		'shortlinks' : shortlinks,
		'captcha_type' : captcha_type,
		'disabled' : disabled},
		
		success: function(data){
			//alert(data);
			alert("Record Updated Successfully");
		}
	});
	
}

function deleteMe() {
	
	var link = faucetArray[x]['ref_link'];
	
		
	$.ajax({
		type: 'POST',
		url: null,
		data: {'deletelink' : link ,
		'delete' : true
		},
		
		success: function(data){
			//alert(data);
			alert("Record Deleted Successfully");
		}
	});
	
}

function reportMe(){
	
	var faucet_name = document.getElementById('faucet_name').value;
	var form_name = document.getElementById('form_name').value;
	if (document.getElementById("form_frames").checked){
		var frames = 1;
	}else {
		var frames = 0;
	}
	if (document.getElementById("form_directPayout").checked){
		var directPayout = 1;
	}else {
		var directPayout = 0;
	}
	if (document.getElementById("form_popups").checked){
		var popups = 1;
	}else {
		var popups = 0;
	}
	if (document.getElementById("form_shortlink").checked){
		var shortlink = 1;
	}else {
		var shortlink = 0;
	}
	if (document.getElementById("form_broken").checked){
		var broken = 1;
	}else {
		var broken = 0;
	}
	
		
	var form_message = document.getElementById('form_message').value;
	
	$("#send_button").html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
		
	$.ajax({
		type: 'POST',
		url: 'report.php',
		data: {'faucet_name' : faucet_name,
				'form_name': form_name,		
				'frames': frames,
				'directPayout' : directPayout,
				'popups': popups,
				'shortlink': shortlink,
				'broken': broken,
				'form_message' : form_message
				},				
		success: function(data){
			var response = JSON.parse(data);
			$("#send_button").html("<h2>"+response.message+"</h2>");
			$("#contact-form")[0].reset();		
		}		
	});	
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function logMeOut(){
	$.ajax({
		  url: 'logout.php',
		  success: function(data) {
		    
		    location.reload();
		  }
		});
	
}