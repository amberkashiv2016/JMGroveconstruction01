<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "doors"; ?>
<html>
<head>
		<?php 
		$val00 = $_GET['home'];
	if ($val00 == "entry") {?>
	<title>Entry Doors, French door, steel door, security door, wood door, metal door, fiberglass door Gladwyne Pa 19035</title>
	<meta name="keywords" content="French door Gladwyne Pa 19035, steel door Gladwyne Pa 19035, security door Gladwyne Pa 19035, wood door Gladwyne Pa 19035, metal door Gladwyne Pa 19035, fiberglass door Gladwyne Pa 19035">
	<meta name="description" content="J. M. Grove - French door, steel door, security door, wood door, metal door, fiberglass door in Gladwyne Pa 19035">
	<?php } else {
		if ($val00 == "storm") {?>
		<title>Storm Doors, storm door, door storm, retractable screen door, screen door Gladwyne Pa 19035</title>
		<meta name="keywords" content="storm door Gladwyne Pa 19035, door storm Gladwyne Pa 19035, retractable screen door Gladwyne Pa 19035, screen door Gladwyne Pa 19035">
		<meta name="description" content="J. M. Grove - storm door, door storm, retractable screen door, screen door in Gladwyne Pa 19035">
		<?php } else {
			if ($val00 == "patio") {?>
			<title>Sliding Door Gladwyne Pa 19035</title>
			<meta name="keywords" content="Sliding door, patio door(s), door sliding, sliding glass door(s), sliding patio door">
			<meta name="description" content="J. M. Grove - Sliding door, patio door(s), door sliding, sliding glass door(s), sliding pation door">
			<?php } else {?> 
	<title> entry doors, replacement door, exterior door, entry door, front door, exterior doors, door repair , door contractor Gladwyne Pa 19035</title>
	<meta name="keywords" content=" entry doors Gladwyne Pa 19035, replacement door Gladwyne Pa 19035, exterior door Gladwyne Pa 19035, entry door Gladwyne Pa 19035, front door Gladwyne Pa 19035, exterior doors Gladwyne Pa 19035, door repair Gladwyne Pa 19035, door contractor Gladwyne Pa 19035.">
	<meta name="description" content="J. M. Grove -Install entry doors, replacement door, exterior door, entry door, front door, exterior doors, door repair , door contractor in Gladwyne Pa 19035."> 
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
					include("inc/door/doorhome-Gladwyne-Pa-19035.php");
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