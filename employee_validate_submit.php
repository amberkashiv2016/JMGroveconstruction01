<?php 
$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	//$connectionInfo = array( "Database"=>"JGBS", "UID"=>"liveuser", "PWD"=>"JGLive@538%");
	//$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
	mssql_select_db("JGBS",$conn);
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }

	if(isset($_POST['submit']) && $_POST['submit']!='')
	{
		print_r($_POST);
		//server side validation
		extract($_POST);
		$req_msg = '<label class="error">This field is required.</label>';
		foreach($_POST as $k=>$v){
			if(empty($v)){
				${"error_$k"} = $req_msg;
			}
		}
	
		/*for($i = 0; $i <= 7; $i++) {
			 ${"variable$i"} = "foo";
		}
		$position_error = empty($position) ? $req_msg : '';
		$source_error = empty($source) ? "This field is required" : '';
		$fname_error = empty($fname) ? "This field is required" : '';
		$NameMiddleInitial_error = empty($NameMiddleInitial) ? "This field is required" : '';
		$lname_error = empty($lname) ? "This field is required" : '';		
		$zip_error = empty($zip) ? "This field is required" : '';
		$city_error = empty($city) ? "This field is required" : '';
		$state_error = empty($state) ? "This field is required" : '';
		$reasonforleaving_error = empty($reasonforleaving) ? "This field is required" : '';
		$address_error = empty($address) ? "This field is required" : '';
		$email_error = empty($email) ? "This field is required" : '';
		$phone_error = empty($phone) ? "This field is required" : '';
		$jobtype_error = empty($jobtype) ? "This field is required" : '';
		$startdate_error = empty($startdate) ? "This field is required" : '';
		$employed_error = empty($employed) ? "This field is required" : '';
		$salaryrequirements_error = empty($salaryrequirements) ? "This field is required" : '';
		$crime_error = empty($crime) ? "This field is required" : '';
		$drugtest_error = empty($drugtest) ? "This field is required" : '';
		$messagetorecruiter_error = empty($messagetorecruiter) ? "This field is required" : '';
		$workedforjg_error = empty($workedforjg) ? "This field is required" : '';
		if($email_error=='' && !preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
		{
			$email_error = "Please enter a valid email address.";			
		}*/
	}
?>

