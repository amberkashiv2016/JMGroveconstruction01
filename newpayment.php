<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php 

//start of code to insert in sql server
 $serverName = "QSS27\\SQLEXPRESS"; //serverName\instanceName

    $connectionInfo = array( "Database"=>"jgrove_JGP", "UID"=>"sa", "PWD"=>"sa12345");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
         die( print_r( sqlsrv_errors(), true));
    }
	else
	{//echo "Success";
	}
	
$currentpage = "payment"; 
 date_default_timezone_set("Asia/Kolkata");
$now=date("YmdHis");
//echo $now;


 $url = "https://sandbox.synapsepay.com/api/v3/user/search";
 
   $payload = array(
    'client'=>array(
      'client_id'=>'zMHiLA2Uyb9o6ydB5uSX',
      'client_secret'=>'XtbwVbNfrby9QU3B9zS4ltvn9OcCniHQciro8ocC'
    ),
    'filter' => array(
      'page' => 1,
      'exact_match' => True,
      'query' => ''.$_REQUEST['username'].''
    )
  );
  $payload=json_encode($payload);
//
//echo "<pre>";
//print_r($payload);
//exit;
if($_REQUEST['pay_submit']!='')
{
$legal=array();
$cnames=array();
$id1_array=array();
$id2_array=array();
$type_arr=array();
$allowed_arr=array();

$sUrl= "https://sandbox.synapsepay.com/api/v3/user/search";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$sUrl);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    $result = curl_exec($ch);
    curl_close($ch);

	
$string=json_decode($result);
//print_r($string);
//exit;
$i=0;
//echo "here";
while($id=$string->users[$i]->_id!='')
{
$id1=$string->users[$i]->_id;
//print_r($id);

$id1=json_encode($id1);
//echo "<br>";
$id1=substr($id1,9,24);

array_push($id1_array,$id1);
//echo $id;
//echo "<br>oauth_key".$oauth_key;
$id2=$string->users[$i]->nodes[0]->_id;
//echo "<br>";
$id2=json_encode($id2);
$id2=substr($id2,9,24);

array_push($id2_array,$id2);
//echo $id;


$legal_names=$string->users[$i]->legal_names[0];

array_push($legal,$legal_names);
//echo $legal_names;

$name=$string->users[$i]->client->name;
array_push($cnames,$name);

//echo $name;

$allowed=$string->users[$i]->nodes[0]->allowed;
//echo "<br>".$allowed;
array_push($allowed_arr,$allowed);
$type=$string->users[$i]->nodes[0]->type;
//echo "<br>".$type;
array_push($type_arr,$type);
$i++;
if($i>500)
{break;}
}
}



?>
<html>
<head>
	<title>Customer Section - J.M. Grove  - The Home Improvement Specialists </title>
	<link rel="stylesheet" href="inc/grovestyle.css" type="text/css"><meta name="description" content="J.M.Grove -  replacement windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks and much more!"/>
<meta name="keywords" content=" J.M Grove, J.M. Grove employment, J.M. Grove jobs, Installer jobs construction, windows, doors, roofing, vinyl siding, gutters, awnings, brick, stone veneer, skylights, additions, decks "/>
</head>

