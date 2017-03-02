<div id="header">
	<link rel="canonical" href="<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];echo $url;?>">
	<div id="header-top"></div>
	<div id="header-mid">
		<div style="float:left;width:42%">
			<p style="padding: 20px 0px 0px 12px;"><a href="/index.php">ABCC<img src="img/george-j-grove-replacement-windows.jpg" border="0" alt="J. M. Grove Replacement Windows"></a></p>
		</div>
        <div style="float:left; width:28%; background: url(img/header-vdiv.jpg) no-repeat; text-align:center;">
					<p style="padding: 20px 0px 0px 12px;"><a href="/"><img src="img/JG_Logo.jpg" border="0" alt="general construction company"></a></p>
				</div>
		<div style="float:left;width:30%;height:124px;background: url(img/header-vdiv.jpg) no-repeat;">
			<div class="login-btn-top" style="position:absolute; margin-left: 200px; margin-top: 16px;"><a style="text-decoration:none; background:#be5052; color:#FFFFFF; font-size:14px; padding:3px 10px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;" href="http://178.32.241.230:205" target="_blank">Sign In</a></div>
					<p style="padding: 0px 0px 0px 22px;"><br><strong>(215) 274-5182</strong></p>
					<!--<p style="padding: 0px 0px 0px 22px;font-size:.8em;">3502 Scotts Ln,</p>
					<p style="padding: 0px 0px 0px 22px;font-size:.8em;"> <strong>Philadelphia, PA 19129</strong></p>
                    <p style="padding: 0px 0px 0px 22px;font-size:.8em;"><a href="mailto:Service-Sales@jmgroveconstruction.com" style="text-decoration:none;">Service-Sales@jmgroveconstruction.com</a></p>-->
				
				<div itemscope itemtype="http://schema.org/Organization" > 
  
   <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
     	<p style="padding: 0px 0px 0px 22px;font-size:.8em;"> <span itemprop="streetAddress">3502 Scotts Ln</span>,</p>
     	<p style="padding: 0px 0px 0px 22px;font-size:.8em;"> <span itemprop="addressLocality">Philadelphia</span>,
      <span itemprop="addressRegion">PA</span> 19129</p>
       </div>
       </div>
       <p style="padding: 0px 0px 0px 22px;font-size:.8em;"><a href="mailto:Service-Sales@jmgroveconstruction.com" style="text-decoration:none;">Service-Sales@jmgroveconstruction.com</a></p>
       
  

				
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
				<img src="img/splash-about.gif" alt="J.M. Grove">
			</p>
			<ul>
				<li><a href="/quote-service-contact-us.php?page=designpro" style="color:#fff;text-decoration:none;">Ask a Design Pro</a></li>
				<!---<li><a href="warranty.php#<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Warranty Information</a></li>--->
				<li><a href="/photogallery.php?page=<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Get Inspired. Check out our photo gallery</a></li>
				<a href="http://jmgroveco.wordpress.com/" style="color:#fff;text-decoration:none;><img src="img/wordpress-red-icon.jpg" width="16" height="16">Check out our blog</a>
			</ul>
		</div>
		<div style="float:left;background: url(img/splash-left-bottom.jpg);height:10px;width:100%;overflow:hidden;"></div>
	</div>
	<div id="splash-right" style="height:194px;">
		<img src="..img/splash-bg-stoneveneer-2.jpg" alt="J.M. Grove General Contractors" width="610" height="194" border="0"><img src="img/splash-brickface.gif" alt="stone concrete">
	</div>
	<div id="splash-footer"></div>
