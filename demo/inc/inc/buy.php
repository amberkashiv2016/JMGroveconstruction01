<?php 
$sent = $_GET['message'];

if ($sent == "sent") {
?>
<!-- Google Code for lead Conversion Page -->
<script language="JavaScript" type="text/javascript">
	<!--
	var google_conversion_id = 1052281748;
	var google_conversion_language = "en_US";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "meRlCPTogwEQlJfi9QM";
	//-->
</script>
<script language="JavaScript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
	<img height="1" width="1" border="0" src="http://www.googleadservices.com/pagead/conversion/1052281748/?label=meRlCPTogwEQlJfi9QM&amp;guid=ON&amp;script=0"/>
</noscript>
<div style="width:100%;float:left;overflow:hidden;">
	<h4 style="padding: 12px 20px 0px 20px;font-size:1.1em;" align="center">
		Thank you for contacting J. M. Grove 
	</h4>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;" align="center">
		A representative will contact you at the soonest possible time. Feel free to call (717) 669-1930 with any further questions.
		We look forward to working with you!
		<br><br>
		<a href="index.php" style="color:#c72121;">Click here to return to our home page</a>
	</p>
</div>

<?php } elseif ($sent != "sent" || $sent == "failed") {
?>

<div style="width:100%;float:left;overflow:hidden;">
	<?php 
		$page = $_GET['page'];
		if ($page == "contact") {
	?>	
	<h4 style="padding: 12px 20px 0px 20px;font-size:1.1em;">
		<img src="/img/script-contact-us.gif">
	</h4>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
		Please fill out to form below to contact us online. <strong>As always, your private information will be kept private</strong>.
	</p>
	<?php } else { ?>
	<h4 style="padding: 12px 20px 0px 20px;font-size:1.1em;">
		Please take a minute to tell us about your project goals.
	</h4>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;">
		To complete the customization process and recieve our competitive price quote, please enter your contact information. A representative from
		J. M. Grove  will assist you in selecting features that are right for your specific house and guide you through a hassle free installation.
		We are happy to answer any questions you may have!
	</p>
	<?php } ?>
		
	
	
	<?php
		if ($sent == "failed") {
	?>
		<h4 style="padding: 12px 20px 0px 20px;font-size:1.1em;color:#c72121;" align="center">
			Sorry, your message was not sent. Please call (717) 669-1930 and a representative will assist you.
		</h4>
	<?php } ?>
	<script type="text/javascript">
		function validate_form(formname){
			with(formname){
			if (fname.value==null||fname.value==""){
	  			alert("Please enter your first name.");
				return false;
	  		}
			if (lname.value==null||lname.value==""){
	  			alert("Please enter your last name.");
				return false;
	  		}
			if (city.value==null||city.value==""){
	  			alert("Please enter your city.");
				return false;
	  		}
			if ((phone.value==null&&email.value==null)||(phone.value==""&&email.value=="")){
	  			alert("Please enter your phone number or email address.");
				return false;
	  		}
			 else {
	  			return true;
	  		}
			}
		}
	</script>
	<form style="padding: 0 15px 0 15px;font-size:.8em;" onsubmit="return validate_form(this)" action="inc/form.php" method="post">
	<input type="hidden" name="option1" value="<?php echo("$val0");?>">
	<input type="hidden" name="option2" value="<?php echo("$val");?>">
	<input type="hidden" name="option3" value="<?php echo("$val2");?>">
	<input type="hidden" name="option4" value="<?php echo("$val3");?>">
		<table cellpadding="10" cellspacing="10">
			<tr>
				<td>First Name:</td><td><input type="Text" name="fname" style="width:120px;"></td>
			</tr>
			<tr>
				<td>Last Name:</td><td><input type="Text" name="lname" style="width:200px;"></td>
			</tr>
			<tr>
				<td>City &amp; State:</td><td><input type="Text" name="city" style="width:170px;">&nbsp;
				<select name="state">
					<option value="AL">AL</option>
					<option value="AK">AK</option>
					<option value="AZ">AZ</option>
					<option value="AR">AR</option>
					<option value="CA">CA</option>
					<option value="CO">CO</option>
					<option value="CT">CT</option>
					<option value="DE">DE</option>
					<option value="DC">DC</option>
					<option value="FL">FL</option>
					<option value="GA">GA</option>
					<option value="HI">HI</option>
					<option value="ID">ID</option>
					<option value="IL">IL</option>
					<option value="IN">IN</option>
					<option value="IA">IA</option>
					<option value="KS">KS</option>
					<option value="KY">KY</option>
					<option value="LA">LA</option>
					<option value="ME">ME</option>
					<option value="MD">MD</option>
					<option value="MA">MA</option>
					<option value="MI">MI</option>
					<option value="MN">MN</option>
					<option value="MS">MS</option>
					<option value="MO">MO</option>
					<option value="MT">MT</option>
					<option value="NE">NE</option>
					<option value="NV">NV</option>
					<option value="NH">NH</option>
					<option value="NJ">NJ</option>
					<option value="NM">NM</option>
					<option value="NY">NY</option>
					<option value="NC">NC</option>
					<option value="ND">ND</option>
					<option value="OH">OH</option>
					<option value="OK">OK</option>
					<option value="OR">OR</option>
					<option value="PA" selected>PA</option>
					<option value="RI">RI</option>
					<option value="SC">SC</option>
					<option value="SD">SD</option>
					<option value="TN">TN</option>
					<option value="TX">TX</option>
					<option value="UT">UT</option>
					<option value="VT">VT</option>
					<option value="VA">VA</option>
					<option value="WA">WA</option>
					<option value="WV">WV</option>
					<option value="WI">WI</option>
					<option value="WY">WY</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Phone:</td><td><input type="Text" name="phone" style="width:150px;"></td>
			</tr>
			<tr>
				<td>Email:</td><td><input type="Text" name="email" style="width:250px;"></td>
			</tr>
			<tr valign="top">
				<td>Questions &amp; Comments:</td><td><textarea style="width:450px;height:75px;" name="comments"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><br>Please fill in this additional information to help us better serve you:</td>
			</tr>
			<tr>
				<td>Alternate Phone Number:</td><td><input type="Text" style="width:150px;" name="altphone"></td>
			</tr>
			<tr>
				<td>Best Time to Call:</td><td><input type="Text" style="width:250px;" name="besttime"></td>
			</tr>
			<tr>
				<td>Home Address:</td><td><input type="Text" style="width:250px;" name="address"></td>
			</tr>
		</table>
		<?php 
			$page = $_GET['page'];
			if ($page == "contact") {
		?>	
		<p align="right"><input type="submit" value=" " style="background: url(img/button-contact-us.jpg); height:38px; width:131px; border:0px;"></p>
		<?php } else { ?>
		<p align="right"><input type="submit" value=" " style="background: url(img/button-free-quote.jpg); height:38px; width:217px; border:0px;"></p>
		<?php } ?>
	
	</form>
</div>
<?php } ?>