<body>
<div align="center">
	<div id="shell"> 
		<?php // include("inc/header.php"); ?>	
		<div id="content">
			<?php //include("inc/employee_leftmenu.php"); 
			?>
						
			<div id="content-right">
				<div style="width:100%;height:17px;float:left;overflow:hidden;"></div>
				<h1 style="padding-left:15px;padding-top:20px;color:#c72121;font-size:1.3em;" align="center">Payment Section</h1>
				<div style="width:100%;float:left;overflow:hidden;font-size:.8em;">
				<?php
				if($_REQUEST['trans']!='')
			{echo "Transaction success<br>";}
				
				$sql1 = "SELECT * FROM dbo.tblShuttersEstimate where TotalPrice >'500' order by Id DESC";
				
				$query = sqlsrv_query($conn, $sql1);
				
				if ($query === false){  
				exit("<pre>".print_r(sqlsrv_errors(), true));
				}
				
				 
				?>
					<table style="border:thin solid;">
					<tr><td style="border:thin solid;"></td>
					<td style="border:thin solid;">Total Contract Amount</td>
					<td style="border:thin solid;">First 1/3 deposit</td>
					<td style="border:thin solid;">Second 1/3 deposit</td>
					<td style="border:thin solid;">Final 1/3 Escrow deposit</td>
					<td style="border:thin solid;">Change Orders</td></tr>
					
				<?php
				$i=0;
				  while ($row = sqlsrv_fetch_array($query))
				{ ?> 
					
					
					<?php $sql_paid ="SELECT sum(TotalPaid) as paid FROM dbo.tblTransactionDetails where tblSEId = '".$row['Id']."'";
	
							$query_paid = sqlsrv_query($conn, $sql_paid);
							$row_paid = sqlsrv_fetch_array($query_paid);
							$paid=$row_paid['paid'];
							
							$sql_total ="SELECT Totalamt as total FROM dbo.tblTransactionDetails where tblSEId = '".$row['Id']."'";
							$query_total = sqlsrv_query($conn, $sql_total);
							$row_total = sqlsrv_fetch_array($query_total);
							$total=$row_total['total'];
						?>
					<tr><td style="border:thin solid;"><?php if($_REQUEST['pay_submit']=='' && ($total-1)>$paid) { ?>
					<input type="radio"  name="payment_id" id="<?php echo $row['Id'];?>" class="click_class">
					<?php }?>
					SJ <?php echo $i?></td>
					<td style="border:thin solid;">$ <?php echo $row['TotalPrice'];?></td>
					<td style="border:thin solid;"><?php if(($total)<=(3*$paid)){echo "Paid";} else{echo "-";}?></td>
					<td style="border:thin solid;"><?php if(($total)<=((3/2)*$paid)){echo "Paid";} else{echo "-";}?></td>
					<td style="border:thin solid;"><?php if(($total-1)<=$paid){echo "Paid";} else{echo "-";}?></td>
					<td style="border:thin solid;">-</td></tr>
				<?php $i++; }
				
				
				?>
					
				<!--	<?php //$check2=mysql_num_rows(mysql_query("select * from payments where job_id='2'"));?>
					<tr><td><?php if($_REQUEST['pay_submit']=='' && $check2<2) { ?>
					<input type="radio" name="payment_id" id="2" class="click_class">
					<?php }?>SJ 2</td>
					<td>$ 750</td>
					<td><?php if($check2>0){echo "Paid";} else{echo "-";}?></td>
					<td><?php if($check2>1){echo "Paid";} else{echo "-";}?></td>
					<td><?php if($check2>2){echo "Paid";} else{echo "-";}?></td>
					<td>-</td></tr>-->
					
					</table>
					<?php if($_REQUEST['pay_submit']!='') {
					
					
					$sql1 = "SELECT * FROM dbo.tblShuttersEstimate where Id='".$_REQUEST['payment_num']."'";
				
					$query = sqlsrv_query($conn, $sql1);
					$row = sqlsrv_fetch_array($query);
					if($_REQUEST['pay_all']=='on')
					{echo "Payment of ".($row['TotalPrice'])." $";}
					else
					{
					echo "Payment of ".($row['TotalPrice']/3)." $";
					 }
					
					
					 }
					 
					 
					 
					 ?>
					<p style="padding: 5px 15px 10px 15px;font-weight:800;font-size:20px;color:#c72121;" align="center">
						Billing Information
					</p>			
					<table>
					<tr><td>First Name</td><td><input type="text" name="f_name" id="f_name" value=""></td><td></td><td></td>
					<td>Last Name</td><td><input type="text" name="l_name" id="l_name" value=""></td></tr>
					<tr><td>Address</td><td><textarea name="address" id="address" value=""></textarea></td><td></td><td></td>
					<td>Phone</td><td><input type="text" name="phone" id="phone" value=""></td></tr>
					<tr><td>Zip</td><td><input type="text" name="zip" id="zip" value=""></td><td></td><td></td>
					<td>Email</td><td><input type="text" name="email" id="email" value=""></td></tr>
					<tr><td>City:</td><td><input type="text" name="city" id="city" value=""></td><td>State:</td><td><input type="text" name="city" id="city" value=""></td></tr>
					<td>Contact Preference</td><td>E-mail<input type="radio" name="pref" id="email_radio" value="email">Phone<input type="radio" value="phone" name="pref" id="phone_radio">Mail<input type="radio" name="pref" value="mail" id="mail_radio"></td></tr>
					<tr><td>Customer Notes:</td><td><input type="text" name="notes" id="notes" value=""></td><td></td><td></td>
					<td></td><td></td></tr>
					</table>
					
					
					<h4 style="color:#c72121;padding: 10px 15px 0px 15px;font-size:20px;">Shipping Location</h4>
					<p style="padding: 0px 15px 10px 15px;">
						<input type="checkbox" name="ship_add" id="ship_add" >Same as above
						<div id="address_form">
						<table>
					<tr><td>Address</td><td><textarea name="address" id="address" value=""></textarea></td></tr>
					<tr><td>Zip</td><td><input type="text" name="zip" id="zip" value=""></td></tr>
					<tr><td>City:</td><td><input type="text" name="city" id="city" value=""></td></tr>
					<tr><td>State:</td><td><input type="text" name="city" id="city" value=""></td></tr>
					</table>
						</div>
					</p>
					<h4 style="color:#c72121;padding: 10px 15px 0px 15px;font-size:20px;">Payment Information</h4>
					<p style="padding: 0px 15px 10px 15px;">
					Synapse Payment
						
						<?php if($_REQUEST['pay_submit']!='') {?>
						<form name="payment" id="payment" action="signin.php">
						<input type="hidden" name="username" id="username" value="<?php echo $_REQUEST['username'];?>" >
						<input type="hidden" name="payment_num" id="payment_num" value="<?php echo $_REQUEST['payment_num'];?>" >
						
						<input type="hidden" name="account_oid" id="account_oid" value="" >
						<input type="hidden" name="node_oid" id="node_oid" value="" >
						
						<table>
						<?php if($aaa!='123'){?>
						<tr><td>Account:</td><td><select name="account123" id="account123">
						<?php $i=0;
						while($legal[$i]!=''){?>
						<option value="<?php echo $i;?>"><?php echo $legal[$i];?></option>
						<?php $i++;
						if($i>200){break;}}?>
						</select>
						<?php }?>
						<select name="account" id="account">
						<?php $i=0;
						while($legal[$i]!=''){?>
						<option value="<?php echo $i;?>"><?php echo $legal[$i];?></option>
						<?php $i++;
						if($i>200){break;}}?>
						</select>
						
						<select name="account" id="account" >
						<?php $i=0;
						while($legal[$i]!=''){?>
						<option value="<?php echo $i;?>"><?php echo $legal[$i];?></option>
						<?php $i++;
						if($i>200){break;}}?>
						</select>
						</td></tr>
						
						
						<!--<tr><td>Client ID:</td><td><input type="text" name="client_id" id="client_id" ></td></tr>
						<tr><td>Client Secret:</td><td><input type="text" name="secret" id="secret" ></td></tr>-->
						<tr><td>Password:</td><td><input type="password" name="password" id="password" ></td></tr>
						<tr><td>Amount:</td><td>
						<?php if($_REQUEST['pay_submit']!='') {
								
								if($_REQUEST['pay_all']=='on')
					{echo '<input type="text" name="amount" id="amount"  value="'.($row['TotalPrice']).'"  readonly="true" > $';
					echo '<input type="text" name="pay_all" id="pay_all"  value="1"  readonly="true" >';
					
					}
					else
					{
					echo '<input type="text" name="amount" id="amount"  value="'.($row['TotalPrice']/3).'"  readonly="true" > $';
					echo '<input type="text" name="pay_all" id="pay_all"  value="0"  readonly="true" >';
					 }
					echo '<input type="hidden" name="cust_id" id="cust_id"  value="'.($row['CustomerId']).'"  readonly="true" >';
					echo '<input type="hidden" name="job_id" id="job_id"  value="'.($row['Id']).'"  readonly="true" >';
					echo '<input type="hidden" name="total_price" id="total_price"  value="'.($row['TotalPrice']).'"  readonly="true" >';
							
								
								 			
								 }
					 
					 
					 
					 ?>
						</td></tr>
						<tr><td></td><td><input type="submit" name="pay_submit" id="pay_submit" value="Pay"></td></tr>
						
						
						</table>
						</form>
						
						
						<?php } else{?>
						<form name="payment" id="payment" >
						<table>
						
						<!--<tr><td>Client ID:</td><td><input type="text" name="id" id="id" ></td></tr>
						<tr><td>Client Secret:</td><td><input type="text" name="secret" id="secret" ></td></tr>-->
						<input type="hidden" name="payment_num" id="payment_num" value="<?php echo $_REQUEST['payment_num'];?>" >
						<tr><td>Username:</td><td><input type="text" name="username" id="username" ></td></tr>
						<tr><td></td><td><input type="checkbox" name="pay_all" id="pay_all" >One Time Payment</td></tr>
						<tr><td></td><td><input type="submit" name="pay_submit" id="pay_submit" value="Pay"></td></tr>
						
						
						</table>
						</form>
						<?php }?>
					</p>	
					
