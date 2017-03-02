<div id="content-left">
<?php //echo $currentpage;?>
	<ul style="padding: 10px 0px 5px 0px; background-color: #000;">
		<strong style="padding-left:15px;color:#fff;font-size:18px;">Interior Remodeling</strong>
        	<li><a href="/additions-sunrooms.php" <?php if($currentpage=="bathroom"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Additions/Sunrooms</a></li>
		<li><a href="/bathroom-remodeling.php" <?php if($currentpage=="bathroom"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Bathroom Remodeling</a></li>
		<?php if($currentpage=="bathroom" || $currentpage=="BathroomTileFlooring" || $currentpage=="BathroomCabinetryBathShelving" || $currentpage=="BathroomPlumbingFixturesShowerBathtub" || $currentpage=="BathroomShowerGlassDoor" || $currentpage=="BathroomLighting" || $currentpage=="BathroomAccessoriesTrimMolding" || $currentpage=="Painting"){ ?>
			<li style="padding-left:42px;"><a href="/bathroom-tile-flooring.php" <?php if($currentpage=="BathroomTileFlooring"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Bathroom Tile & Flooring</a></li>
			<li style="padding-left:42px;"><a href="/bathroom-cabinetry-bath-shelving.php" <?php if($currentpage=="BathroomCabinetryBathShelving"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Bathroom Cabinetry & Bath Shelving</a></li>
			<li style="padding-left:42px;"><a href="/bathroom-plumbing-fixtures-shower-bathtub.php" <?php if($currentpage=="BathroomPlumbingFixturesShowerBathtub"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Bathroom Plumbing Fixtures, Shower & Bathtub</a></li>
			<li style="padding-left:42px;"><a href="/bathroom-shower-glass-door.php" <?php if($currentpage=="BathroomShowerGlassDoor"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Bathroom Shower Glass Door</a></li>
			<li style="padding-left:42px;"><a href="/bathroom-lighting.php" <?php if($currentpage=="BathroomLighting"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Bathroom Lighting</a></li>
			<li style="padding-left:42px;"><a href="/bathroom-accessories-trim-molding.php" <?php if($currentpage=="BathroomAccessoriesTrimMolding"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Bathroom Accessories & Trim Molding</a></li>
			<li style="padding-left:42px;"><a href="/painting.php" <?php if($currentpage=="Painting"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Painting</a></li>
		<?php } ?>
		<li><a href="/kitchen-remodeling.php" <?php if($currentpage=="kitchen"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Kitchen Remodeling</a></li>
		<li><a href="/basement-remodeling.php" <?php if($currentpage=="basement"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Basement Remodeling</a></li>
        <li><a href="/paint-drywall-molding.php" <?php if($currentpage=="flooring"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Paint, Drywall, molding</a></li>
        <li><a href="/electrical.php" <?php if($currentpage=="flooring"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Electrical</a></li>
        <li><a href="/plumbing.php" <?php if($currentpage=="flooring"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Plumbing</a></li>
		
		<li><a href="/flooring-home.php" <?php if($currentpage=="flooring"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Flooring</a></li>
        
		<strong style="color: rgb(255, 255, 255); font-size: 18px; padding-left: 15px; display: block; margin-top: 5px;">Exterior Remodeling</strong>
		<?php /* if($currentpage!="home"){?><li><a href="/index.php">Home</a></li><?php  }*/ ?>
		
       <!-- <li><a href="/replacement-windows.php" <?php if($currentpage=="windows"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Windows</a></li>-->
		<?php /* ?>
		<?php if($currentpage=="windows"){?>
        <?php @$gettype = $_GET['type']; ?>
		        <li style="padding-left:42px;"><a href="/replacement-windows.php?type=replacement" <?php if($gettype=="replacement"){?>style="color:#c72121;padding-top:0px;padding-bottom:0px;background: url(img/bullet-red1.jpg) no-repeat;"<?php }?>>Replacement Windows</a></li>
		<li style="padding-left:42px;"><a href="/replacement-windows.php?type=storm" <?php if($gettype=="storm"){?>style="color:#c72121;padding-top:0px;padding-bottom:0px;background: url(img/bullet-red1.jpg) no-repeat;"<?php }?>>Storm Windows</a></li>
		<?php } ?>
<?php */ ?>
<!---window---->
						<li><a href="http://jmgroveconstruction.com/replacement-windows.php" <?php if($currentpage=="Windows"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Windows</a></li>
		<?php if($currentpage=="Windows" || $currentpage=="ReplacementWindows" || $currentpage=="StormWindows"){ ?>
			<li style="padding-left:42px;"><a href="http://jmgroveconstruction.com/replacement-windows.php?type=replacement" <?php if($currentpage=="ReplacementWindows"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Replacement Windows</a></li>
			<li style="padding-left:42px;"><a href="http://jmgroveconstruction.com/replacement-windows.php?type=storm" <?php if($currentpage=="StormWindows"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Storm Windows</a></li>
			
			
		<?php } ?>
		<!---window----close---->
		
		<!---door---->
						<li><a href="http://jmgroveconstruction.com/doors.php" <?php if($currentpage=="Doors"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Doors</a></li>
		<?php if($currentpage=="Doors" || $currentpage=="EntryDoors" || $currentpage=="StromDoors" || $currentpage=="PadioDoors"){ ?>
			<li style="padding-left:42px;"><a href="http://jmgroveconstruction.com/doors.php?home=entry" <?php if($currentpage=="EntryDoors"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Entry Doors</a></li>
			<li style="padding-left:42px;"><a href="http://jmgroveconstruction.com/doors.php?home=storm&type=standard" <?php if($currentpage=="StromDoors"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Strom Doors</a></li>
			<li style="padding-left:42px;"><a href="http://jmgroveconstruction.com/doors.php?home=patio&type=standard" <?php if($currentpage=="PadioDoors"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Padio Doors</a></li>
			
		<?php } ?>
		<!---dooor----close---->
		
		
		
		
		<li><a href="/roofing-shingles-home.php" <?php if($currentpage=="roofing"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Roofing</a></li>
		<li><a href="/vinyl-siding-home.php" <?php if($currentpage=="siding"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Siding</a></li>
        
      <li><a href="/decks-railings-columns.php" <?php if($currentpage=="decks"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Decks,Railings &amp; Columns</a></li>  
        
		<li><a href="/skylights-home.php" <?php if($currentpage=="skylights"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Skylights</a></li>
		<li><a href="/gutters-gutterguards.php" <?php if($currentpage=="gutters"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Gutter &amp; Gutter Guards</a></li>
		<li><a href="/masonry-hardscaping.php" <?php if($currentpage=="awnings"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Masonry & Hardscaping</a></li>
		
		
		<?php /*?><li><a href="/brickface-stone-veneer-home1.php" <?php if($currentpage=="brickface"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Brickface &amp; Stone Veneer</a></li>
		<!---<li><a href="/basement-remodeling.php" <?php if($currentpage=="concretemasonry"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Concrete & Masonry</a></li>-->
		<!--<li><a href=""><?php if($currentpage=="fencing"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Fencing</a></li>-->		
				
		
		<!--<li><a href="/painting-home.php" <?php if($currentpage=="painting"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Flooring</a></li>-->
		<!--<li><a href="/decks-railings-home.php" <?php if($currentpage=="drywall"){?>style="color:#c72121;padding-left:16px;font-size:.8em;background: url(img/bullet-red1.jpg) no-repeat;font-weight:800;"<?php }?>>Dry Walls & Painting</a></li>--><?php */?>
		<strong style="color: rgb(255, 255, 255); font-size: 18px; padding-left: 15px; display: block; margin-top: 5px;">Professional Services</strong>
		<!---<li><a href="#">Other Services</a></li>--->
        
       <li > <a style="background:none;" href="http://jmgroverealestate.com/"><img src="inc/img/real-estat-btn.png"></a></li>
	</ul>
    
     
<!--
    <div class="realestate_btn">
    <a href="http://jmgroverealestate.com/"><img src="inc/img/realestate-btn.png"></a></div>
-->
    
    <!--------------------------------realestate button--------------------------- -->
    
    
	<div style="width=100%;align:center; background:#000;" align="center">
<img src="img/jmg-links.gif">
</div>
	<?php 
	//set some  url 
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	//$home_link = "http://$_SERVER[HTTP_HOST]";
	$home_link = "http://$_SERVER[HTTP_HOST]"."/devlp";

	?>

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
			
			if (document.theForm2.city.value==null||document.theForm2.city.value==""){
	  			alert("Please enter your city.");
				return false;
	  		}
			
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
			
			
			 var response = grecaptcha.getResponse(widgetId1);
           //recaptcha failed validation
           if(response.length == 0) {
			   alert("Are you a machine?"); return false;
		   }
		   
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
	 
    
    
    <div class="structuresleft">
                              <!-- testinmonial
                              <div style="width:310px;float:left;height:200px;background: url(img/home-testimonials.jpg) repeat-x;overflow:hidden;">-->
						<strong style="padding: 10px 0px 5px 20px; color:#c72121;font-size:1.1em;  display:inline-block; clear:both;">Customer Testimonials</strong>
						<p style="padding:0px 15px 5px 12px; font-size:.8em;">
							"I'm so happy with the windows my wife and I had installed in our home. Not only does our house 
							look much better, our energy bill is 40% less and the value of our home has increased as well!" 
							<em>Tyler C., Glassboro, NJ</em>
						</p>
					<!--</div>
                    slidercode stop-->
                        </div>
</div>
