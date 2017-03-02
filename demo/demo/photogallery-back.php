<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "photogallery"; ?>
<?php $img = $_GET['image'];?>
<?php $section = $_GET['page'];?>
<html>
<head>
	<title>Photo Gallery - J. M. Grove  - The Home Improvement Specialists Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj</title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="J. M. Grove - The experts in home improvement services - including replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks and much more! Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj."/>
<meta name="keywords" content=" J. M. Grove, home improvement, contractor, replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks, Located in Glassboro,  serving Pitman New Jersey Nj, Williamstown New Jersey Nj, Sicklerville New Jersey Nj, Berlin New Jersey Nj, Vineland New Jersey Nj, Swedesboro New Jersey Nj, Blackwood New Jersey Nj, Mantua Township New Jersey Nj, Washington township New Jersey Nj, Woodbury New Jersey Nj, Sewell New Jersey Nj"/>
</head>

<body>
<div align="center">
	<div id="shell">
		<?php  include("inc/header.php"); ?>	
		<div id="content">
			<?php include("inc/leftmenu.php"); ?>			
			<div id="content-right">
				<div style="width:100%;height:17px;float:left;overflow:hidden;"></div>

				<div style="width:100%;float:left;overflow:hidden;font-size:.8em;">
					<p style="padding: 0px 20px 0px 20px;font-size:1.4em;"><img src="/img/script-getinspired.gif"></p>
					<?php if ($section=="windows") {?>	
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Windows Photo Gallery
					</h1>
					<?php } elseif ($section=="doors") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Doors Photo Gallery
					</h1>
					<?php } elseif ($section=="roofing") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Roofing Photo Gallery
					</h1>
					<?php } elseif ($section=="siding") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Siding Photo Gallery
					</h1>
					<?php } elseif ($section=="skylights") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Skylights Photo Gallery
					</h1>
					<?php } elseif ($section=="gutters") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Gutters Photo Gallery
					</h1>
					<?php } elseif ($section=="awnings") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Awnings Photo Gallery
					</h1>
					<?php } elseif ($section=="additions") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Sunrooms &amp; Additions Photo Gallery
					</h1>
					<?php } elseif ($section=="columns") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Railings &amp; Columns Photo Gallery
					</h1>
					<?php } elseif ($section=="decks") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Decks Photo Gallery
					</h1>
					<?php } elseif ($section=="brickface") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Stone Veneer Photo Gallery
					</h1>
					<?php } elseif ($section=="broom") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Bath Room Photo Gallery
					</h1>
					<?php } elseif ($section=="flooring") { ?>
					<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">
						Flooring Photo Gallery
					</h1>
					<?php } ?>
					
					<p style="padding: 10px 15px 10px 15px;font-size:.9em;" align="center">
					<?php if ($section!="windows") {?>	<a href="photogallery.php?page=windows" style="color:#c72121;">Windows</a> | <?php } ?>
					<?php if ($section!="doors") {?><a href="photogallery.php?page=doors" style="color:#c72121;">Doors</a> | <?php } ?>
					<?php if ($section!="roofing") {?><a href="photogallery.php?page=roofing" style="color:#c72121;">Roofing</a> | <?php } ?>
					<?php if ($section!="siding") {?><a href="photogallery.php?page=siding" style="color:#c72121;">Siding</a> | <?php } ?>
					<?php if ($section!="gutters") {?><a href="photogallery.php?page=gutters" style="color:#c72121;">Gutters</a> | <?php } ?>
					<?php if ($section!="awnings") {?><a href="photogallery.php?page=awnings" style="color:#c72121;">Awnings</a> | <?php } ?>
					<?php if ($section!="additions") {?><a href="photogallery.php?page=additions" style="color:#c72121;">Sunrooms &amp; Additions</a> | <?php } ?>
					<?php if ($section!="columns") {?><a href="photogallery.php?page=columns" style="color:#c72121;">Railings &amp; Columns</a> | <?php } ?>
					<?php if ($section!="decks") {?><a href="photogallery.php?page=decks" style="color:#c72121;">Decks</a><?php if ($section!="brickface") {?> | <?php } } ?>
					<?php if ($section!="brickface") {?><a href="photogallery.php?page=brickface" style="color:#c72121;">Stone Veneer</a> | <?php } ?>
					<?php if ($section!="bathroom") {?><a href="photogallery.php?page=bathroom" style="color:#c72121;">Bathroom</a> | <?php } ?>
					<?php if ($section!="flooring") {?><a href="photogallery.php?page=brickface" style="color:#c72121;">Flooring</a><?php } ?>
					</p>
					<p style="padding: 10px 15px 10px 15px;" align="center">						
						<?php if ($section=="windows") {?>						
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-window-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-window-4.jpg">
							<?php } ?>
						<?php } elseif ($section=="doors") { ?>
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-door-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-door-1.jpg">
							<?php } ?>
						<?php } elseif ($section=="roofing") { ?>
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-roofing-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-roofing-1.jpg">
							<?php } ?>
						<?php } elseif ($section=="siding") { ?>
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-siding-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-siding-1.jpg">
							<?php } ?>
						<?php } elseif ($section=="skylights") { ?>
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-skylight-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-skylight-1.jpg">
							<?php } ?>
						<?php } elseif ($section=="gutters") { ?>
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-gutters-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-gutters-1.jpg">
							<?php } ?>
						<?php } elseif ($section=="awnings") { ?>
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-awnings-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-awnings-1.jpg">
							<?php } ?>
						<?php } elseif ($section=="additions") { ?>
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-sunrooms-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-sunrooms-1.jpg">
							<?php } ?>
						<?php } elseif ($section=="columns") { ?>
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-columns-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-columns-1.jpg">
							<?php } ?>
						<?php } elseif ($section=="decks") { ?>
							<?php if (is_numeric($img)) {?>
								<img src="/img/pg-decks-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-decks-1.jpg">
							<?php } ?>
						<?php } elseif ($section=="brickface") { ?>
							<?php if (is_numeric($img)) { ?>
								<img src="/img/pg-stone-<?php echo($img); ?>.jpg">
							<?php } else { ?>
								<img src="/img/pg-stone-1.jpg">
							<?php } ?>
						<?php }
						 elseif ($section=="bathroom") { ?>
							<?php if (($img)) { ?>
								<img src="/img/<?php echo($img); ?>">
							<?php }  ?>
						<?php } ?>
					</p>
					<?php if ($section=="windows") {?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=windows&image=4"><img src="/img/pg-window-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=windows&image=2"><img src="/img/pg-window-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=windows&image=3"><img src="/img/pg-window-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=windows&image=5"><img src="/img/pg-window-5-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=windows&image=6"><img src="/img/pg-window-6-t.gif" border="0"></a>
						</p>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=windows&image=10"><img src="/img/pg-window-10-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=windows&image=7"><img src="/img/pg-window-7-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=windows&image=8"><img src="/img/pg-window-8-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=windows&image=1"><img src="/img/pg-window-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=windows&image=9"><img src="/img/pg-window-9-t.gif" border="0"></a>
						</p>
					<?php } elseif ($section=="doors") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=doors&image=1"><img src="/img/pg-door-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=doors&image=2"><img src="/img/pg-door-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=doors&image=3"><img src="/img/pg-door-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=doors&image=4"><img src="/img/pg-door-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=doors&image=5"><img src="/img/pg-door-5-t.gif" border="0"></a>
						</p>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=doors&image=6"><img src="/img/pg-door-6-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=doors&image=7"><img src="/img/pg-door-7-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=doors&image=8"><img src="/img/pg-door-8-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=doors&image=9"><img src="/img/pg-door-9-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=doors&image=10"><img src="/img/pg-door-10-t.gif" border="0"></a>
						</p>
					<?php } elseif ($section=="roofing") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=roofing&image=1"><img src="/img/pg-roofing-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=roofing&image=2"><img src="/img/pg-roofing-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=roofing&image=3"><img src="/img/pg-roofing-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=roofing&image=4"><img src="/img/pg-roofing-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=roofing&image=5"><img src="/img/pg-roofing-5-t.gif" border="0"></a>
						</p>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=roofing&image=6"><img src="/img/pg-roofing-6-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=roofing&image=7"><img src="/img/pg-roofing-7-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=roofing&image=8"><img src="/img/pg-roofing-8-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=roofing&image=9"><img src="/img/pg-roofing-9-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=roofing&image=10"><img src="/img/pg-roofing-10-t.gif" border="0"></a>
						</p>
					<?php } elseif ($section=="siding") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=siding&image=1"><img src="/img/pg-siding-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=siding&image=2"><img src="/img/pg-siding-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=siding&image=3"><img src="/img/pg-siding-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=siding&image=4"><img src="/img/pg-siding-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=siding&image=5"><img src="/img/pg-siding-5-t.gif" border="0"></a>
						</p>
					<?php } elseif ($section=="skylights") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=skylights&image=1"><img src="/img/pg-skylight-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=skylights&image=2"><img src="/img/pg-skylight-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=skylights&image=3"><img src="/img/pg-skylight-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=skylights&image=4"><img src="/img/pg-skylight-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=skylights&image=5"><img src="/img/pg-skylight-5-t.gif" border="0"></a>
						</p>
						
					<?php } elseif ($section=="broom") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=broom&image=1"><img src="/img/broom/IMG_0025.jpg" border="0"></a>&nbsp;
							<a href="photogallery.php?page=broom&image=2"><img src="/img/broom/IMG_0262.jpg" border="0"></a>&nbsp;
							<a href="photogallery.php?page=broom&image=3"><img src="/img/broom/IMG_0263.jpg" border="0"></a>&nbsp;
							<a href="photogallery.php?page=broom&image=4"><img src="/img/broom/125.jpg" border="0"></a>&nbsp;
							<a href="photogallery.php?page=broom&image=5"><img src="/img/broom/126.jpg" border="0"></a>
						</p>	
					<?php } elseif ($section=="gutters") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=gutters&image=1"><img src="/img/pg-gutters-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=gutters&image=2"><img src="/img/pg-gutters-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=gutters&image=3"><img src="/img/pg-gutters-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=gutters&image=4"><img src="/img/pg-gutters-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=gutters&image=5"><img src="/img/pg-gutters-5-t.gif" border="0"></a>
						</p>
					<?php } elseif ($section=="awnings") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=awnings&image=1"><img src="/img/pg-awnings-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=awnings&image=2"><img src="/img/pg-awnings-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=awnings&image=3"><img src="/img/pg-awnings-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=awnings&image=4"><img src="/img/pg-awnings-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=awnings&image=5"><img src="/img/pg-awnings-5-t.gif" border="0"></a>
						</p>
					<?php } elseif ($section=="additions") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=additions&image=1"><img src="/img/pg-sunrooms-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=additions&image=2"><img src="/img/pg-sunrooms-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=additions&image=3"><img src="/img/pg-sunrooms-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=additions&image=4"><img src="/img/pg-sunrooms-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=additions&image=5"><img src="/img/pg-sunrooms-5-t.gif" border="0"></a>
						</p>
					<?php } elseif ($section=="columns") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=columns&image=1"><img src="/img/pg-columns-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=columns&image=2"><img src="/img/pg-columns-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=columns&image=3"><img src="/img/pg-columns-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=columns&image=4"><img src="/img/pg-columns-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=columns&image=5"><img src="/img/pg-columns-5-t.gif" border="0"></a>
						</p>
					<?php } elseif ($section=="decks") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=decks&image=1"><img src="/img/pg-decks-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=decks&image=2"><img src="/img/pg-decks-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=decks&image=3"><img src="/img/pg-decks-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=decks&image=4"><img src="/img/pg-decks-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=decks&image=5"><img src="/img/pg-decks-5-t.gif" border="0"></a>
						</p>
					<?php } elseif ($section=="brickface") { ?>
						<p style="padding: 10px 15px 10px 15px;" align="center">
							<a href="photogallery.php?page=brickface&image=1"><img src="/img/pg-stone-1-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=brickface&image=2"><img src="/img/pg-stone-2-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=brickface&image=3"><img src="/img/pg-stone-3-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=brickface&image=4"><img src="/img/pg-stone-4-t.gif" border="0"></a>&nbsp;
							<a href="photogallery.php?page=brickface&image=5"><img src="/img/pg-stone-5-t.gif" border="0"></a>
						</p>
					<?php } 
					elseif ($section=="bathroom") { ?>
                    				
					<p style="padding: 0px 20px 10px 20px;font-size:.8em;">

<div class="option">
	<div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=download.jpg" style="color:#333;"><img src="img/download.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=Flooring1.jpg" style="color:#333;"><img src="img/Flooring1.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=Flooring2.jpg" style="color:#333;"><img src="img/Flooring2.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=Flooring3.jpg" style="color:#333;"><img src="img/Flooring3.jpg" alt=""></a></div>
</div>

<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
<div class="option">
	<div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=flooring3x.jpg" style="color:#333;"><img src="img/flooring3x.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=flooring4.jpg" style="color:#333;"><img src="img/flooring4.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=flooring5.jpg" style="color:#333;"><img src="img/flooring5.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=flooring6.jpg" style="color:#333;"><img src="img/flooring6.jpg" alt=""></a></div>
</div>

<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
<div class="option">
	<div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=flooring7.jpg" style="color:#333;"><img src="img/flooring7.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=flooringx1.jpg" style="color:#333;"><img src="img/flooringx1.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=flooringx2.jpg" style="color:#333;"><img src="img/flooringx2.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=flooringx5.jpg" style="color:#333;"><img src="img/flooringx5.jpg" alt=""></a></div>
</div>

<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
<div class="option">
	<div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=flooringx6.jpg" style="color:#333;"><img src="img/flooringx6.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=hardwood-flooring1.jpg" style="color:#333;"><img src="img/hardwood-flooring1.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=hardwood-flooring.jpg" style="color:#333;"><img src="img/hardwood-flooring.jpg" alt=""></a></div>
    <div class="option-glass" style="width:150px;"><a href="photogallery.php?page=bathroom&image=marble-flooring.jpg" style="color:#333;"><img src="img/marble-flooring.jpg" alt=""></a></div>
</div>					
		
				
							
							
							

				
                <?php } ?>
                </div>
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