<!--<p style="padding: 0px 15px 10px 15px;" align="center">
						
                        <a class="formlink fancybox" href="#formbox" onClick="document.getElementById('formbox').style.display='block';"><img src="img/button-employment.jpg" border="0"></a> 
        <div id="formbox" style="display:none;">
        <div class="innerbox">                 
           <h2 class="boxheading">Employment Application</h2>
	
           <form name="myForm" action="sendemployee.php" method="POST"  enctype="multipart/form-data">
         <div class="content" style="width:600px;border:1px solid;">
  <div class="leftdiv" style="width:250px;padding-left:10px;margin-left:20px;margin-top:20px;float:left;">
    <input placeholder="First Name *"  style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;" 
     type="text" name="fname" id="fname"></input>
    <input placeholder="Email *" style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;" type="text" name="email" id="email">
    </input>
    <input placeholder="State" style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;" type="text" name="state"></input>                
    <textarea rows="4" placeholder="Address" style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;height:65px;" 
     name="address"></textarea>
    <input placeholder="Salary Requirements" style="margin:5px;color:#999999;width:230px;height:25px;border:1px solid;border-radius:5px;" 
     type="text" name="salary"></input>
    <div style="clear:both"></div>                
   </div>
            
             <div class="rightdiv" style=" width:250px;float:right;margin-top:20px;margin-right:25px;">
               <input placeholder="LastName*" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;" 
                 type="text" name="lname" id="lname"></input>
               <input placeholder="Zip *" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;" 
               type="text" name="zip" id="zip"></input> 
               <input placeholder="City" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;"
                type="text" name="city"></input>                  
               <input placeholder="Phone *" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;" 
               type="text" name="phone" id="phone"></input>
               <input placeholder="Start date" style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;" 
               type="text" name="startdate"></input> 
               <select style="color:#999999;margin:5px;width:230px;height:25px;border:1px solid;border-radius:5px;width:235px;" 
               name="position" id="position" onChange="showdiv(this.value);">
               <option value="">Position applying for</option>
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
               <option value="9">Masonry</option>
               <option value="10">Rough carpenter</option>
               <option value="11">Finish carpenter</option>
               <option value="12">Painters</option>
               <option value="13">Electricians</option>
               <option value="14">Heating & cooling installers</option>
               <option value="15">Plumbers</option>
               <option value="16">Others</option>
              </select>
			
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
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="yes" name="worked"> <span>Yes</span> </input>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="no" name="worked"><span> No</span> </input>  
            <div class="clearboth"></div>
            <label style="margin-top:10px;margin-left:35px;color:#333333;font-family:Geneva, Arial, Helvetica, sans-serif;">Do you have a liscense?</label> <br>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="Yes" name="license"><span> Yes</span> </input>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="No" name="license"><span> No</span> </input> 
            <div class="clearboth"></div>    
            <label style="margin-top:10px;margin-left:35px;color:#333333;font-family:Geneva, Arial, Helvetica, sans-serif;">
                      Have you ever plead guilty or been convicted of a crime?</label> <br>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="Yes" name="crime"><span> Yes</span> </input>
            <input style="margin-left:100px;margin-top:10px;" type="radio" value="No" name="crime"><span> No </span></input> 
            
            <div class="clearboth"></div>
             
            <label style="margin-top:10px;margin-left:35px;color:#333333;font-family:Geneva, Arial, Helvetica, sans-serif;">Attach Resume with References</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="file" name="resume" value="upload" style="margin:20px 75px;color:#333333;float:left;border-radius:10px;border:none;"/>
             
            <div class="clearboth"></div> 
            <input type="submit" name="submit" value=""  onclick="return formValidation();" 
			style="float:right; margin-top:-44px;margin-right:130px;width:100px;background: url(img/button-submit.jpg); height:38px; width:217px; border:0px;">
            <div style="clear:both"></div>
           </div>
           </form>
        </div>
        </div>
					</p>	-->
				</div>
				<p style="padding-bottom:20px;">&nbsp;</p>
			</div>
			<?php //include("inc/testimonials.php"); ?>	
		</div>
		<?php //include("inc/footer.php"); ?>	
	</div>
