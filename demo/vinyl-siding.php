<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "siding"; ?>
<html>
<head>
	<title>Vinyl Siding ,Vinyl Siding Repair, Replacement Siding, Home Siding, Siding Contractors </title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content=" Vinyl Siding ,Vinyl Siding Repair, Replacement Siding, Home Siding, Siding Contractors"/>
<meta name="keywords" content=" Vinyl Siding ,Vinyl Siding Repair, Replacement Siding, Home Siding, Siding Contractors"/>
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
				$val = $_GET['color'];
				$val2 = $_GET['accessories'];
				if ($val0 == "") {
					include("inc/sidingtype.php");
					include("inc/didntfind.php");
				} elseif ($val == "") {
					include("inc/sidingcolor.php");
					include("inc/didntfind.php");
				} elseif ($val2 == "") {
					include("inc/sidingaccessories.php");
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