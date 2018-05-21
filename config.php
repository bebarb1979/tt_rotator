<?php error_reporting(0);

//You can have seperate info here if you want to run a dev and prod instance using different databases

/* Prod */

/* $dbHost = "localhost";
$dbUser = "tt_rotator";
$dbPW = "^FDd49&^^#0";
$dbName = "tt_rotater";  */


/*Local Dev */

$dbHost = "localhost";
$dbUser = "localrotator";
$dbPW = "password";
$dbName = "rotator";

$mysqli = mysqli_connect($dbHost, $dbUser, $dbPW, $dbName);
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

/*
 * SETUP THESE OPTIONS BEFORE RUNNING THE FIRST TIME *  
 */

// CHANGE THIS NOW!
$admin_username = "admin";
$admin_password= "password";
$admin_email="someguy@email.com";


/* Only ONE CURRENCY PER INSTALL. Multiple Installs can share the DB, but one directory per coin
 * 
 * Valid Values: 
 * BTC, ETH, LTC, POT, DOGE, BCH, BTX, BLK, DASH, PPC, XPM
 */

$currency = "BTC";

//Site Meta 
$cfg_site_title = "SITE TITLE";
$cfg_site_url = "http://yoursite.com/rotatorDirectory";
$cfg_meta_title = "YourSite.Com - Meta Title";
$cfg_meta_description = "YourSite.Com - Meta Description";
$cfg_meta_fb_image = "";
$cfg_seo_description = "";
$cfg_seo_keywords= "";


//H1 on the start page of the rotator 
$cfg_start_page_welcome_message = "Welcome to YourSite.com - Bitcoin Rotator"; 
//Ad space below Heading 
$cfg_start_page_top_ad = '<a href="https://minergate.com/a/70759765ea86251372c18c76"><img src="https://minergate.com/assets/promo/728x90-0.png"/></a>';
//Body text 
$cfg_start_page_body = "<h2>How to use this Rotator</h2>
		<p>Using the rotator is simple. Just click The next button above and you will be taken to a new page in this frame. <br>
		From there, just collect from the faucet like you would any other faucet, and then click the next button on the top right<br>
		to proceed to the next faucet.</p>
		<h3>Helpful Info </h3>
		<p>If you look just above the frame for each faucet you visit, you'll see a &quot;Last Verified Date.&quot; This is the most
		recent date in which we were able to successfully claim.</p>
		<p>If the site does not load in iframes, you will see red text instructing you to click the blue Link button. </p>
		<p>Likewise, if the site generates excessive pop ups, you will see a note in the same area. As well as any faucets
		that require you to visit a shortlink in order to claim </p>
		<h2 style ='color: red; font-weight: bold;'>NOTE</h2>
		<p>It is HIGHLY recommended that you disable any adblockers you have running. Most faucets will not work with adblock enabled. <br>
		This rotator was designed for desktop use and may not function properly with a screen width less than 1024 pixels in width.</p>";

?>