</div>

</body>
<?php //include_once("inc/analyticstracking.php") ?>
</html>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script language="JavaScript" type="text/javascript">

$(document).ready(function(){
$("#address_form").hide();
//$('#ship_add').checked('false');
$("#account").change(function(){
			 //var address_form=$("#address_form").val();
			var account=$("#account").val();
			alert(account);
			 
			 $("#account123").val('2');
			 });
			 
$(".click_class").click(function(){
			 //var address_form=$("#address_form").val();
			
			//alert(this.id);
			 $("#payment_num").val(this.id);
			 });
			 
$("#ship_add").click(function(){
			 //var address_form=$("#address_form").val();
			
			
			 if($('#ship_add').is(':checked'))
			 {
			 $("#address_form").show();
			// alert("herehide");
			 }
			 else
			 {
			 $("#address_form").hide();
			// alert("hereshow");
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
		if(d.email.value=="")
		{
			alert("Please Enter Email Address");
			d.email.focus();
			return false;
		}
		if(d.lname.value=="")
		{
			alert("Please Enter Your Last name");
			d.lname.focus();
			return false;
		}
		if(d.zip.value=="")
		{
			alert("Please Enter Your zip");
			d.zip.focus();
			return false;
		}
		if(d.phone.value=="")
		{
			alert("Please Enter Your phone");
			d.phone.focus();
			return false;
		}
		if(d.position.value =="16" && d.otherposition.value =="")
		{
			alert("Please Enter Position Name");
			d.otherposition.focus();
			return false;
		}

		return true;
	}

</script>