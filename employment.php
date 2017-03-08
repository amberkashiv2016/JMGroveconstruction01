<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "employment"; ?>
<html>
<head>
	<title>Employment - J.M. Grove  - The Home Improvement Specialists </title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="J.M.Grove -  replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks and much more!"/>
<meta name="keywords" content=" J.M Grove, J.M. Grove employment, J.M. Grove jobs, Installer jobs construction, windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks "/>
</head>

<body>
<div align="center">
	<div id="shell"> 
		<?php  include("inc/header.php"); ?>	
		<div id="content">
			<?php include("inc/employee_leftmenu.php"); ?>			
			<div id="content-right">
				<div style="width:100%;height:17px;float:left;overflow:hidden;"></div>
				<h1 style="padding-left:15px;padding-top:20px;color:#c72121;font-size:1.3em;" align="center">Employment</h1>
				<div style="width:100%;float:left;overflow:hidden;font-size:.8em;">
					<p style="padding: 5px 15px 10px 15px;font-weight:800;color:#c72121;" align="center">
						What makes J.M. Grove so great? Our outstanding employees!
					</p>
					<p style="padding: 10px 15px 10px 15px;">
						J.M. Grove is <strong>always</strong> looking for charismatic, self driven, hard working people who are looking to be successful in the home improvement field. <strong>J.M. Grove offers great benefits, competitive compensation and opportunities for both personal and professional growth</strong>. Grove offers many career opportunities and we encourage you to send us your resume, or give us a call.
					</p>		
					<p style="padding: 5px 15px 10px 15px;font-weight:800;color:#c72121;" align="center">
						We are currently looking for window, door and roofing installers, experienced only 
					</p>			
					<p style="padding: 15px 15px 5px 15px;">
						<strong>J.M. Grove provides:</strong>
					</p>
						<ul style="padding: 0px 15px 3px 39px;list-style-image: url(img/bullet-splash.gif);">
							<li>Excellent benefits</li>
							<li>Promotion opportunities</li>
                            <li>Friendly work atmosphere</li>
						</ul>		
					<h4 style="color:#c72121;padding: 10px 15px 0px 15px;">Sales Representative</h4>
					<p style="padding: 0px 15px 10px 15px;">
						As a sales representative, you will present our customers with our products and design options. You will be required to educate potential customers on the product and provide them with the best solution for their home. You will also be required to submit written proposals outlining these options and guide the customer through the entire installation process.
					</p>
					<h4 style="color:#c72121;padding: 10px 15px 0px 15px;">Product Installers</h4>
					<p style="padding: 0px 15px 10px 15px;">
						As a product installer, you will be required to install (one or many) of our product lines onto customer�s homes. Installers must do exceptional work, keep a clean work place, and be courteous to the customer. Installers must be able to occasionally educate customers on their remodeling options and provide written proposals describing these options.
					</p>	
					
<p style="padding: 0px 15px 10px 15px;" align="center">
						<!--<a href="/inc/employmentapplication.pdf" target="blank"><img src="img/button-employment.jpg" border="0"></a>-->
                        <a class="formlink fancybox" href="#formbox" onClick="document.getElementById('formbox').style.display='block';"><img src="img/button-employment.jpg" border="0"></a> 
        <div id="formbox" style="display:none;">
        <div class="innerbox">                 
           <h2 class="boxheading">Employment Application</h2>
           <form name="myForm" action="sendemployee.php" method="POST"  enctype="multipart/form-data" onSubmit="return formValidation()">
         <div class="content" style="width:600px;border:1px solid;">
  <div class="leftdiv" style="width:250px;padding-left:10px;margin-left:20px;margin-top:20px;float:left;">
    <input placeholder="First Name *"  style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;" 
     type="text" name="fname" id="fname"></input>
	 
	 
	 
	 
	 
    <input placeholder="Email *" style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;" type="text" name="email" id="email">
    </input>
    <input placeholder="State *" style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;" type="text" name="state"></input>                