</div>
<?php } elseif ($currentpage == "customize") {?>
<div id="splash" style="height:200px;">
	<div id="splash-left" style="height:194px;">
		<div style="float:left;background: url(img/splash-left-top.jpg) no-repeat;height:10px;width:100%;overflow:hidden;"></div>
		<div align="left" style="float:left;width:100%;height:174px;overflow:hidden;">
			<p align="left" style="padding: 5px 0 0 15px;">
				<img src="img/splash-customize.gif" alt="Customize">
			</p>
			<ul>
				<li><a href="/quote-service-contact-us.php?page=designpro" style="color:#fff;text-decoration:none;">Ask a Design Pro</a></li>
				<!---<li><a href="warranty.php#<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Warranty Information</a></li>--->
				<li><a href="/photogallery.php?page=<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Get Inspired. Check out our photo gallery</a></li>
				<li><a href="http://jmgroveco.wordpress.com/" style="color:#fff;text-decoration:none;><img src="img/wordpress-red-icon.jpg" width="16" height="16">Check out our blog</a></li>
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

<?php } elseif ($currentpage == "test") {?>
<div id="splash" style="height:200px;">
	<div id="splash-left" style="height:194px;">
		<div style="float:left;background: url(img/splash-left-top.jpg) no-repeat;height:10px;width:100%;overflow:hidden;"></div>
		<div align="left" style="float:left;width:100%;height:174px;overflow:hidden;">
			<p align="left" style="padding: 5px 0 0 15px;">
				<img src="img/splash-customize.gif" alt="Customize">
			</p>
			<ul>
				<li><a href="/quote-service-contact-us.php?page=designpro" style="color:#fff;text-decoration:none;">Ask a Design Pro fa</a></li>
				<!---<li><a href="warranty.php#<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Warranty Information</a></li>--->
				<li><a href="/photogallery.php?page=<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Get Inspired. Check out our photo gallery</a></li>
				<a href="http://jmgroveco.wordpress.com/" style="color:#fff;text-decoration:none;><img src="img/wordpress-red-icon.jpg" width="16" height="16">Check out our blog</a>
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
				<?php if ($currentpage == "home") {?><img src="img/home-building-trust.gif" alt="Building Trust"><?php }?>
				<?php if ($currentpage == "windows") {?><img src="img/windows-replacement-windows.gif" alt="replacement windows"><?php }?>
				<?php if ($currentpage == "roofing") {?><img src="img/splash-roofing.gif" alt="roofing contractors"><?php }?>
				<?php if ($currentpage == "financing") {?><img src="img/splash-financing.gif" alt="roof repair"><?php }?>
				<?php if ($currentpage == "siding") {?><img src="img/splash-siding.gif" alt="vinyl siding repair"><?php }?>
				<?php if ($currentpage == "brickface") {?><img src="img/splash-brickface.gif" alt="stone concrete"><?php }?>
				<?php if ($currentpage == "columns") {?><img src="img/splash-railings.gif" alt="columns"><?php }?>
				<?php if ($currentpage == "awnings") {?><img src="img/splash-awnings.gif" alt="retractable awning"><?php }?>
				<?php if ($currentpage == "contact") {?><img src="img/splash-contactus.gif" alt="replacement windows"><?php }?>
				<?php if ($currentpage == "additions") {?><img src="img/splash-sunrooms.gif" alt="additions Sunrooms"><?php }?>
				<?php if ($currentpage == "gutters") {?><img src="img/splash-gutters.gif" alt="Gutters cleaning and Gutter Guards"><?php }?>
				<?php if ($currentpage == "skylights") {?><img src="img/splash-skylights.gif" alt="Skylights"><?php }?>
				<?php if ($currentpage == "doors") {?><img src="img/splash-doors.gif" alt="windows and doors"><?php }?>
				<?php if ($currentpage == "customize") {?><img src="img/splash-customize.gif" alt="roofing contractors"><?php }?>
				<?php if ($currentpage == "employment") {?><img src="img/splash-employment.gif" alt="construction employment"><?php }?>
				<?php if ($currentpage == "photogallery") {?><img src="img/splash-photo.gif" alt="photogallery"><?php }?>
				<?php if ($currentpage == "warranty") {?><img src="img/splash-warranty.gif" alt="warranty"><?php }?>
				<?php if ($currentpage == "decks") {?><img src="img/splash-decks.gif" alt="patio decks"><?php }?>
				<?php if ($currentpage == "industry") {?><img src="img/windows-replacement-windows.gif" alt="industry links"><?php }?>

				<!-- -->

			</p>
			<ul>
					<li><a href="/quote-service-contact-us.php?page=designpro" style="color:#fff;text-decoration:none;">Ask a Design Pro</a></li>
					<!---<li><a href="warranty.php#<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Warranty Information</a></li>--->
					<li><a href="/photogallery.php?page=<?php echo($currentpage)?>" style="color:#fff;text-decoration:none;">Get Inspired. Check out our photo gallery</a></li>
					<li><a href="http://jmgroveco.wordpress.com/" style="color:#fff;text-decoration:none;><img src="img/wordpress-red-icon.jpg" width="16" height="16">Check out our blog</a></li>
			</ul>
		</div>
		<div style="float:left;background: url(img/splash-left-bottom.jpg);height:10px;width:100%;overflow:hidden;"></div>
	</div>
	<div id="splash-right" style="height:144px;">

		<?php if ($currentpage == "brickface") {
			$randomnumber = rand ( 1 , 2 );	?>
			<img src="img/splash-bg-stoneveneer-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "windows") {
			$randomnumber = rand ( 1 , 4 );	?>
			<img src="img/splash-bg-windows-<?php echo($randomnumber);?>.jpg">

		<?php } elseif ($currentpage == "doors") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/splash-bg-windows-<?php echo($randomnumber);?>.jpg">

		<?php } elseif ($currentpage == "columns") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/splash-bg-columns-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "gutters") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/splash-bg-gutters-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "roofing") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/splash-bg-roofing-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "siding") {
			$randomnumber = rand ( 1 , 4 );	?>
			<img src="img/splash-bg-siding-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "skylights") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/splash-bg-skylights-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "additions") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="..img/addition-header-pic1-<?php echo($randomnumber);?>.jpg" style="width:608px; height:144px">
		<?php } elseif ($currentpage == "kitchens") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="..img/kitchen-header-pic1-<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "bathrooms") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="..img/bathroom-header-pic1-<?php echo($randomnumber);?>.gif">
		<?php } elseif ($currentpage == "basement") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="..img/basement-header-pic<?php echo($randomnumber);?>.jpg">
		<?php } elseif ($currentpage == "decks") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/deck-headers-pic1-1.jpg">

		<?php } elseif ($currentpage == "awnings") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/awning-header-pic1.jpg">

		<?php } elseif ($currentpage == "additions") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/addition-header-pic1-1.jpg">
		<?php } elseif ($currentpage == "bathroom") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/bathroom-header-pic1-1.jpg" alt="bathroom">
		<?php } elseif ($currentpage == "flooring") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/laminate_flooring_header.jpg" alt="flooring" width="620" height="190">
		<?php } elseif ($currentpage == "painting") {
			$randomnumber = rand ( 1 , 1 );	?>
			<img src="img/contemporary-painting.jpg" alt="painting" width="620" height="190">

		<?php } elseif ($currentpage == "employee") {
			$randomnumber = rand ( 1 , 2 );	?>
			<img src="img/employment_pic_<?php echo($randomnumber);?>.jpg" alt="employee" width="620" height="190">

		<?php } else { ?>
			<img src="img/kitchen-header-pic1.gif">
		<?php } ?>
	</div>
	<div id="splash-footer"></div>
</div>
<?php } ?>
