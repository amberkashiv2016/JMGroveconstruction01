<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "decks"; ?>
<html>
<head>
	<title>Decks &amp; Railings - J.M. Grove  - The Home Improvement Specialists, Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="George J. Grove & Son - The experts in home improvement services - including replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks and much more! Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj."/>
<meta name="keywords" content="J.M. Grove, Decks, building decks, outdoor decks, decks and patios, patio decks, backyard decks, deck building, wood decks, pool decks ,home decks , patio deck, deck and patio,  patio porch deck, building decks, deck ideas, deck construction, deck builders, wood deck, deck contractors, outdoor deck, deck contractor, decking, porches, building a porch, Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj"/>
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
				$val = $_GET['railing'];
				$val1 = $_GET['color'];
				$val2 = $_GET['decklights'];
				include("inc/deckheader.php");
				if ($val0 == "") {
					include("inc/decktype.php");
					include("inc/didntfind.php");
				} elseif ($val == "") {
					include("inc/deckrailing.php");						
					include("inc/didntfind.php");
				} elseif ($val1 == "") {
					include("inc/deckcolor.php");						
					include("inc/didntfind.php");
				} elseif ($val2 == "") {
					include("inc/decklights.php");						
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