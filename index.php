<?php 
session_start();
if (isset($_SESSION['admin'])){
 	if($_SESSION['admin'] == true){
 		$admin = 1;
 	}else {$admin = 0;}
}
require("config.php");
require("get_faucets.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	
	<title><?php echo $cfg_site_title?></title> <!--Your Tile -->
	
	<meta property="og:url"                content="<?php echo $cfg_site_url;?>" /> <!--your domain-->
	<meta property="og:title"              content="<?php echo $cfg_meta_title;?>" /> <!--Your Tile -->
	<meta property="og:description"        content="<?php echo $cfg_meta_description;?>" /> <!--description-->
	<meta property="og:image"              content="<?php echo $cfg_meta_fb_image;?>" /> <!--Image that will show on facebook-->
	<meta name="description" content="<?php echo $cfg_seo_description;?>"> <!--description for search engines-->
	<meta name="keywords" content="<?php echo $cfg_seo_keywords;?>"> <!--keywords for search engines-->
		
	<link href="favicon.ico" rel="icon" type="image/x-icon" />	
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">
		
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/7002d3875b.js"></script>
	<script src="js/tt-rotator.js"></script>
</head>

<body>
	<div id="header_div">
		<?php include("header.php");?>
	</div>
	<div id="faucet_info_div">
		<?php include("faucet_info.php");?>
	</div>
	<div id="faucet_frame">
		<iframe id="fm" name="fm" style="position:fixed;width:100%;height:75%;" frameborder="0" src="2.php" sandbox="allow-forms allow-popups allow-pointer-lock allow-same-origin allow-scripts"></iframe>
	</div>

</body>

</html>