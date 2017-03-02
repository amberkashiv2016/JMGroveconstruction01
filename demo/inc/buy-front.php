<?php 
$sent = $_GET['message'];

if ($sent == "sent") {
?>
<!-- Google Code for lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1011279056;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "_e79CICi8wEQ0Mmb4gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1011279056/?label=_e79CICi8wEQ0Mmb4gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<div style="width:100%;float:left;overflow:hidden;">
	<h4 style="padding: 12px 20px 0px 20px;font-size:1.1em;" align="center">
		Thank you for contacting J. M. Grove 
	</h4>
	<p style="padding: 0px 20px 10px 20px;font-size:.8em;" align="center">
		
		A representative will contact you at the soonest possible time. Feel free to call (215) 274-5182 with any further questions.
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
	<h4 style="padding: 5px 20px; color:#FFF; font-size:1.1em; background:url(../img/main-header-bg.png) repeat-x scroll 0 0; -webkit-border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px;
-moz-border-radius-topleft: 5px;
-moz-border-radius-topright: 5px;
border-top-left-radius: 5px;
border-top-right-radius: 5px; border-bottom:5px solid #000000;">
		Quick Quote
	</h4>
	<?php /*?><p style="padding: 0px 20px 10px 20px;font-size:.8em;">
		<!--<?php
			$page = $_GET['page'];
			$type = $_GET['type'];
			$style = $_GET['style'];
			$color = $_GET['color'];
			echo $page; 
			echo " " + $type + " " + $style + " " + $color;
		?>-->
		<br>
		To complete the customization process and recieve our competitive price quote, please enter your contact information. A representative from
		J. M. Grove  will assist you in selecting features that are right for your specific house and guide you through a hassle free installation.
		We are happy to answer any questions you may have!
		<br>
		<br>
		<br>
		Provide either your email address or phone number.
	</p><?php */?>
	<?php } ?>
		
	
	
	<?php
		if ($sent == "failed") {
	?>
		<h4 style="padding: 12px 20px 0px 20px;font-size:1.1em;color:#c72121;" align="center">
			Sorry, your message was not sent. Please call (215) 274-5182 and a representative will assist you.
		</h4>
	<?php } ?>
	<script type="text/javascript">
	//var jq = Jquery.noConflict();
    $(document).ready(function() { 
		$('#reload').click(function(){
		$('#captcha').attr('src', 'inc/captcha_new.php?' + (new Date).getTime());
		});
	});
	</script>
	<script type="text/javascript">
		function validate_form(){ 
			if (document.theForm.fname.value==null||document.theForm.fname.value==""){
	  			alert("Please enter your first name.");
				return false;
	  		}
			
			if (document.theForm.lname.value==null||document.theForm.lname.value==""){
	  			alert("Please enter your last name.");
				return false;
	  		}
			
			if (document.theForm.city.value==null||document.theForm.city.value==""){
	  			alert("Please enter your city.");
				return false;
	  		}
			
			if (document.theForm.phone.value==null ||document.theForm.phone.value==""){
	  			alert("Please enter your phone number.");
				return false;
	  		}
			
			if(document.theForm.phone.value!="") {
			var phonecheck = document.theForm.phone.value;			
			if(isNaN(phonecheck)) {
			     alert("Please enter valid phone number.");
			     return false;
			}
			}
			
			if (document.theForm.email.value==null || document.theForm.email.value==""){
	  			alert("Please enter your email address.");
				return false;
	  		}
			
			if(document.theForm.email.value!="") {
			var emailcheck = document.theForm.email.value;
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(emailcheck)) {
			alert('Please provide a valid email address.');
			return false;
			}
			}
			
			if (document.theForm.captcha_text.value==""){
	  			alert("Please Fill the Captcha.");
				return false;
	  		}
		/* ajax for captcha validation */
		if(document.theForm.captcha_text.value!="") {  
		var code = document.theForm.captcha_text.value;
		var capatchCode=true;   
		var requesrUrl='inc/captcha-validate.php?code='+code;
		$.ajax({
		type: "GET",
		url: requesrUrl,
		success: function(data){
		if(data =="true") {
		document.theForm.action='inc/form.php';
		$('#theForm').submit();
		}
		else{
		alert('The Captcha Code entered is not correct. Please try again');
		return false;
		}	  
		}

		});
		}
				
	 else {
	  		return true;
	  		}
		}
	</script>
	<form style="padding: 10px 8px 10px 8px;font-size:.8em; background:#efeeee; margin-bottom:15px;" name="theForm" id="theForm" action="" method="post">
	<input type="hidden" name="option1" value="<?php echo("$val0");?>">
	<input type="hidden" name="option2" value="<?php echo("$val");?>">
	<input type="hidden" name="option3" value="<?php echo("$val2");?>">
	<input type="hidden" name="option4" value="<?php echo("$val3");?>">
	<input type="hidden" name="iamspamblocker" value="9">
		<table cellpadding="10" cellspacing="10" style="width:100%;">
			<tr>
				<td style="font-size:13px; width:100px;"><b>First Name:</b> <span class="form-required" title="This field is required.">*</span></td><td><input type="Text" name="fname" style="width:170px; border: 1px solid #B5B4B4;"></td>
			</tr>
			<tr>
				<td><b>Last Name:</b> <span class="form-required" title="This field is required.">*</span></td><td><input type="Text" name="lname" style="width:170px; border: 1px solid #B5B4B4;"></td>
			</tr>
			<tr>
				<td><b>City &amp; State: </b> <span class="form-required" title="This field is required.">*</span></td><td><input type="Text" name="city" style="width:115px; border: 1px solid #B5B4B4;">&nbsp;
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
				<td><b>Phone:</b> <span class="form-required" title="This field is required.">*</span> </td><td><input type="Text" name="phone" style="width:170px; border: 1px solid #B5B4B4;"></td>
			</tr>
			<tr>
				<td><b>Email:</b> <span class="form-required" title="This field is required.">*</span></td><td><input type="Text" name="email" style="width:170px; border: 1px solid #B5B4B4;"></td>
				
			</tr>
			<tr valign="top">
				<td><b>Questions &amp; Comments:</b></td><td><textarea style="width:170px;height:60px;border: 1px solid #B5B4B4;" name="comments"></textarea></td>
			</tr>
			<tr>
			<td><b>Fill Captcha:</b> <span class="form-required" title="This field is required.">*</span></td>
			<td><img style="margin-top:1px !important; margin-left: 0px;" id="captcha" src="inc/captcha_new.php"> 
			<input type="text" value="" name="captcha_text" style="  float: left;height: 20px !important;left: 0px;position: relative;text-align: left;top: -1px;">
			<input type="button" style="background: url(inc/reload.gif); background-repeat: no-repeat; height:28px; width:24px; border:0px;position: relative; top: -9px; left: 6px;" id="reload">
			</td>					
			</tr>		
		</table>
			<?php /*?><tr>
				<td colspan="2"><br>Please fill in this additional information to help us better serve you:</td>
			</tr>
			<tr>
				<td>How did you hear about us?</td><td>
					<select name="refer">
						<option value="online" selected>Online Search</option>
						<option value="family">Friend or Family Member</option>
						<option value="phonebook">Phonebook</option>
						<option value="other">Other</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alternate Phone Number:</td><td><input type="Text" style="width:150px;" name="altphone"></td>
			</tr>
			<tr>
				<td>Best Time to Call:</td><td><input type="Text" style="width:250px;" name="besttime"></td>
			</tr>
			<tr>
				<td>Home Address:</td><td><input type="Text" style="width:250px;" name="address"></td>
			</tr><?php */?>
		</table>
		<?php 
			$page = $_GET['page'];
			if ($page == "contact") {
		?>	
		<p align="right"><input type="button" value=" " onClick="validate_form();" style="background: url(img/button-contact-us.jpg); height:38px; width:218px; border:0px;"></p>
		<?php } else { ?>
		<p align="right" style="margin-right:0px;"><input type="button" value=" " onClick="validate_form();" style="background: url(img/button-free-quote.jpg); height:38px; width:218px; border:0px;"></p>
		<?php } ?>
	
	</form>
</div>
<?php } ?>