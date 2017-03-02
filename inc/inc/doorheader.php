<?php if ($val00!="") { ?>
<div align="center" style="padding-bottom:5px;">
	<?php if ($val00!="") { ?>
		<span class="on"><a href="doors.php?home=<?php echo("$val00");?>" style="text-decoration:none;">Type</a></span>
	<?php } else {?>
		<span class="off">Type</span>
	<?php } ?>
	<?php if ($val0!="") { ?>
		<img src="/img/on.gif">
		<span class="on"><a href="doors.php?home=<?php echo("$val00");?>&type=<?php echo("$val0");?>" style="text-decoration:none;">Style</a></span>
	<?php } else {?>
		<img src="/img/off.gif">
		<span class="off">Style</span>
	<?php } ?>
	<?php if ($val!="") { ?>
		<img src="/img/on.gif">
		<span class="on"><a href="doors.php?home=<?php echo("$val00");?>&type=<?php echo("$val0");?>&style=<?php echo("$val");?>" style="text-decoration:none;">Color</a></span>
	<?php } else {?>
		<img src="/img/off.gif">
		<span class="off">Color</span>
	<?php } ?>
	<?php if ($val1!="") { ?>
		<img src="/img/on.gif">
		<span class="on"><a href="doors.php?home=<?php echo("$val00");?>&type=<?php echo("$val0");?>&style=<?php echo("$val");?>&color=<?php echo("$val1");?>" style="text-decoration:none;">Glass</a></span>
	<?php } else {?>
		<img src="/img/off.gif">
		<span class="off">Glass</span>
	<?php } ?>
	<?php if ($val2!="") { ?>
		<img src="/img/on.gif">
		<span class="on"><a href="doors.php?home=<?php echo("$val00");?>&type=<?php echo("$val0");?>&style=<?php echo("$val");?>&color=<?php echo("$val1");?>&glass=<?php echo("$val2");?>" style="text-decoration:none;">Hardware &amp; Accessories</a></span>
	<?php } else {?>
		<img src="/img/off.gif">
		<span class="off">Hardware &amp; Accessories</span>
	<?php } ?>
</div>
<?php } ?>
