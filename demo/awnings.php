<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "awnings"; ?>
<html>
<head>
	<title>Awning, retractable awnings,window awnings,replacement awnings </title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="Awning, retractable awnings,window awnings,replacement awnings "/>
<meta name="keywords" content=" Awning, retractable awnings,window awnings,replacement awnings "/>
</head>

<body>
<div align="center">
	<div id="shell">
		<?php  include("inc/header.php"); ?>	
		<div id="content">
			<?php include("inc/leftmenu.php"); ?>			
			<div id="content-right">
			
				<div style="width:100%;height:17px;float:left;overflow:hidden;"></div>
				<?php 
				$val0 = $_GET['style'];
				if ($val0 == "") {
					include("inc/awningstyle.php");
					include("inc/didntfind.php");
				} else {
					include("inc/buy.php");
				}
				?>
				<p style="padding-bottom:20px;">&nbsp;</p>
			</div>
			<?php include("inc/testimonials.php"); ?>	
		</div>
		<?php include("inc/footer.php"); ?>	
	</div>
</div>

</body>
<?php include_once("inc/analyticstracking.php") ?>
</html>