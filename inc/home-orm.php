<?php 

include("config.php");

	error_reporting(0);
	

if($proocutonmode === 2)//
{
$dsn = "Live";
}
else if($proocutonmode === 1)
{
$dsn = "Test";
}
else{
$dsn = "Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;";
}

//$dsn = "Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;";
//$connection = odbc_connect("Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;", $user, $password);
//$dsn = "Test";
$connection = odbc_connect($dsn, $user, $password);
if (!$connection)
  {exit("Connection Failed: " . $connection);}
  else
  {
	 
  }



	//set some  url 
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	//$home_link = "http://$_SERVER[HTTP_HOST]";
	$home_link = "http://$_SERVER[HTTP_HOST]"."/devlp";

	?>
	
<?php /* if($currentpage!="home"){?><div style="width=100%;align:center; background:#fff;" align="center">
<!--<a href="www.business.gov/industries/construction/"><img src="..img/jmg-back.gif"></a>--><img src="..img/jmg-back.gif">

</div><?php } */?>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
    
	
<script type="text/javascript">
	//var jq = Jquery.noConflict();
    $(document).ready(function() { 
		$('#reload2').click(function(){
		$('#captcha2').attr('src', 'inc/captcha_new.php?' + (new Date).getTime());
		});
	});
	</script>
	<script type="text/javascript">
	 var verifyCallback = function(response) {
        alert(response);
      };
      var widgetId1;
      var widgetId2;
      var onloadCallback = function() {
        // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
        // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
        widgetId1 = grecaptcha.render('example1', {
          'sitekey' : '6Leu6xkTAAAAAIQhI9rb5cuVdTCba-XcNsUm5oUK',
          'theme' : 'light'
        });
		
        widgetId2 = grecaptcha.render(document.getElementById('example2'), {
          'sitekey' : '6Leu6xkTAAAAAIQhI9rb5cuVdTCba-XcNsUm5oUK'
        });
        grecaptcha.render('example3', {
          'sitekey' : '6Leu6xkTAAAAAIQhI9rb5cuVdTCba-XcNsUm5oUK',
          'callback' : verifyCallback,
          'theme' : 'dark'
        });
		
      };
		function validate_form2(x_page){ 
		
		
		console.log(x_page);
		x_page =	String(x_page);
		$("#x_page").val(x_page);
		
			if (document.theForm2.fname.value==null||document.theForm2.fname.value==""){
	  			alert("Please enter your first name.");
				return false;
	  		}
			
			if (document.theForm2.lname.value==null||document.theForm2.lname.value==""){
	  			alert("Please enter your last name.");
				return false;
	  		}
			
			/*if (document.theForm2.city.value==null||document.theForm2.city.value==""){
	  			alert("Please enter your city.");
				return false;
	  		}*/
			
			if (document.theForm2.phone.value==null ||document.theForm2.phone.value==""){
	  			alert("Please enter your phone number.");
				return false;
	  		}
			
			if(document.theForm2.phone.value!="") {
			var phonecheck = document.theForm2.phone.value;			
			if(isNaN(phonecheck)) {
			     alert("Please enter valid phone number.");
			     return false;
			}
			}
			
			if (document.theForm2.email.value==null || document.theForm2.email.value==""){
	  			alert("Please enter your email address.");
				return false;
	  		}
			
			if(document.theForm2.email.value!="") {
			var emailcheck = document.theForm2.email.value;
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(emailcheck)) {
			alert('Please provide a valid email address.');
			return false;
			}
			}
			
			
			 /* var response = grecaptcha.getResponse(widgetId1);
           //recaptcha failed validation
           if(response.length == 0) {
			   alert("Are you a machine?"); return false;
		   } */
		   
		   document.theForm2.action='inc/form.php';
			$('#theForm2')[0].submit();
			
			
			
			if (document.theForm2.captcha_text.value==""){
	  			//alert("Please Fill the Captcha.");
				return false;
	  		}
		/* ajax for captcha validation */
		if(document.theForm2.captcha_text.value!="") {  
		var code = document.theForm2.captcha_text.value;
		var capatchCode=true;   
		var requesrUrl='inc/captcha-validate.php?code='+code;
		$.ajax({
		type: "GET",
		url: requesrUrl,
		success: function(data){
		if(data =="true") {
		document.theForm2.action='inc/form.php';
		$('#theForm2')[0].submit();
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
	<style>
	.form-required{color:red}
	</style>
	
	<?php
	
	?>
	
	<h4 style="padding: 5px 20px; color:#FFF; font-size:1.1em; background:url(../img/main-header-bg.png) repeat-x scroll 0 0; -webkit-border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px;
-moz-border-radius-topleft: 5px;
-moz-border-radius-topright: 5px;
border-top-left-radius: 5px;
border-top-right-radius: 5px; border-bottom:5px solid #000000;background:#b94d4f">
		Free Project Quote
	</h4>
<form id="theForm2" name="theForm2" method="post" onsubmit="return validate_form2(this)" action="inc/form.php" style="padding: 0 15px 0 15px;font-size:.8em;background:#efeeee none repeat scroll 0 0;">
	  <input type="hidden" name="frmName" value="FreeConsultation">
            <input type="hidden" name="Address2" value="">
            <input type="hidden" name="ScheduleDate" value="">
            <input type="hidden" name="iamspamblocker" value="9">
            <input type="hidden" name="TimeOfDay" value="">
			<input type="hidden" id="x_page" name="page" value="<?php echo $_GET['page'];?>">
	
		&nbsp;&nbsp;&nbsp;
	<table cellspacing="10" cellpadding="10">
			<tbody><tr>
				<td colspan="2"><span class="form-required">* </span><input type="Text" style="width:94%;" name="fname" placeholder="First Name"></td>
			</tr>
			<tr>
				<td colspan="2"><span class="form-required">* </span><input type="Text" style="width:94%;" name="lname" placeholder="Last Name"></td>
			</tr>
			<!--
			<tr>
				<td><b>City &amp; State: </b> <span title="This field is required." class="form-required">*</span></td><td><input type="Text" style="width:70px;" name="city">&nbsp;
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
					<option selected="" value="PA">PA</option>
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
			-->
			
			<tr>
				<td colspan="2"><span class="form-required">* </span><input type="Text" style="width:94%;" name="email" placeholder="Email"></td>
				
			</tr>
			<tr>
				<td colspan="2"><span class="form-required">* </span><input type="Text" style="width:94%;" name="phone"  placeholder="Phone"></td>
			</tr>
			<tr>
				<td colspan="2"><span class="form-required">* </span><input type="Text" style="width:94%;" name="zip"  placeholder="Zip"></td>
				
			</tr>
			<tr>
			<td colspan="2"><span class="form-required">* </span><b>Product Line:</b></td>
			<tr>
				<td colspan="2"><select style="width:100%;" name="product_line[]" multiple>
				<option >select</option>
				<?php
				
				$sqlx="select * FROM dbo.tblProductMaster ";
				$rsx=odbc_exec($connection,$sqlx);
				while (odbc_fetch_row($rsx))
				{
				   $productID=odbc_result($rsx,"ProductId");
				   $productName=odbc_result($rsx,"ProductName");
				 
				?>
				
				<option value="<?php echo $productID ?>"><?php echo $productName ?></option>
				
				
				<?php 
				}
				?>
				</select>
				</td>
				
			</tr>
			
			<tr>
				<td colspan="2"><span class="form-required">* </span>
				<input type="checkbox" id="coding" name="services_estimate" value="Services"> Services or 
				<input type="checkbox" id="coding" name="services_estimate" value="Estimate"> Estimate
				
				
				
				</td>
				
			</tr>
			<tr valign="top">
				<td><b>Questions &amp; Comments:</b></td><td><textarea name="comments" style="width:100px;height:65px;"></textarea></td>
			</tr>
	    		
			<tr style="display:none;">
			<td><b>Fill Captcha:</b> <span title="This field is required." class="form-required">*</span></td><td><img style="margin-top:1px !important;" id="captcha2" src="inc/captcha_new.php"> <input type="text" value="" name="captcha_text" style="height:20px !important;  position: relative; top: -4px;">
			<input type="button" style="background: url(inc/reload.gif); background-repeat: no-repeat; height:28px; width:24px; border:0px;position: relative; top: -7px;" id="reload2">
			</td>					
			</tr>
			<div style="clear:both"></div>
		
		</tbody></table>
		<div id="example1"  style="clear:both"></div>
		<p>
		<input type="submit" value="send" style="width: 100px; height: 30px;">
		<!--<input type="button" style="background: url(img/button-free-quote.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0); height:38px; width:217px; border:0px; z-index: 2000; cursor: pointer;" onclick="validate_form2();" value="">-->
	<!--	<input type="button" style="background: url(img/button-estimate.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0); height:45px; width:200px; border:0px; z-index: 2000; cursor: pointer;" onclick="validate_form2('quote');" id="x_quote" value="" data-page="quote">
		<input type="button" style="background: url(img/button-service.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0); height:33px; width:200px; border:0px; z-index: 2000; cursor: pointer;" onclick="validate_form2('service');" id="x_service" value="" data-page="service">
		-->
		</p>
		<div style="position:relative">
		<p style="">
 Already have an account? <a href="web.jmgrovebuildingsupply.com">Sign In</a> 
</p>	
<p>Or  log in with</p>
<div style="text-align:center; display:inline-block; margin-top:2px; margin-left:15px;">
                    <a style="margin:0px 2px;" href="#" target="_blank" rel="nofollow"><img src="img/social-icon/facebook-icon.png" width="24px" alt="Facebook" title="Facebook" /></a>
                    <a style="margin:0px 2px;" href="#" target="_blank" rel="nofollow"><img src="img/social-icon/gmail-icon.png" width="24px" alt="Twitter" title="Twitter" /></a>
                    <a style="margin:0px 2px;" href="#" target="_blank" rel="nofollow"><img src="img/social-icon/Instagram_icon.png" width="24px" alt="Twitter" title="Twitter" /></a>
                    <a style="margin:0px 2px;" href="#" target="_blank" rel="nofollow"><img src="img/social-icon/twitter-icon.png" width="24px" alt="Twitter" title="Twitter" /></a>
                    <a style="margin:0px 2px;" href="#" target="_blank" rel="nofollow"><img src="img/social-icon/snapchat.png" width="24px" alt="Twitter" title="Twitter" /></a>
                    <!--<a style="margin:0px 2px;" href="#" onclick="return false;"><img src="img/social-icon/pintrest-icon.png" width="24px" alt="Pintrest" title="Pintrest" /></a>
                    <a style="margin:0px 2px;" href="#" onclick="return false;"><img src="img/social-icon/youtube-icon.png" width="24px" alt="Youtube" title="Youtube" /></a>
                -->
				</div>
				
				</div>

				 
				  
		
			
	</form>
<script>
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>
