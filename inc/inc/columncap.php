<div style="width:100%;float:left;overflow:hidden;">
	<h1 style="padding: 0px 20px 0px 20px;font-size:1.4em;">Column Cap Styles</h1>
	<h4 style="padding: 12px 20px 0px 20px;font-size:1.1em;">
		Truly love where you live
	</h4>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
		Columns provide the elegance you want in a low- maintenance column. They can be used to create a classical mood on homes, churches, office buildings, schools, libraries, motels, museums and other public buildings. Residential or commercial, indoors or out, beautiful aluminum columns are the low-cost way to add a touch of class to your architectural designs.
	</p>
</div>
<?php if ($val == "roundsmooth" || $val == "roundfluted" || $val == "squaresmooth" ) {?>
<div class="option">
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=standard&color=null"><img src="img/col-roundsmooth.jpg" alt="fence railing"></a>
		<br><h2>Standard</h2>		
	</div>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=ionic&color=null"><img src="img/col-ionic-rs.jpg" alt="fence railing"></a>
		<br><h2>Ionic</h2>		
	</div>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=corinthian&color=null"><img src="img/col-corinthian-sc.jpg" alt="fence railing"></a>
		<br><h2>Corinthian</h2>
	</div>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=scamozzi&color=null"><img src="img/col-scamozzi-sc.jpg" alt="fence railing"></a>
		<br><h2>Scamozzi</h2>
	</div>
</div>
<div class="option">
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=temple&color=null"><img src="img/col-temple-sc.jpg" alt="fence railing"></a>
		<br><h2>Temple</h2>		
	</div>
</div>
<?php } else { ?>
<div class="option">
	<?php if ($val == "alroundfluted") {?>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=standard&color=null"><img src="img/col-roundsmooth.jpg" alt="fence railing"></a>
		<br><h2>Standard</h2>		
	</div>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=doric&color=null"><img src="img/col-doric.jpg" alt="fence railing"></a>
		<br><h2>Doric</h2>		
	</div>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=corinthian&color=null"><img src="img/col-corinthian-sc.jpg" alt="fence railing"></a>
		<br><h2>Corinthian</h2>
	</div>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=scamozzi&color=null"><img src="img/col-scamozzi-sc.jpg" alt="fence railing"></a>
		<br><h2>Scamozzi</h2>
	</div>
	<?php } else { ?>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=standard"><img src="img/col-roundsmooth.jpg" alt="fence railing"></a>
		<br><h2>Standard</h2>		
	</div>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=doric"><img src="img/col-doric.jpg" alt="fence railing"></a>
		<br><h2>Doric</h2>		
	</div>
	<div class="option-image" style="width:157px;" align="center"><a href="columns-railings.php?type=<?php echo("$val0");?>&style=<?php echo("$val");?>&cap=charleston"><img src="img/col-charleston.jpg" alt="fence railing"></a>
		<br><h2>Charleston</h2>
	</div>
	<?php } ?>
</div>
<?php } ?>