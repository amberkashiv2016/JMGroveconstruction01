<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "windows"; ?>
<html>
<head>
	<title>Replacement Windows Glassboro NJ, Windows Home Glassboro NJ, vinyl replacement windows Glassboro NJ, Window Repair Installer,custom replacement windows Glassboro NJ, Replace Windows, Window service  </title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css">
	<meta name="description" content="J.M. Grove Building Trust in Glassboro NJ- Install replacement windows, Windows Home, Window Repair, Replace Windows, window company, window contractor,window business,Window service  ">
	<meta name="keywords" content=" Replacement Windows Glassboro NJ, Windows Home, Window Repair Glassboro NJ, Replace Windows, Vinyl windows Glassboro NJ, custom windows, replacement window, Windows for home, repair windows, replace windows, window company, window contractor, window business,Window service, best windows, top windows, glass window, energy efficient windows, window companies, window company, window contractor, new window">



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
					include("inc/windowtype.php");
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