<textarea rows="4" placeholder="Address *" name="address" id="address" style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;height:65px;"></textarea>
    <input placeholder="Salary Requirements *"  name="salary" id="salary" style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;" type="text"></input>
    <div style="clear:both"></div>                
   </div>
            
             <div class="rightdiv" style=" width:250px;float:right;margin-top:20px;margin-right:25px;">
               <input placeholder="LastName*" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;" 
                 type="text" name="lname" id="lname"></input>
				 <input onBlur="chk_gituname(this.value)"  placeholder="GitHub Username *" style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;" type="text" name="git_uname" id="git_uname">
    </input><span id="er_chk_gitunm" style="color:#FF0000; display:none">Not a valid github username</span>
               <input placeholder="Zip *" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;" 
               type="text" name="zip" id="zip"></input> 
               <input placeholder="City *" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;"
                type="text" name="city"></input>                  
               <input placeholder="Phone *" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;" 
               type="text" name="phone" id="phone"></input>
               <input placeholder="Start date *" readonly="true" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;" 
               type="text" name="startdate" id="startdate"></input> 
                <select style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;width:235px;" 
               name="position" id="position" onChange="showdiv(this.value);">
               <option value="">Position applying for *</option>
               <option value="20">Staffing Coordinator</option>               
               <option value="21">Entry level sales associates</option>
               <option value="22">Project Managers</option>
               <option value="1">Window & door installers</option>
               <option value="2">Roofing installers</option>
               <option value="3">Specialty roofing installers</option>
               <option value="4">Siding & aluminum installers</option>
               <option value="5">Seamless gutter installers</option>
               <option value="6">Framing installers</option>
               <option value="7">Drywall & taper installers</option>
               <option value="8">Flooring installers</option>
               <option value="9">Masonary</option>
               <option value="10">Rough carpenter</option>
               <option value="11">Finish carpenter</option>
               <option value="12">Painters</option>
               <option value="13">Electricians</option>
               <option value="14">Heating & cooling installers</option>
               <option value="15">Plumbers</option>
               <option value="16">Commercial or New Residential</option>
               <option value="17">Others</option>
              </select>
			  <!--added new-->
			  <input placeholder="Other" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;" 
               type="text" name="otherposition" id="otherposition"></input> 
              <div style="clear:both"></div>
            </div>
             
            <div style="clear:both"></div>
            
            <div id="otherdiv" class="rightdiv"  style="float:right;display:none;">
             <input type="text" name="posother" value=""/>
            </div>           
            <div class="clearboth"></div>
            
            <label style="margin-top:10px;margin-left:35px;color:#333333;font-family:Geneva, Arial, Helvetica, sans-serif;">
                 Have you previously worked for j.m grove?</label> <br>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="yes" name="worked" id="workyes"> <span>Yes</span> </input>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="no" name="worked" id="workno"><span> No</span> </input>  
            <div class="clearboth"></div>
            <label style="margin-top:10px;margin-left:35px;color:#333333;font-family:Geneva, Arial, Helvetica, sans-serif;">Do you have a liscense?</label> <br>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="Yes" name="license" id="licenseyes"><span> Yes</span> </input>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="No" name="license" id="licenseno"><span> No</span> </input> 
            <div class="clearboth"></div>    
            <label style="margin-top:10px;margin-left:35px;color:#333333;font-family:Geneva, Arial, Helvetica, sans-serif;">
                      Have you ever plead guilty or been convicted of a crime?</label> <br>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="Yes" name="crime" id="crimeyes"><span> Yes</span> </input>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="No" name="crime" id="crimeno" ><span> No </span></input> 
            
            <div class="clearboth"></div>
             
            <label style="margin-top:10px;margin-left:35px;color:#333333;font-family:Geneva, Arial, Helvetica, sans-serif;">Attach Resume with References</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="file" name="resume" id="resume" value="upload" style="margin:20px 75px;color:#333333;float:left;border-radius:10px;border:none;"/>
             
            <div class="clearboth"></div> 
            <input id="frm_sub" type="submit" name="submit" value=""  onclick="return formValidation();" 
			style="float:right; margin-top:-44px;margin-right:130px;width:100px;background: url(img/button-submit.jpg); height:38px; width:217px; border:0px;">
            <div style="clear:both"></div>
           </div>
           </form>
        </div>
        </div>
					</p>	
				</div>
				<p style="padding-bottom:20px;">&nbsp;</p>
			</div>
			<?php include("inc/testimonials.php"); ?>	
		</div>
		<?php include("inc/footer.php"); ?>	
	</div>
</div>

