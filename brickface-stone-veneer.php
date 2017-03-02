<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "brickface"; ?>
<html>
<head>
	<title>Brickface &amp; Stone Veneer - </title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="Brickface &amp; Stone Veneer."/>
<meta name="keywords" content=" Brickface &amp; Stone Veneer"/>
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
				$val = $_GET['color'];
				$val2 = $_GET['joint'];
				$val3 = $_GET['accents'];
				include("inc/brickfaceheader.php");
				if ($val0 == "") {
					include("inc/brickfacestyle.php");
					include("inc/didntfind.php");
				} elseif ($val == "") {
					if ($val0 == "standard" || $val0 == "handcrafted" )
						include("inc/brickfacecolor.php");
					else 
						include("inc/brickfacestonecolor.php");
						
					include("inc/didntfind.php");
				} elseif ($val2 == "") {
					include("inc/brickfacestonejoint.php");
					include("inc/didntfind.php");
				} elseif ($val3 == "") {
					include("inc/brickfacestoneaccents.php");
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