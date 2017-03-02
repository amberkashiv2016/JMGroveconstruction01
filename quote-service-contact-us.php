<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "contact"; ?>
<html>
<head>
	<title>Contact Us - J. M. Grove  - The Home Improvement Specialists, </title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="J. M. Grove -  Contact J.M. Grove, J.M. Grove Estimate, "/>
<meta name="keywords" content="J.M. Grove - Building Trust, Contact J.M. Grove, J.M. Grove Estimate, "/>
<SCRIPT LANGUAGE="JavaScript" SRC="/js/pop.js"></script>
	<SCRIPT LANGUAGE="JavaScript" SRC="/js/toolMaker.js"></script>
	<SCRIPT LANGUAGE="JavaScript" SRC="/functions/js/toolDictionary.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
				$page = $_GET['page'];
				if ($page == "contact") {
				?>	
				<div style="width:292px;float:left;font-size:.8em;">
				<p style="padding: 0px 15px 5px 15px;">
				At <strong>J. M. Grove</strong>, we're always happy to hear from you. Contact us via <strong>email, phone, mail,</strong> or fill out the form below and a representative will assist you!
				</p>
				<p style="padding: 8px 15px 5px 15px;">
				Phone:
				<br><strong style="color:#c72121;">(215) 274-5182</strong></p>
				<p style="padding: 05px 15px 5px 15px;">
				Address:
				<br><strong style="color:#c72121;">220 Krams Ave<br> Manayunk, Pa 19127</strong>
				<span style="font-size:11px;"><em><br>Monday-Friday: 9am-5pm
				<br>Saturday: 9am-4pm</em></span>
				</p>
				<p style="padding: 05px 15px 5px 15px;">
				Email:
				<br>
				<strong><a href="mailto:service-sales@jmgroveconstruction.com" style="color:#c72121;">service-sales@jmgroveconstruction.com</a></strong>
				</p>
				
				</div><div style="width:416px;float:left;"><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;q=970+Millbridge+Gardens+Clementon+NJ,+08021&amp;ie=UTF8&amp;hq=&amp;hnear=Millbridge+Rd,+Clementon,+Camden,+New+Jersey+08021&amp;ll=39.80859,-75.03416&amp;spn=0.041538,0.090895&amp;z=14&amp;output=embed"></iframe><br /><small></small></div>
				
				<?php } ?>
				<?php include("inc/buy.php"); ?>
				<p style="padding-bottom:20px;">&nbsp;</p>
                
			</div>
            <div style="/*margin-top:-60px;*/ width:100%; float:left;">
			<?php include("inc/testimonials.php"); ?>	
            </div>
		</div>
		<?php include("inc/footer.php"); ?>	
	</div>
</div>


</body>
<?php include_once("inc/analyticstracking.php") ?>
</html>