</body>
<?php include_once("inc/analyticstracking.php") ?>
</html>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script language="JavaScript" type="text/javascript">
	$(document).ready(function() {
						$(function() {
						$("#startdate").datepicker(
						  { 
						 	minDate :  0,
							dateFormat: 'yy-mm-dd',
							changeMonth: true,
							changeYear: true,
							yearRange: '1950:2050' 
						  }
						  );
						});
						});
$(document).ready(function(){
$("#otherposition").hide();

$("#position").change(function(){
			 var position=$("#position").val();
			//alert(position);
			
			 if(position=='17')
			 {
			 $("#otherposition").show();
			 //alert("hereshow");
			 }
			 else
			 {
				
			 $("#otherposition").hide();
			 //alert("herehide");
			 }
			 
			 });		
});

			
	function formValidation()
	{
		//alert('abc');
		var d=document.myForm;
		//alert(d);
		if(d.fname.value =="")
		{
			alert("Please Enter First Name");
			d.fname.focus();
			return false;
		}
		if(d.lname.value=="")
		{
			alert("Please Enter Your Last name");
			d.lname.focus();
			return false;
		}
		if(d.email.value=="")
		{
			alert("Please Enter Email Address");
			d.email.focus();
			return false;
		}
		if(d.git_uname.value=="")
		{
			alert("Please Enter GitHub Username");
			d.git_uname.focus();
			return false;
		}
		if(d.git_uname.value!="")
		{
			var url="https://api.github.com/users/"+d.git_uname.value;
			//alert(url);
	
			jQuery.ajax(url, {
			  	statusCode: {
				404: function() {
				  alert('Not a valid github username');
				  jQuery("#er_chk_gitunm").css('display','inline');
				  
				},
				200: function() {
				  //alert('Valid Username');	
				  jQuery("#er_chk_gitunm").css('display','none');	  
				}
			  }
			});	
		}
		
		
		if(d.zip.value=="")
		{
			alert("Please Enter Your zip");
			d.zip.focus();
			return false;
		}
		
		if(d.state.value=="")
		{
			alert("Please Enter State");
			d.state.focus();
			return false;
		}
		
		if(d.city.value=="")
		{
			alert("Please Enter Your City");
			d.city.focus();
			return false;
		}
			if(d.address.value=="")
		{
			alert("Please Enter Your Address");
			d.address.focus();
			return false;
		}
		if(d.phone.value=="")
		{
			alert("Please Enter Your phone");
			d.phone.focus();
			return false;
		}
		if(d.startdate.value=="")
		{
			alert("Please Enter Start date");
			d.startdate.focus();
			return false;
		}
		
			if(d.salary.value=="")
		{
			alert("Please Enter Salary");
			d.salary.focus();
			return false;
		}
		if(d.position.value=="")
		{
			alert("Please Select Position");
			d.position.focus();
			return false;
		}
		
if(document.getElementById('workyes').checked == false && document.getElementById('workno').checked == false) {
alert("Please Select Work Status (Yes or No)");
return false;
}
if(document.getElementById('licenseyes').checked == false && document.getElementById('licenseno').checked == false) {
alert("Please Select License Status(Yes or No)" );
return false;
}
if(document.getElementById('crimeyes').checked == false && document.getElementById('crimeno').checked == false) {
alert("Please Select Crime Status (Yes or No)");
return false;
}



	
		var fmVal = $('#resume').val(); 
		if(fmVal=='')
		{
		alert("Please Upload Resume");
		return false;
		}
		
if(d.position.value =="17" && d.otherposition.value =="")
		{
			alert("Please Enter Position Name");
			d.otherposition.focus();
			return false;
		}
		
		
		
		


		return true;
	}
	
	function chk_gituname(uname_val)
	{
	//alert(uname_val);
	var url="https://api.github.com/users/"+uname_val;
	
	jQuery.ajax(url, {
			  statusCode: {
				404: function() {
				  alert('Not a valid github username');
				  jQuery("#er_chk_gitunm").css('display','inline');
				  jQuery("#frm_sub").attr('disabled','disabled');
				},
				200: function() {
				  //alert('Valid Username');	
				  jQuery("#er_chk_gitunm").css('display','none');	
				  jQuery("#frm_sub").removeAttr('disabled');	  
				}
			  }
			});		
	
	//jQuery.post('chk_github_uname_tpl.php',{git_uname_val:uname_val},function(d){
    //window.location.reload();
    
	
	
	
	
	}

</script>