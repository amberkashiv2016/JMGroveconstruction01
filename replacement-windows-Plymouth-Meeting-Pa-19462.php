<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "windows"; ?>
<html>
<head>
	<title>Replacement window , New replacement windows, Vinyl windows Plymouth meeting Pa 19462
	</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css">
	<meta name="description" content="J. M. Grove - Install Replacement window , New replacement windows, Vinyl windows Plymouth meeting Pa 19462">
	<meta name="keywords" content="Replacement window , New replacement windows, Vinyl windows Plymouth meeting Pa 19462 ">
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
				$val0 = $_GET['type'];
				$val = $_GET['style'];
				$val2 = $_GET['color'];
				$val3 = $_GET['glass'];
				include("inc/windowheader.php");
				if ($val0 == "") {
					include("inc/window/windowtype-Plymouth-Meeting-Pa-19462.php");
				} elseif ($val == "") {
					include("inc/windowstyle.php");
					include("inc/didntfind.php");
				} elseif ($val2 == "") {
					include("inc/windowcolor.php");
					include("inc/didntfind.php");
				} elseif ($val3 == "") {
					include("inc/windowglass.php");
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

</body><script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7195628-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</html>