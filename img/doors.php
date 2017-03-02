<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "doors"; ?>
<html>
<head>
	<title>Doors and Windows, Replacement Doors, Exterior Doors, Entry Door, Door Repair, Front Door, Glass Door </title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="J.M.Grove - The experts in Doors and Windows."/>
	<meta name="keywords" content=" Doors and Windows, Replacement Doors, Exterior Doors, Entry Door, Door Repair, Front Door, Glass Door, Door companies, Door contractors, Door installers, home doors.">
	<meta name="description" content="J.M. Grove Building Trust-Install Doors and Windows, Replacement Doors, Exterior Doors, Entry Door, Door Repair, Front Door, Glass Door, Door companies, Door contractors, Door installers, home doors."> 
	
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
				$val00 = $_GET['home'];
				$val0 = $_GET['type'];
				$val = $_GET['style'];
				$val1 = $_GET['color'];
				$val2 = $_GET['glass'];
				$val3 = $_GET['hardware'];
				$val4 = $_GET['accessories'];
				include("inc/doorheader.php");
				if ($val00 == "") {
					include("inc/doorhome.php");
					include("inc/fullcatalog.php");
				} elseif ($val0 == "") {
					include("inc/doortype.php");
					include("inc/fullcatalog.php");
				} elseif ($val == "") {
					include("inc/doorstyle.php");
					include("inc/fullcatalog.php");
				} elseif ($val1 == "") {
					include("inc/doorcolor.php");	
					include("inc/fullcatalog.php");
				} elseif ($val2 == "") {
					include("inc/doorglass.php");	
					include("inc/fullcatalog.php");
				} elseif ($val3 == "") {
					include("inc/doorhardware.php");	
					include("inc/fullcatalog.php");
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
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7195628-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</html>