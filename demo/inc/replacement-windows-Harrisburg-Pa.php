<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "windows"; ?>
<html>
<head>
	<title> Replacement windows Lancaster Pa, replacement windows Harrisburg Pa, free estimates-quote</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css">
	<meta name="description" content="J. M. Grove Son, Inc.-Install replacement windows Lancaster Pa, replacement windows Harrisburg Pa, replacement windows Philadelphia Pa, windows Baltimore Md, replacement windows Harrisburg Pa, replacement windows York Pa, replacement, replacement windows Epharta Pa, replacement windows Chester Pa, replacement windows Hershey Pa, replacement windows Pottstown Pa, contractor, install.">
	<meta name="keywords" content=" Replacement windows, replacement window,double hung windows, double hung replacement windows, vinyl double hung windows, double hung wood windows, wood double hung windows, double hung vinyl windows, replacement windows, residential replacement windows, replacement windows, window, double hung windows, replacement window, window replacement, window replacementsFocused (Secondary) Keywords: replacement windows, replacement windows Harrisburg Pa, Harrisburg replacement windows, replacement windows aluminum Harrisburg,Harrisburg Pennsylvania replacement windows, replacement windows pa, vinyl replacement windows Harrisburg pa, double hung windows Harrisburg Pa, double hung replacement windows Harrisburg pa, vinyl double hung windows, Harrisburg pa, windows in Harrisburg area, windows Harrisburg, Harrisburg windows, replacement windows Harrisburg, glass windows, windows replacement glass, Harrisburg Pennsylvania doors windows, replacement windows Harrisburg, Philadelphia replacement windows, Philadelphia windows, northeast aluminum Philadelphia windows, combination windows, windows vinyl combination, picture windows Harrisburg, picture window Harrisburg, picture window Harrisburg Pennsylvania,picture windows Harrisburg Pa, picture window Harrisburg Pa,">



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
					include("inc/windowtypeHarrisburg.php");
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