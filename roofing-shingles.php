<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "roofing"; ?>
<html>
<head>
	<title>asphalt roofing shingles, flat roof, rubber roof repair, rubber roof, standing seam metal roof, roof coating, metal roof, slate roof, Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj</title> 
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="J. M. Grove - The experts in home improvement services - asphalt roofing shingles, flat roof, rubber roof repair, rubber roof, standing seam metal roof, roof coating, metal roof, slate roof, Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj"/>
	<meta name="keywords" content=" roofing contractors, residential roofers, commercial roofers , roof construction, shingle roofs, roofing companies, commercial roofing, residential roofing, house roofing, roofing consultant, roofing services , roof repair, roof replacement, Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj">
	<meta name="description" content="J. M. Grove .-asphalt roofing shingles, flat roof, rubber roof repair, rubber roof, standing seam metal roof, roof coating, metal roof, slate roof ."> 
	<link rel="shortcut icon" href="/img/JG-bc-logo.gif">
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
				$val1 = $_GET['color'];
				include("inc/roofingheader.php");
				if ($val0 == "") {
					include("inc/roofingtype.php");
					include("inc/didntfind.php");
				} elseif ($val == "" && $val0 != "steel" && $val0 != "rubber" && $val0 != "metal") {
					include("inc/roofingstyle.php");
					include("inc/didntfind.php");
				} elseif ($val1 == "" && $val0 != "steel" && $val0 != "rubber" && $val0 != "metal") {
					include("inc/roofingcolor.php");
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