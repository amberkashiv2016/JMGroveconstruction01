<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "columns"; ?>
<html>
<head>
	<title>J. M. Grove  -Columns &amp; Railings Merion station Pa 19066</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content=" The experts in home improvement services - Get an estimate-quote for columns and railings in Merion station Pa 19066 -  ."/> 
<meta name="keywords" content="railings & columns Merion station Pa 19066, railings Merion station Pa 19066, columns Merion station Pa 19066, railing Merion station Pa 19066, porch railing Merion station Pa 19066, deck railing Merion station Pa 19066, stair railing Merion station Pa 19066, aluminum railing Merion station Pa 19066, hand railing Merion station Pa 19066, vinyl railing Merion station Pa 19066, vinyl columns Merion station Pa 19066, steel columns Merion station Pa 19066, square columns Merion station Pa 19066, fiberglass column Merion station Pa 19066."/>
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

<?php include_once("inc/analyticstracking.php") ?>
</html>