<form name="myForm" action="employee_validate_submit.php" method="POST" enctype="multipart/form-data" id="employees_data_form">
   <div class="emp-content" style="width:650px;border:1px solid;padding: 15 0 0 15;">
      <div class="col-250 left">
         <label class="f-label">Position applying for:</label>
         <input type="hidden" name="user_type" id="user_type" value="" />
         <input type="hidden" name="position_text" id="position_text" value="" />
         <select name="position" id="position" class="emp-ddl" >
            <option value=''>select</option>
			<?php
				if(($result = mssql_query("SELECT ID, DesignationName FROM dbo.tbl_Designation WHERE IsActive = 1 ORDER BY DesignationName")) !== false){
					while( $obj = mssql_fetch_object( $result )) {
						echo '<option value="'.$obj->ID.'" '.(isset($position) && ($obj->ID==$position)?'selected="selected"':"").'>'.$obj->DesignationName.'</option>';
					}
				}
			?>
         </select>
		 <?php if(isset($error_position)) echo $error_position; ?>
      </div>
      <div class="col-250 right">
         <label class="f-label">Source:</label>
         <select name="source" class="emp-ddl" id="source">
            <option value=''>select</option>
			<?php
				if(($result = mssql_query("SELECT Id,Source FROM tblSource ORDER BY Source")) !== false){
					while( $obj = mssql_fetch_object( $result )) {						
						echo '<option value="'.$obj->Id.'" '.(isset($source) && ($obj->Id==$source)?'selected="selected"':"").'>'.$obj->Source.'</option>';
					}
				}
			?>
         </select>	
		 <?php if(isset($error_source)) echo $error_source; ?>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left">
         <div>
            <input placeholder="First Name*" class="emp-txtbox" style="width:84%;" type="text" name="fname" id="fname" value="<?php isset($fname) ? $fname : ''; ?>"/>
            <input placeholder="I*" class="emp-txtbox" type="text"  style="width:10%;" name="NameMiddleInitial" id="NameMiddleInitial" value="<?php isset($NameMiddleInitial) ? $NameMiddleInitial : ''; ?>"/>
         </div>
         <div>
            <label id="fname-error" class="error" for="fname"/>
            <label id="NameMiddleInitial-error" class="error" for="NameMiddleInitial"/>
         </div>
      </div>
      <div class="col-250 right">
         <input placeholder="Last Name*" class="emp-txtbox" type="text" name="lname" id="lname" value="<?php isset($lname) ? $lname : ''; ?>"/>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left">
	  <?php $country_array = array("AF" => "Afghanistan"); ?>
         <select name="country" id="country" class="emp-ddl">
            <option value="">Country...</option>
			<?php 
				foreach($country_array as $k=>$v)
				{
					echo ' <option value="'.$k.'">'.$v.'</option>';
				}
			?>
       <?php /*     <option value="AF">Afghanistan</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AG">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AG">Antigua &amp; Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AA">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia</option>
            <option value="BL">Bonaire</option>
            <option value="BA">Bosnia &amp; Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BR">Brazil</option>
            <option value="BC">British Indian Ocean Ter</option>
            <option value="BN">Brunei</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="IC">Canary Islands</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CD">Channel Islands</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CI">Christmas Island</option>
            <option value="CS">Cocos Island</option>
            <option value="CO">Colombia</option>
            <option value="CC">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CT">Cote D'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CB">Curacao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="TM">East Timor</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FA">Falkland Islands</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="FS">French Southern Ter</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GB">Great Britain</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GN">Guinea</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HW">Hawaii</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IA">Iran</option>
            <option value="IQ">Iraq</option>
            <option value="IR">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="NK">Korea North</option>
            <option value="KS">Korea South</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Laos</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macau</option>
            <option value="MK">Macedonia</option>
            <option value="MG">Madagascar</option>
            <option value="MY">Malaysia</option>
            <option value="MW">Malawi</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="ME">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="MI">Midway Islands</option>
            <option value="MD">Moldova</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Nambia</option>
            <option value="NU">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="AN">Netherland Antilles</option>
            <option value="NL">Netherlands (Holland, Europe)</option>
            <option value="NV">Nevis</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NW">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau Island</option>
            <option value="PS">Palestine</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PO">Pitcairn Island</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="ME">Republic of Montenegro</option>
            <option value="RS">Republic of Serbia</option>
            <option value="RE">Reunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russia</option>
            <option value="RW">Rwanda</option>
            <option value="NT">St Barthelemy</option>
            <option value="EU">St Eustatius</option>
            <option value="HE">St Helena</option>
            <option value="KN">St Kitts-Nevis</option>
            <option value="LC">St Lucia</option>
            <option value="MB">St Maarten</option>
            <option value="PM">St Pierre &amp; Miquelon</option>
            <option value="VC">St Vincent &amp; Grenadines</option>
            <option value="SP">Saipan</option>
            <option value="SO">Samoa</option>
            <option value="AS">Samoa American</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome &amp; Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="OI">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syria</option>
            <option value="TA">Tahiti</option>
            <option value="TW">Taiwan</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania</option>
            <option value="TH">Thailand</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad &amp; Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TU">Turkmenistan</option>
            <option value="TC">Turks &amp; Caicos Is</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US" selected="selected">United States of America</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VS">Vatican City State</option>
            <option value="VE">Venezuela</option>
            <option value="VN">Vietnam</option>
            <option value="VB">Virgin Islands (Brit)</option>
            <option value="VA">Virgin Islands (USA)</option>
            <option value="WK">Wake Island</option>
            <option value="WF">Wallis &amp; Futana Is</option>
            <option value="YE">Yemen</option>
            <option value="ZR">Zaire</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option> */ ?>
         </select>
      </div>
      <div class="col-250 right">
         <input placeholder="Zip*" class="emp-txtbox" type="text" name="zip" id="zip">
         </input>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left">
         <input placeholder="City*" id="city" class="emp-txtbox" type="text" name="city">
         </input>
      </div>
      <div class="col-250 right">
         <input placeholder="State*" id="state" class="emp-txtbox" type="text" name="state">
         </input>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left">
         <label  class="f-label">Reason for leaving your current job(if applicable)</label>
         <div class="clear-float"></div>
         <textarea rows="4" cols="70" class="emp-mltxtbox" placeholder="" name="reasonforleaving" id="reasonforleaving"></textarea>
      </div>
      <div class="col-250 right">
         <label class="f-label">&nbsp;</label>
         <div class="clear-float"></div>
         <div class="clear-float"></div>
         <textarea rows="4" cols="70" class="emp-mltxtbox" placeholder="Address *" name="address" id="address" name="address"></textarea>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left">
         <input placeholder="Email *" class="emp-txtbox" type="text" name="email" id="email">
         </input>
      </div>
      <div class="col-250 right">
         <input placeholder="Phone * - Ex. (111)-111-1111" style="color:#999;width:94% !important;height:25px;border:1px solid;border-radius:5px;" id="phone" name="phone" data-mask="(000)-000-0000">
         </input>
      </div>
      <div class="clear-float"></div>
      <div class="cntpref">
         <span class="cntpref_txt">Contact prefrence</span>
         <label><input type="checkbox" id="email_contact" name="email_contact"> Email</label>
         <label><input type="checkbox" id="call_contact" name="call_contact" > calls</label>
         <label><input type="checkbox" id="text_contact" name="text_contact" > Text</label>
         <label><input type="checkbox" id="mail_contact" name="mail_contact" > mail</label>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left">
         <label  class="f-label"> Job type:</label>
         <select name="jobtype" id="jobtype" class=emp-ddl>
            <option value="">select</option>
            <option value="1">Part time - Remote</option>
            <option value="2">Full time - Remote</option>
            <option value="3">Part time - Onsite</option>
            <option value="4">Full time - Onsite</option>
            <option value="5">Internship</option>
            <option value="6">Temp</option>
            <option value="7">Sub</option>
         </select>
      </div>
      <div class="col-250 right">
         <label class="f-label">&nbsp;</label>
         <div class="clear-float"></div>
         <div class="clear-float"></div>
         <input placeholder="Available Start Date *" class="emp-txtbox" type="text" name="startdate" id="startdate">
         </input>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left">
         <label class="f-label">&nbsp;</label>
         <div class="clear-float"></div>
         <div class="clear-float"></div>
         <label class="f-label" style="padding-right: 8px;">Are you currently employed?</label>
         <input type="radio" name="employed" id="employed-yes" value="yes" />
         <label for="employed-yes">Yes</label>
         <input type="radio" name="employed" id="employed-no" value="no" />
         <label for="employed-no">No</label>  
         <br/>                                              
         <label id="employed-error" class="error" for="employed"></label>
      </div>
      <div class="col-250 right">
         <label class="f-label">Salary requirements</label>
         <input placeholder="($    /Year)" class="emp-txtbox" name="salaryrequirements" id="salaryrequirements">
         </input>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left" style="margin-bottom:10px;">
         <label class="f-label">&nbsp;</label>
         <div class="clear-float"></div>
         <div class="clear-float"></div>
         <h5 style="margin-bottom: 8px;">Have you ever plead guilty to a Felony or been convicted of crime?</h5>
         <input type="radio" name="crime" id="crime-yes" value="yes"  />
         <label for="crime-yes">Yes</label>
         <input type="radio" name="crime" id="crime-no" value="no" />
         <label for="crime-no">No</label>
         <br/>
         <label id="crime-error" class="error" for="crime"></label>
      </div>
      <div class="col-250 right" style="margin-bottom:10px;">
         <label class="f-label">&nbsp;</label>
         <div class="clear-float"></div>
         <div class="clear-float"></div>
         <h5 style="margin-bottom: 8px;">Will you be able to pass a drug test and background check? </h5>
         <input type="radio" name="drugtest" id="drugtest-yes" value="yes"  />
         <label for="drugtest-yes">Yes</label>
         <input type="radio" name="drugtest" id="drugtest-no" value="no" />
         <label for="drugtest-no">No</label>
         <br/>
         <label id="drugtest-error" class="error" for="drugtest"></label>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left">
         <label class="f-label">Message to Recruiter:</label>
         <textarea rows="4" placeholder="" name="messagetorecruiter" id="messagetorecruiter" class="emp-mltxtbox"></textarea>
      </div>
      <div class="col-250 right">
         <label class="f-label">&nbsp;</label>
         <div class="clear-float"></div>
         <div class="clear-float"></div>
         <h5>Have you previously worked for JMGrove? </h5>
         <input type="radio" name="workedforjg" id="workedforjg-yes" value="yes" />
         <label for="workedforjg-yes">Yes</label>
         <input type="radio" name="workedforjg" id="workedforjg-no"  value="no" />
         <label for="workedforjg-no">No</label>
         <br/>
         <label id="workedforjg-error" class="error" for="workedforjg"></label>
      </div>
      <div class="clear-float"></div>
      <div class="col-250 left" style="margin-bottom:10px; margin-top: 15px;">
         <label class="f-label">Attach resume with References</label>
         <input type="file" style="display:block;" name="resume" id="resume" />
      </div>
      <div class="col-250 right" style="margin-bottom:10px; margin-top: 15px;">
         <label class="f-label">Attach profile picture</label>
         <input type="file" name="profilepic" style="display:block;" id="profilepic" />
      </div>
      <!--  <div class="pad-5 btn_sec" style="text-align: center;">
         <input type="submit" name="submit" value="Submit" onclick="return formValidation();" style="text-transform: uppercase; padding: 3px 52px; line-height: 32px;">
         </div> -->
      <div class="clear-float"></div>
      <div class="g-recaptcha" data-sitekey="6LeGzBMUAAAAAN2ph9MEqiwcQAFdiKs-_bWhmgdM"></div>
      <div class="clear-float"></div>
      <div class="pad-5 btn_sec" style="text-align: center;">
         <input onclick="return emailBlur();" type="submit" name="submit" value="Submit"
            style="text-transform: uppercase; padding: 3px 52px; line-height: 32px;" >
      </div>
      <div class="clear-float"></div>
   </div>
   <div class="clearboth"></div>
</form>