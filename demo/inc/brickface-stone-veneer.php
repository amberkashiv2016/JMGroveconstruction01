<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "brickface"; ?>
<html>
<head>
	<title> J. M. Grove   - Brickface &amp; Stone Veneer -The Home Improvement Specialists, Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content=" The experts in home improvement services -Get a estimate-quote for brick face and stone veneer - Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj "/>
<meta name="keywords" content=" stone veneer,brickface,brickfacing, natural stone veneer, natural stone veneer siding, brick veneer, stone wall, fake stone wall, brick , natural veneer, brick siding, brick house siding,  brick veneer siding, brick stone siding, brick vinyl siding, composite siding, brick veneer, fiber cement siding, cement siding, install, Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj"/>
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