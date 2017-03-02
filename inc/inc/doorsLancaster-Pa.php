<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "doors"; ?>
<html>
<head>
	<title>replacement Doors Lancaster Pa, replacement sliding door Harrisburg Pa, replacement entry doors Philadelphia Pa, sliding door Baltimore Md, front door York Pa, entry door Reading Pa, glass door York Pa, exterior door Ephrata Pa, exterior doors Chester Pa, Custom French door Hershey, Prehung hung doors Carlisle, installation information doors, door contractor Pottstown Pa, install Steel front door, door repair</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="J. M. Grove Son - The experts in home improvement services - including replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks and much more! Located in Lancaster, Pennsylvania - Offering Quality Service to York, Lancaster, Lebanon, Dauphin, Cumberland, Chester, Berks, Montgomery, Baltimore, Harford, Delaware, and Philadelphia."/>
	<meta name="keywords" content=" replacement door  Harrisburg Pa, replacement sliding Doors Lancaster Pa, sliding door  Baltimore Md,  replacement entry doors Philadelphia Pa, front door York Pa, entry door Reading Pa, glass door York Pa, exterior door Ephrata Pa, French door Hershey, exterior doors Chester Pa,  sliding doors Carlisle, installation information doors, door repair, contractor Pottstown Pa, install front door.">
	<meta name="description" content="J. M. Grove Son, Inc.-Install replacement door Baltimore Md, replacement sliding Doors Lancaster Pa, sliding door Harrisburg Pa, replacement entry doors    York Pa, front door York Pa, entry door Reading Pa, glass door Philadelphia Pa, exterior door Ephrata Pa, French door Chester Pa, exterior doors Hershey pa, sliding doors Pottstown Pa, installation information doors, door contractor Carlisle, install front door, door repair."> 
	
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
				include("inc/deckheader.php");
				if ($val00 == "") {
					include("inc/doorhomeLancaster.php");
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