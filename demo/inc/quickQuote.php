<!--<div style="width:210px;float:right;height:350px;background-color:#660000; repeat-x;overflow:hidden;">-->
<?php if ($currentpage == "kitchen") {
			$backImg ="img/marble-texture.jpg";
			$backFormColor = "#F9F9F9";
			?>

		<?php } elseif ($currentpage == "bathroom") {
			$backImg ="img/marble-texture.jpg";
			$backFormColor = "#F9F9F9";
			?>
		
		<?php } elseif ($currentpage == "additions") {
			$backImg ="img/marble-texture.jpg";
			$backFormColor = "#F9F9F9";
			?>
			
		<?php } elseif ($currentpage == "basement") {
			$backImg ="img/paper12.jpg";
			$backFormColor = "#F9F5F0";
			?>
		<?php } else { 
			$backImg ="img/paper12.jpg";
			$backFormColor = "#F9F5F0";
		} ?>
		
<script type="text/javascript">
		function validate_form(formname){
			with(formname){
			if (FullName.value==null||FullName.value==""){
	  			alert("Please enter your name.");
				return false;
	  		}
			if (Zipcode.value==null||Zipcode.value==""){
	  			alert("Please enter your zip code.");
				return false;
	  		}
			if ((DayPhone.value==null&&EmailAddress.value==null)||(DayPhone.value==""&&EmailAddress.value=="")){
	  			alert("Please enter your phone number or email address.");
				return false;
	  		}
			 else {
	  			return true;
	  		}
			}
		}
	</script>
				
<div id="quickQuote" style="background: url(<?php echo($backImg)?>); style="opacity:0.2;filter:alpha(opacity=20)">
<!--style="float:right;background: url(img/cedar-roof.jpg); height:310px;width:210px;repeat-x;overflow:hidden;">-->
<form onsubmit="return validate_form(this)" action="/inc/quickQuoteform.php" method="post" name="FreeConsultationForm" style="margin:0px;">
            <input type="hidden" name="frmName" value="FreeConsultation">
            <input type="hidden" name="Address2" value="">
            <input type="hidden" name="ScheduleDate" value="">
            <input type="hidden" name="TimeOfDay" value="">
			<!--<img src="img/Customer_Service_10.jpg width="205" height="100">-->
            <table>
                <tbody>
                <tr>
                    <td class="f10">
                        <span class="whitefontHighLight">Full Name</span> <span class="form-required">*</span><br>
                        <input class="inputText3" STYLE="background-color: <?php echo($backFormColor)?>;" maxlength="20" name="FullName" type="text" style="width:120px;">
                    </td>
                    
               </tr>	
               <tr>
                    <td class="f10">
                        <span class="whitefontHighLight">Address</span><br>
                        <input class="inputText3" STYLE="background-color: <?php echo($backFormColor)?>;" maxlength="100" name="Address1" type="text" style="width:120px;">
                    </td>
                    
               </tr>
               <tr>
                    <td class="f10">
                        <span class="whitefontHighLight">Zip/Postal Code</span> <span class="form-required">*</span><br>
                        <input class="inputText3" STYLE="background-color: <?php echo($backFormColor)?>;" maxlength="5" name="Zipcode" type="text" style="width:90px;">
                    </td>
               </tr>
               <tr>
                    <td class="f10">
                        <span class="whitefontHighLight">Phone</span> <span class="form-required">*</span><br>
						<input class="inputText3" STYLE="background-color: <?php echo($backFormColor)?>;" maxlength="12" name="DayPhone" type="text" style="width:90px;">
                    </td>
               </tr>
               <tr>
                    <td class="f10" colspan="2">
                        <span class="whitefontHighLight">E-mail address</span> <span class="form-required">*</span><br>
                        <input class="inputText3" STYLE="background-color: <?php echo($backFormColor)?>;" maxlength="255" name="EmailAddress" type="text" style="width:120px;">
                    </td>
               </tr>
               <tr>
                    <td colspan="2" class="f10">
                    <input class="inputButton" id="chk3" type="checkbox" checked="checked" name="OptinMarketing" value="on"><label for="chk3"><span class="whitefontHighLight">Yes, please keep me informed via<br> email about special offers and events.</span></label>
                    </td>
               </tr>
               <tr>
                    <td colspan="2" align="center">
                        <input onclick="" type="image" src="img/button-free-quote.jpg" alt="Schedule a replacement window consultation" style="margin:5px 0px 5px 0px;"><br>
                        
                    </td>
               </tr>
            </tbody></table>
            </form>
</div>