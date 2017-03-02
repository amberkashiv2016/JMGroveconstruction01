<?php if ($val0 == "solatube") {?>
<div style="width:100%;float:left;overflow:hidden;">
	<h1 style="padding: 12px 20px 0px 20px;font-size:1.4em;">Solatube Options</h1>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
		Below are some accessories to consider when installing a Solatube Skylight. A representative from J. M. Grove  will answer
		any questions you may have and assist you in selecting the right options for your home. 
	</p>
</div>
<div class="option">
	<p align="right" style="padding-right:15px;"><a href="skylights.php?type=<?php echo("$val0");?>&option=<?php echo("$val");?>&control=null"><img src="/img/button-continue.jpg" alt="Continue Customizing"></a></p>
</div>
<div class="option">
	<div class="option-image"><a href="skylights.php?type=<?php echo("$val0");?>&option=<?php echo("$val");?>&control=null"><img src="/img/skylights-ventalation.jpg" alt="Ventilation Add-On Kit"></a></div>
	<div class="option-text">
		<h2>Ventilation Add-On Kit</h2>
		<p>
			An integrated fan and lens design provides an attractive look. (Roof Vent Cap sold separately.)
		</p>
	</div>
</div>
<div class="option">
	<div class="option-image"><a href="skylights.php?type=<?php echo("$val0");?>&option=<?php echo("$val");?>&control=null"><img src="/img/skylights-lightaddon.jpg" alt="light Add-On Kit"></a></div>
	<div class="option-text">
		<h2>Light Add-On Kit</h2>
		<p>
			When equipped with light add on kit, the Solatube Daylighting System provides the convenience of a switched light for night time use. 
		</p>
	</div>
</div>
<div class="option">
	<div class="option-image"><a href="skylights.php?type=<?php echo("$val0");?>&option=<?php echo("$val");?>&control=null"><img src="/img/skylights-dimmer.jpg" alt="dimmer"></a></div>
	<div class="option-text">
		<h2>Daylight Dimmer&trade;</h2>
		<p>
			Because you don’t need 100% of the light 100% of the time, the innovative Solatube Daylight Dimmer easily controls the amount of daylight entering a room with the convenience of a switch. Our patented* variable butterfly baffle controls the light output.
		</p>
	</div>
</div>

<div class="option">
	<p align="right" style="padding-right:15px;"><a href="skylights.php?type=<?php echo("$val0");?>&option=<?php echo("$val");?>&control=null"><img src="/img/button-continue.jpg" alt="Continue Customizing"></a></p>
</div>

<?php } else {?>
<div style="width:100%;float:left;overflow:hidden;">
	<h1 style="padding: 12px 20px 0px 20px;font-size:1.4em;">Skylight Controls</h1>
</div>
	<?php if ($val0 == "electric") {?>
	<div class="option">
			<div class="option-glass"><a href="skylights.php?type=<?php echo("$val0");?>&option=<?php echo("$val");?>&control=wlc160"><img src="/img/skylights-wlc160.jpg" alt="skylights-wlc160"></a><br><strong>WLC-160 Keypad</strong></div>
			<div class="option-glass"><a href="skylights.php?type=<?php echo("$val0");?>&option=<?php echo("$val");?>&control=wli160"><img src="/img/skylights-wli160.jpg" alt="skylights-wlc160"></a><br><strong>WLI-160 Keypad</strong></div>
	</div>
	<?php } ?>
	<?php if ($val0 == "manual") {?>
	<div class="option">
			<div class="option-glass"><a href="skylights.php?type=<?php echo("$val0");?>&option=<?php echo("$val");?>&control=crankhandle"><img src="/img/skylights-crank.jpg" alt="crank handle"></a><br><strong>Crank Handle</strong></div>
			<div class="option-glass"><a href="skylights.php?type=<?php echo("$val0");?>&option=<?php echo("$val");?>&control=polecrank"><img src="/img/skylights-polecrank.jpg" alt="pole crank"></a><br><strong>Pole Crank</strong></div>
	</div>
	<?php } ?>

<?php } ?>