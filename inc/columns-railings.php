<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "columns"; ?>
<html>
<head>
	<title>J. M. Grove  -Columns &amp; Railings - The Home Improvement Specialists</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content=" The experts in home improvement services - Get an estimate-quote for columns and railings - Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj "/> 
<meta name="keywords" content="railings & columns, railings, columns, railing, porch railing, deck railing, stair railing, aluminum railing, hand railing, vinyl railing, deck railings, stair railings,  aluminum railings,  porch railings, deck rail, balcony railings, stair rail, hand rail, vinyl railings, aluminum columns, architectural columns,  vinyl porch railing, railing post, column,  exterior railing, interior railing, railing installation, aluminum rail, deck rails, composite railing,  installing railing, stairs railing, staircase railing, vinyl columns, steel columns, steel railings, square columns, fiberglass column, handrail, fence, aluminum deck railing, gates, fencing, pvc railing, fences, aluminum fence, vinyl fencing, Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj"/>
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
				$val1 = $_GET['cap'];
				$val2 = $_GET['color'];
				include("inc/columnheader.php");
				if ($val0 == "") {
					include("inc/columnrailingtype.php");
					
				} elseif ($val == "") {
					if ($val0 == "columns" )
						include("inc/columnstyle.php");
					else
						include("inc/railingstyle.php");
						
					include("inc/didntfind.php");
				} elseif ($val1 == "") {
					if ($val0 == "columns" )
						include("inc/columncap.php");
					else
						include("inc/railingcolor.php");
						
					include("inc/didntfind.php");
				} elseif ($val2 == "") {
					if ($val0 == "columns" )
						include("inc/columncolor.php");
					else
						include("inc/buy.php");
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