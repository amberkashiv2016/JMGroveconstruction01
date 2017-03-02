<div id="header">
	<div id="header-top"></div>
	<div id="header-mid">
		<div style="float:left;width:65%">
			<p style="padding: 20px 0px 0px 12px;"><a href="/index.php"><img src="/img/george-j-grove-replacement-windows.jpg" border="0" alt="J. M. Grove Replacement Windows"></a></p>
		</div>
		<div style="float:left;width:35%;height:124px;background: url(img/header-vdiv.jpg) no-repeat;">
			<p style="padding: 12px 0px 0px 22px;">Call Us Anytime!</p>
			<p style="padding: 0px 0px 0px 22px;"><strong>(717) 669-1930</strong></p>
			<p style="padding: 0px 0px 0px 22px;font-size:.8em;">1219 Manheim Pike, Lancaster, PA 17601</p>
			<p style="padding: 0px 0px 0px 22px;font-size:.8em;"><a href="mailto:service@jmgroveco.com" style="text-decoration:none;">service@jmgroveco.com</a></p>
		</div>	
	</div>
	<div id="header-bottom"></div>
</div>
<?php if ($currentpage == "about") {?>
<div id="splash" style="height:200px;">
	<div id="splash-left" style="height:194px;">
		<div style="float:left;background: url(img/splash-left-top.jpg) no-repeat;height:10px;width:100%;overflow:hidden;"></div>
		<div align="left" style="float:left;width:100%;height:174px;overflow:hidden;">
			<p align="left" style="padding: 5px 0 0 15px;">
				<img src="/img/splash-about.gif" alt="Building Trust">
			</p>
			<ul>
				<li><a href="/quote-service-contact-us.php?page=designpro" style="color:#fff;text-decoration:none;">Ask a Design Pro</a></li>
				<!---<li><a href="warranty.php#<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Warranty Information</a></li>--->
				<li><a href="/photogallery.php?page=<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Get Inspired. Check out our photo gallery</a></li>
				<li><a href="http://jmgroveco.wordpress.com/"><img src="/img/wordpress-icon.png" width="16" height="16"></a></li>
			</ul>
		</div>
		<div style="float:left;background: url(/img/splash-left-bottom.jpg);height:10px;width:100%;overflow:hidden;"></div>
	</div>
	<div id="splash-right" style="height:194px;">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="610" height="194">
			<param name="movie" value="pub/about.swf">
			<param name="quality" value="high">
			<embed src="pub/about.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="610" height="194"></embed>
		</object>
	</div>
	<div id="splash-footer"></div>
</div>
<?php } elseif ($currentpage == "customize") {?>
<div id="splash" style="height:200px;">
	<div id="splash-left" style="height:194px;">
		<div style="float:left;background: url(img/splash-left-top.jpg) no-repeat;height:10px;width:100%;overflow:hidden;"></div>
		<div align="left" style="float:left;width:100%;height:174px;overflow:hidden;">
			<p align="left" style="padding: 5px 0 0 15px;">
				<img src="/img/splash-customize.gif" alt="Customize">
			</p>
			<ul>
				<li><a href="/quote-service-contact-us.php?page=designpro" style="color:#fff;text-decoration:none;">Ask a Design Pro</a></li>
				<!---<li><a href="warranty.php#<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Warranty Information</a></li>--->
				<li><a href="/photogallery.php?page=<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Get Inspired. Check out our photo gallery</a></li>
			</ul>
		</div>
		<div style="float:left;background: url(img/splash-left-bottom.jpg);height:10px;width:100%;overflow:hidden;"></div>
	</div>
	<div id="splash-right" style="height:194px;">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="610" height="194">
			<param name="movie" value="pub/home.swf">
			<param name="quality" value="high">
			<embed src="pub/home.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="610" height="194"></embed>
		</object>
	</div>
	<div id="splash-footer"></div>
</div>
<?php } else {?>
<div id="splash" style="height:150px;">
	<div id="splash-left" style="height:144px;">
		<div style="float:left;background: url(img/splash-left-top.jpg) no-repeat;height:10px;width:100%;overflow:hidden;"></div>
		<div align="left" style="float:left;width:100%;height:124px;overflow:hidden;">
			<p align="left" style="padding: 5px 0 0 15px;">
				<?php if ($currentpage == "home") {?><img src="/img/home-building-trust.gif" alt="Building Trust"><?php }?>
				<?php if ($currentpage == "windows") {?><img src="/img/windows-replacement-windows.gif" alt="Building Trust"><?php }?>
				<?php if ($currentpage == "roofing") {?><img src="/img/splash-roofing.gif" alt="Building Trust"><?php }?>
				<?php if ($currentpage == "financing") {?><img src="/img/splash-financing.gif" alt="Building Trust"><?php }?>
				<?php if ($currentpage == "siding") {?><img src="/img/splash-siding.gif" alt="Building Trust"><?php }?>
				<?php if ($currentpage == "brickface") {?><img src="/img/splash-brickface.gif" alt="Building Trust"><?php }?>
				<?php if ($currentpage == "columns") {?><img src="/img/splash-railings.gif" alt="Building Trust"><?php }?>
				<?php if ($currentpage == "awnings") {?><img src="/img/splash-awnings.gif" alt="Building Trust"><?php }?>
				<?php if ($currentpage == "contact") {?><img src="/img/splash-contactus.gif" alt="Contact Us"><?php }?>
				<?php if ($currentpage == "additions") {?><img src="/img/splash-sunrooms.gif" alt="Sunrooms"><?php }?>
				<?php if ($currentpage == "gutters") {?><img src="/img/splash-gutters.gif" alt="Gutters and Gutter Guards"><?php }?>
				<?php if ($currentpage == "skylights") {?><img src="/img/splash-skylights.gif" alt="Skylights"><?php }?>
				<?php if ($currentpage == "doors") {?><img src="/img/splash-doors.gif" alt="doors"><?php }?>
				<?php if ($currentpage == "customize") {?><img src="/img/splash-customize.gif" alt="customize"><?php }?>
				<?php if ($currentpage == "employment") {?><img src="/img/splash-employment.gif" alt="employment"><?php }?>
				<?php if ($currentpage == "photogallery") {?><img src="/img/splash-photo.gif" alt="photogallery"><?php }?>
				<?php if ($currentpage == "warranty") {?><img src="/img/splash-warranty.gif" alt="warranty"><?php }?>
				<?php if ($currentpage == "decks") {?><img src="/img/splash-decks.gif" alt="decks"><?php }?>
			</p>
			<ul>
					<li><a href="/quote-service-contact-us.php?page=designpro" style="color:#fff;text-decoration:none;">Ask a Design Pro</a></li>
					<!---<li><a href="warranty.php#<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Warranty Information</a></li>--->
					<li><a href="/photogallery.php?page=<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Get Inspired. Check out our photo gallery</a></li>
			</ul>
		</div>
		<div style="float:left;background: url(img/splash-left-bottom.jpg);height:10px;width:100%;overflow:hidden;"></div>
	</div>
	<div id="splash-right" style="height:144px;">
		
		<?php if ($currentpage == "brickface") {
			$randomnumber = rand ( 1 , 2 );	?>
			<img src="/img/splash-bg-stoneveneer-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "windows") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="/img/splash-bg-windows-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "columns") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="/img/splash-bg-columns-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "gutters") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="/img/splash-bg-gutters-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "roofing") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="/img/splash-bg-roofing-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "siding") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="/img/splash-bg-siding-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "skylights") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="/img/splash-bg-skylights-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "additions") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="/img/splash-bg-sunrooms-<?php echo($randomnumber);?>.jpg">
		<?php } else { ?>
			<img src="/img/splash-bg-default.jpg">
		<?php } ?>
	</div>
	<div id="splash-footer"></div>
</div>
<?php } ?>