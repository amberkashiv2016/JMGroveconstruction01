<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "columns"; ?>
<html>
<head>
	<title>J. M. Grove  -Columns &amp; Railings Plymouth meeting Pa 19462</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content=" The experts in home improvement services - Get an estimate-quote for columns and railings in Plymouth meeting Pa 19462-  ."/> 
<meta name="keywords" content="railings & columns Plymouth meeting Pa 19462, railings Plymouth meeting Pa 19462, columns Plymouth meeting Pa 19462, railing Plymouth meeting Pa 19462, porch railing Plymouth meeting Pa 19462, deck railing Plymouth meeting Pa 19462, stair railing Plymouth meeting Pa 19462, aluminum railing Plymouth meeting Pa 19462, hand railing Plymouth meeting Pa 19462, vinyl railing Plymouth meeting Pa 19462, vinyl columns Plymouth meeting Pa 19462, steel columns Plymouth meeting Pa 19462, square columns Plymouth meeting Pa 19462, fiberglass column Plymouth meeting Pa 19462."/>
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