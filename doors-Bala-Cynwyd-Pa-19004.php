<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "doors"; ?>
<html>
<head>
		<?php 
		$val00 = $_GET['home'];
	if ($val00 == "entry") {?>
	<title>Entry Doors, French door, steel door, security door, wood door, metal door, fiberglass door Bala cynwyd Pa 19004 </title>
	<meta name="keywords" content="French door , steel door , security door, wood door , metal door , fiberglass door  Bala cynwyd Pa 19004">
	<meta name="description" content="J. M. Grove - French door, steel door, security door, wood door, metal door, fiberglass door in Bala cynwyd Pa 19004">
	<?php } else {
		if ($val00 == "storm") {?>
		<title>Storm Doors, storm door, door storm, retractable screen door, screen door Bala cynwyd Pa 19004</title>
		<meta name="keywords" content="storm door , door storm, retractable screen door , screen door Bala cynwyd Pa 19004 ">
		<meta name="description" content="J. M. Grove - storm door, door storm, retractable screen door, screen door in Bala cynwyd Pa 19004">
		<?php } else {
			if ($val00 == "patio") {?>
			<title>Sliding Door Bala cynwyd Pa 19004</title>
			<meta name="keywords" content="Sliding door, patio door(s), door sliding, sliding glass door(s), sliding patio door Bala cynwyd Pa 19004">
			<meta name="description" content="J. M. Grove - Sliding door, patio door(s), door sliding, sliding glass door(s), sliding pation door Bala cynwyd Pa 19004">
			<?php } else {?> 
	<title> entry doors, replacement door, exterior door, entry door, front door, exterior doors, door repair , door contractor Bala cynwyd Pa 19004</title>
	<meta name="keywords" content=" entry doors , replacement door , exterior door , entry door , front door , exterior doors , door repair , door contractor Bala cynwyd Pa 19004.">
	<meta name="description" content="J. M. Grove -Install entry doors, replacement door, exterior door, entry door, front door, exterior doors, door repair , door contractor in Bala cynwyd Pa 19004."> 
	<?php } } } ?>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="J. M. Grove -  including entry doors, replacement door, exterior door, entry door, front door, exterior doors, door repair , door contractor."/>
	<SCRIPT LANGUAGE="JavaScript" SRC="/js/pop.js"></script>
	<SCRIPT LANGUAGE="JavaScript" SRC="/js/toolMaker.js"></script>
	<SCRIPT LANGUAGE="JavaScript" SRC="/functions/js/toolDictionary.js"></script>
<!---minislider--------------------css -------------------script----->
	<link rel="stylesheet" href="js/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--<script type="text/javascript" src="js/lightbox.js"></script>-->
         <link href="slider/6/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="slider/6/mcVideoPlugin.js" type="text/javascript"></script>
    <script src="slider/6/js-image-slider.js" type="text/javascript"></script>
    <script src="slider/6/js-image-slider_after.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	
	<!---minislider--------------------css -------------------script----->
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
					include("inc/door/doorhome-Bala-Cynwyd-Pa-19004.php");
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
<?php include_once("inc/analyticstracking.php") ?>
</html>