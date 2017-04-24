<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php $currentpage = "employment";

$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
$connectionInfo = array( "Database"=>"JGBS_Dev", "UID"=>"devloperuser", "PWD"=>"JG%987");
$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
mssql_select_db("JGBS",$conn);

if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
else
{

}

?>
<html>
<head>
    <noscript>
    This page needs JavaScript activated to work. 
    <style>div { display:none; }</style>
    </noscript>
    <title>Signup - J.M. Grove  - The Home Improvement Specialists</title>
    <link rel="stylesheet" href="../inc/grovestyle.css" type="text/css">
    <link rel="stylesheet" href="../inc/intlTelInput.css" type="text/css">
    <meta name="description" content="J.M.Grove -  replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks and much more!" />
    <meta name="keywords" content=" J.M Grove, J.M. Grove employment, J.M. Grove jobs, Installer jobs construction, windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks " />
    
    <style>

label.error {
    color: #c72121;
    display:inline-block;
    position: relative;
    font-size: 9px;
}
label#NameMiddleInitial-error {
   float:right;
}
   input[type="text"].error
{
 border-color:#c72121;
}
.cntpref {
    background: #efeeee;
    padding: 10px;
    width: 94%;
	display: inline-block;
	margin-bottom: 15px;
	text-transform: capitalize;
}
.cntpref span {
    float: left;
	width: 40%;
}
.cntpref label {
    display: inline-block;
    margin-left: 5%;
	
}
.allow-dropdown
{
width:100%;    
}
        .content_panel {
            border-radius: 7px;
            min-height: 400px;
            padding: 13px 0 35px 13px;
            font-size: 12px;
            color: #4d4a33;
            font-family: Arial, Helvetica, sans-serif;
        }

            .content_panel .login_right_panel {
                background: #efeeee;
                border-radius: 10px;
                box-shadow: 0 5px 2px #a1a0a0;
                margin: 0 auto;
                min-height: 200px;
                padding: 0 0 26px;
                width: 508px;
                float:left;
            }

            .content_panel h1 {
                background: rgba(193,82,85,1);
                background: -moz-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(193,82,85,1)), color-stop(100%, rgba(169,64,66,1)));
                background: -webkit-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                background: -o-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                background: -ms-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                background: linear-gradient(to bottom, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c15255', endColorstr='#a94042', GradientType=0 );
                border-radius: 7px 7px 0 0;
                color: #fff;
                font-size: 22px;
                font-weight: normal;
                height: 45px;
                line-height: 45px;
                margin: 0;
                padding: 0 0 0 25px;
            }

                .content_panel h1 b {
                    font-weight: normal;
                    padding: 0 0 0 18px;
                    color: #FFF;
                }

            .content_panel .login_form_panel {
                background: #efeeee;
                border-top: 10px solid #000;
                min-height: 200px;
                padding: 0 5px;
            }

                .content_panel .login_form_panel ul {
                    list-style-type: none;
                    margin: 0;
                    overflow: auto;
                    padding: 0;
                }

                    .content_panel .login_form_panel ul li.last {
                        border-right: 0 none;
                    }

                    .content_panel .login_form_panel ul li {
                        border-right: 0 solid #fff;
                        float: left;
                        margin: 0;
                        padding: 0;
                        width: 99%;
                    }

                        .content_panel .login_form_panel ul li table {
                            margin: 0 3%;
                            width: 94%;
                        }

                            .content_panel .login_form_panel ul li table tr td {
                                background: rgba(0, 0, 0, 0) url("../img/line.png") repeat-x scroll center bottom;
                                padding: 10px 15px 12px;
                            }

            .content_panel input[type="checkbox"] {
                float: left;
                height: 20px;
                line-height: 20px !important;
                margin: 0 5px 0 0 !important;
            }

            .content_panel label {
                float: left;
            }

            .content_panel .login_form_panel ul li table tr td label {
                display: inline-block;
                font-weight: normal;
                line-height: 8px;
                margin-right: 2%;
                padding-top: 5px;
                vertical-align: top;
                width: 26%;
            }

            .content_panel .login_form_panel ul li table tr td input, .content_panel .login_form_panel ul li table tr td textarea, .content_panel .login_form_panel ul li table tr td select {
                border: 1px solid #b5b4b4;
                border-radius: 5px;
                line-height: 14px;
                margin: 0;
                padding: 5px;
            }

            .content_panel a {
                color: #06c;
                text-decoration: underline;
            }

                .content_panel a:hover, .content_panel a:focus {
                    color: #09F;
                }

            .content_panel .btn_sec {
                width: 44%;
                float: left;
                height: 60px;
            }

        .btn_sec input[type="submit"] {
            background: rgba(193,82,85,1);
            background: -moz-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(193,82,85,1)), color-stop(100%, rgba(169,64,66,1)));
            background: -webkit-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            background: -o-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            background: -ms-linear-gradient(top, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            background: linear-gradient(to bottom, rgba(193,82,85,1) 0%, rgba(169,64,66,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c15255', endColorstr='#a94042', GradientType=0 );
            border-radius: 10px;
            box-shadow: 0 0 10px #a1a0a0;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            line-height: 34px;
            margin: 5px 10px;
            padding: 0 10px;
            text-decoration: none;
            border: 2px solid #FFF !important;
        }

        .col-250 {
            width: 320px;
            min-height: 35px;
            margin-bottom:15px;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .clear-float {
            float: none;
            clear: both;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .pad-5 {
            padding: 5px;
        }

        .emp-mltxtbox {
            color: #999999;
            width: 94%;
            height: 70px;
            border: 1px solid;
            border-radius: 5px;
        }

        .emp-txtbox {
            color: #999999;
            width: 94%;
            height: 25px;
            border: 1px solid;
            border-radius: 5px;
        }

        .emp-ddl {
            color: #999999;
            width: 94%;
            height: 25px;
            border: 1px solid;
            border-radius: 5px;
			margin-bottom: 10px;
        }
		h2.boxheading{font-size: 20px; margin: 0 0 12px; padding: 0;}
		label.f-label{display: inline-block; font-size: 1em; font-weight: bold; margin-bottom: 5px;}
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <div align="center">
        <div id="shell">
            <?php  include("inc/header.php"); ?>
            <div id="content">
                <?php include("inc/employee_leftmenu.php"); ?>
                <div id="content-right">
                    <div style="width:100%;height:17px;float:left;overflow:hidden;"></div>
                    
                    <div style="width:100%;float:left;overflow:hidden;font-size:.8em;">
                        <section class="content_panel" style="min-height:inherit;">
                        <form name="loginform" id="loginform" method="post" action="<?php if(strpos('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'],'demo') !== false){echo 'http://test.jmgrovebuildingsupply.com/stafflogin.aspx';} else{echo 'http://web.jmgrovebuildingsupply.com/stafflogin.aspx';} ?>">

                            <div class="login_right_panel">
                                <h1 style="text-align:left;"><b>Sign Up</b></h1>

                                <!-- Tabs starts -->
                                <div id="tabs-1" style="margin: 0 0 0 0 !important;">
                                    <div class="login_form_panel" style="margin: 0 0 0 0 !important;">
                                        <ul>
                                            <li class="last">
                                                <table cellspacing="0" cellpadding="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label>Login Id<span>*</span></label>
                                                                <input name="txtloginid" id="txtloginid" tabindex="1" placeholder="Enter email address or phone number" style="width:311px;" type="text">
                                                                <span id="RequiredFieldValidator1" style="color:Red;display:none;">Please Enter UserName</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Password<span>*</span></label>
                                                                <input name="txtpassword" id="txtpassword" tabindex="2" placeholder="Password" value="" style="width:311px;" type="password">
                                                                <span id="RequiredFieldValidator2" style="color:Red;display:none;">Please Enter Password</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-bottom:2px !important;background:none !important;">
                                                                <label></label>
                                                                <div class="btn_sec">
                                                                    <input name="btnsubmit" value="Login" id="btnsubmit" tabindex="3" style="width: 98% !important; height: 67% !important;" type="submit">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-top:0px !important;">
                                                                <label></label>
                                                                <a id="lnkForgotUsername" href="http://web.jmgrovebuildingsupply.com/ForgotuserId.aspx">Forgot Username</a> &nbsp;<a id="lnkForgotPassword" href="http://web.jmgrovebuildingsupply.com/ForgotPassword.aspx">Forgot Password</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            </form>
                        </section>
                        <?php if(isset($_GET['view'])=='formbox')
                        {
                        $style= 'block';
                        }
                        else
                        {
                        $style ='none';
                        }
                        ?>


                        
                    </div>

                </div>

            </div>
            <?php include("inc/testimonials.php"); ?>
        </div>
        <?php include("inc/footer.php"); ?>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCynLsMUZYv7PFhEHbkF5QfPXhY-FuQ2j0"></script>


    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="jquery.mask.js"></script>
    <script type="text/javascript">
	$.validator.addMethod('filesize', function (value, element, param) {
			return this.optional(element) || (element.files[0].size <=  1024 * 1024 * param)
	}, 'File size must be less than {0} MB');
    $("#employees_data_form").validate({
		  rules: {
		    fname: "required",
		    email: {
		      required: true,
		      email: true
		    },
		    lname: "required",
			/*git_uname: "required",*/
		    zip: "required",
		    state: "required",
		    city: "required",
		    address: "required",
		    phone: "required",
		    startdate: "required",
		    salary: "required",
		    position: "required",
            NameMiddleInitial: "required",
            reasonforleaving:"required",
            salaryrequirements:"required",
            messagetorecruiter:"required",
            profilepic: {
				required: true,
				filesize: 2,
				extension: "gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG"
			},
			resume: {
				required: true,
				filesize: 2,
				extension: "pdf|doc|txt|docx|PDF|DOC|TXT|DOCX|gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG"
			},
            employed:{required: true},
            crime:{required: true},
            drugtest:{required: true},
            workedforjg:{required: true},
            source: "required",
            jobtype:"required"

		  },
		  messages:{
            profilepic: {
				extension: "Please attach file having extension .gif,.jpg,.png,.jpeg. Replace this with extensions we allow."
			},
			 resume: {
				extension: "Please attach file having extension .pdf,.doc,.txt,.gif,.jpg,.png,.jpeg. Replace this with extensions we allow."
				
			}
		  }
		  /*,
		  submitHandler: function(form) {
		    form.submit();
		  }*/

		});

		$("#loginform").validate({
		  rules: {
		    txtloginid: "required",
		    txtpassword: "required",
		   },
		  submitHandler: function(form) {
		    form.submit();
		  }

		});
    </script>
    <script src="../js/intlTelInput.js"></script>
    <script type="text/javascript">
	
	function chk_gitunm_val(postn_val)
		{
			
			
			if(postn_val==8 || postn_val==9 || postn_val==10 || postn_val==11 || postn_val==12 || postn_val==13 || postn_val==21)
			{
			//alert(postn_val);
			
				if(document.myForm.git_uname.value=="")
				{
				//alert("Please Enter GitHub Username");
				jQuery("#er_chk_gitunm").css('display','none');
				jQuery("#git_uname_error").css('display','inline');
				//document.myForm.git_uname.focus();
				jQuery("#frm_sub").attr('disabled','disabled');
				return false;
				}
				if(document.myForm.git_uname.value!="")
				{
				var url="https://api.github.com/users/"+document.myForm.git_uname.value;
				//alert(url);
				jQuery("#git_uname_error").css('display','none');
				jQuery.ajax(url, {
					statusCode: {
					404: function() {
					  //alert('Not a valid github username');
					  jQuery("#er_chk_gitunm").css('display','inline');
					  //document.myForm.git_uname.focus();
					},
					200: function() {
					  //alert('Valid Username');	
					  jQuery("#er_chk_gitunm").css('display','none');	  
					}
				  }
				});	
				}
			
			}
			else {
			jQuery("#git_uname_error").css('display','none');
			jQuery("#frm_sub").removeAttr('disabled');
			}
		
		}

        function ValidateEmail(mail) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
                return (true);
            }
            alert("Please enter valid email address!");
            return (false);
        }

        function emailBlur(){
            var email = $("#email").val();

                if (email != '') {
                    //alert(email);
                    $.ajax({
                        url: "emailValidation.php",
                        type: "POST",
                        data: { email: email },
                        success: function (returnedData) {
                            //  alert('done');
                            //var returnedData = data.json;
                            if (returnedData == "Exist") {
                                var r = confirm("This email is already exists, do you want to go our staff login page?");
                                if (r == true) {
                                    window.location.href = "http://web.jmgrovebuildingsupply.com/stafflogin.aspx";
                                }
                                else
                                {
                                    
                                    $("#email").val('');
                                    $("#email").focus();
                                    $("#email").trigger('change');
                                    return false;
                                }
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            //alert('not done');
                            $('#info').html(textStatus + ", " + errorThrown);
                        }
                    });
                }
        }

        $(document).ready(function () {



            $('#country, #zip').on('change', function () {
                var str = $('#zip').val() + ',' + $("#country option:selected").text();
                var geocoder;
                var map;

                geocoder = new google.maps.Geocoder();
                var address = str;
                var city;

                geocoder.geocode({ 'address': address }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {

                        for (var component in results[0]['address_components']) {
                            for (var i in results[0]['address_components'][component]['types']) {
                                if (results[0]['address_components'][component]['types'][i] == "administrative_area_level_1") {
                                    state = results[0]['address_components'][component]['long_name'];
                                    city = results[0]['address_components'][1]['long_name'];
                                    $("#city").val(city);
                                    $("#state").val(state);
                                    $('#reasonforleaving').focus();
                                }
                            }
                        }
                    } else {
                        alert('Invalid Zipcode');
                    }
                });

            });

            $("#startdate").datepicker(
                     {
                         minDate: 0,
                         dateFormat: 'yy-mm-dd',
                         changeMonth: true,
                         changeYear: true,
                         yearRange: '1950:2050'
                     }
                 );

            var position = $("#position option:selected").text();

            $("#position_text").val(position);

            $("#otherposition").hide();



            $("#email").on("blur", function () {

                var email = $("#email").val();

                if (email != '') {
                    //alert(email);
                    $.ajax({
                        url: "emailValidation.php",
                        type: "POST",
                        data: { email: email },
                        success: function (returnedData) {
                            //  alert('done');
                            //var returnedData = data.json;
                            if (returnedData == "Exist") {
                                var r = confirm("This email is already exists, do you want to go our staff login page?");
                                if (r == true) {
                                    window.location.href = "http://web.jmgrovebuildingsupply.com/stafflogin.aspx";
                                }
                                else
                                {
                                	
                                    $("#email").val('');
                                    $("#email").focus();
                                    $("#email").trigger('change');
                                    return false;
                                }
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            //alert('not done');
                            $('#info').html(textStatus + ", " + errorThrown);
                        }
                    });
                }
            });
 
 $("#source").change(function () {

var sourcetext = $("#source option:selected").text();

$("#source_text").val(sourcetext);

 });

            $("#position").change(function () {
                //    var position = $("#position").val();
                var position = $("#position option:selected").text();

                $("#position_text").val(position);
                //  alert(position);
                switch (position) {
                    case 'Installer - Helper':
                    case 'Installer - Journeyman':
                    case 'Installer - Mechanic':
                    case 'Installer - Lead mechanic':
                    case 'Installer - Foreman':
                    case 'Commercial Only':
                    case 'SubContractor':
                        position = 'installer';
                        break;
                    default: position = 'SalesUser';
                        break;
                }
               // alert(position);
                $("#user_type").val(position);

            });
ApplyIntlPhoneValidation();

$("#txtloginid").blur(function(){
    if( $(this).val() != '' &&!ValidateEmail($(this).val()))
    {
        $(this).val('');
        $(this).focus();
        return false;
    }
    else
    {
    return true;
    }
});

// $("#email").blur(function(){
//   if($(this).val() != '' && !ValidateEmail($(this).val()))
//     {
//         $(this).val('');
//         $(this).focus();
//         return false;
//     }
//     else
//     {
// return true;
//     }

// });


});




 function checkAlreadyExistPhone() {

                //var phone = $("#phone").val();
                var phone = $("#phone").intlTelInput("getNumber");
                //alert(phone);
                if (phone != '') {
                    $.ajax({
                        url: "phoneValidation.php",
                        type: "POST",
                        data: { phone: phone },
                        success: function (data) {
                            //var returnedData = data.json;

                            if (data.trim() == "Exist") {
                                var r = confirm("This phone is already exists, do you want to go our staff login page?");
                                if (r == true) {
                                    window.location.href = "http://web.jmgrovebuildingsupply.com/stafflogin.aspx";
                                }
                                else
                                {
                                    $("#phone").val('');
                                    $("#phone").focus();
                                }
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {

                            $('#info').html(textStatus + ", " + errorThrown);
                        }
                    });

                }
            }


function    ApplyIntlPhoneValidation()
{

var telInput = $("#phone");

// initialise plugin
telInput.intlTelInput({
  utilsScript: "../js/intl-tel-utils.js",
  separateDialCode: true,
  initialCountry: "auto",
  geoIpLookup: function(callback) {
    $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  }
});

var reset = function() {

};

// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      checkAlreadyExistPhone();
    } else {
      alert('Invalid phone number');
      telInput.val('');
      return false;
    }
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);

}

function    LoginFormValidation ()
{

var d = document.loginform;
            //alert(d);
            if (d.txtloginid.value == "") {
                alert("Please Enter Login Id");
                d.txtloginid.focus();
                return false;
            }
            if (d.txtpassword.value == "") {
                alert("Please Enter Password");
                d.txtpassword.focus();
                return false;
            }

            return true;

}
        function formValidation() {
            //alert('abc');
            var d = document.myForm;
            //alert(d);
            if (d.fname.value == "") {
                alert("Please Enter First Name");
                d.fname.focus();
                return false;
            }
            if (d.lname.value == "") {
                alert("Please Enter Your Last name");
                d.lname.focus();
                return false;
            }
            if (d.email.value == "") {
                alert("Please Enter Email Address");
                d.email.focus();
                return false;
            }
			
			

            if (d.zip.value == "") {
                alert("Please Enter Your zip");
                d.zip.focus();
                return false;
            }

            if (d.state.value == "") {
                alert("Please Enter State");
                d.state.focus();
                return false;
            }

            if (d.city.value == "") {
                alert("Please Enter Your City");
                d.city.focus();
                return false;
            }
            if (d.address.value == "") {
                alert("Please Enter Your Address");
                d.address.focus();
                return false;
            }
            if (d.phone.value == "") {
                alert("Please Enter Your phone");
                d.phone.focus();
                return false;
            }
            if (d.startdate.value == "") {
                alert("Please Enter Start date");
                d.startdate.focus();
                return false;
            }

            if (d.salary.value == "") {
                alert("Please Enter Salary");
                d.salary.focus();
                return false;
            }
            if (d.position.value == "") {
                alert("Please Select Position");
                d.position.focus();
                return false;
            }

            if (document.getElementById('workyes').checked == false && document.getElementById('workno').checked == false) {
                alert("Please Select Work Status (Yes or No)");
                return false;
            }
            if (document.getElementById('licenseyes').checked == false && document.getElementById('licenseno').checked == false) {
                alert("Please Select License Status(Yes or No)");
                return false;
            }
            if (document.getElementById('crimeyes').checked == false && document.getElementById('crimeno').checked == false) {
                alert("Please Select Crime Status (Yes or No)");
                return false;
            }

            var fmVal = $('#resume').val();
            if (fmVal == '') {
                alert("Please Upload Resume");
                return false;
            }

            if (d.position.value == "17" && d.otherposition.value == "") {
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
	jQuery("#git_uname_error").css('display','none');
	jQuery.ajax(url, {
			  statusCode: {
				404: function() {
				  //alert('Not a valid github username');
				  if(document.myForm.git_uname.value=="") {
				  jQuery("#er_chk_gitunm").css('display','none');
				  } else {
				  jQuery("#er_chk_gitunm").css('display','inline');
				  }
				  jQuery("#frm_sub").attr('disabled','disabled');
				  //document.myForm.git_uname.focus();
				},
				200: function() {
				  //alert('Valid Username');	
				  jQuery("#er_chk_gitunm").css('display','none');	
				  jQuery("#frm_sub").removeAttr('disabled');	  
				}
			  }
			});		
	
	}
        </script>

</body>
<?php include_once("inc/analyticstracking.php") ?>
</html>
