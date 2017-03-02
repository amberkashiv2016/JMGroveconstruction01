


<iframe id="synapse_iframe" style="top:0; height:0%;width:0%;position:fixed;z-index:100000;visibility:hidden;" frameborder="0"></iframe>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://d7630u3gvmjyq.cloudfront.net/static_assets/v2/iframes/bank_login/bank_login_iframe.js"></script>
<script>
var colors = {
  'trim':'#059db1',
  'unfocused':'#95a5a6',
  'text':'#212121',
};
var userInfo = {

  // For V3 APIs use the following
  'oauth_key':'<?php echo $_GET['oauth'];?>',
  'fingerprint':'suasusau21324redakufejfjsf',
  'v3':true
};
var payload = {
  'colors':colors,
  'userInfo':userInfo,
  'development_mode':true
};
setupBankLogins(payload);
// make it visible when ready
$("#synapse_iframe").css("visibility","visible");
$("#synapse_iframe").css("height","100%");
$("#synapse_iframe").css("width","100%");

setupLinkBankReciver = function (e) {
  try{
    var json = JSON.parse(e.data);
    if (json.success) {
      //login finished,
	  $("#test_new").val(e.data);
	 $('form#test_form').submit();
	  
      $("#synapse_iframe").css("visibility","hidden");
      $("#synapse_iframe").css("height","0%");
      $("#synapse_iframe").css("width","0%");
      $("#synapse_iframe").prop("src","");
    }else if(json.cancel){
      //user pressed cancel, so iframe needs to be closed 
      $("#synapse_iframe").css("visibility","hidden");
      $("#synapse_iframe").css("height","0%");
      $("#synapse_iframe").css("width","0%");
      $("#synapse_iframe").prop("src","");
    }
  }catch (e){
    // console.log(e);
  };
};
window.addEventListener('message', setupLinkBankReciver, false);

</script>
<form action="JGtrans.php" name="test_form" id="test_form">
<input type="hidden" name="test_new" id="test_new">

<input type="hidden" name="Email" id="Email" value="<?php echo $_GET['Email'];?>">
<input type="hidden" name="oauth" id="oauth" value="<?php echo $_GET['oauth'];?>">
<input  type="hidden"name="UserId" id="UserId" value="<?php echo $_GET['UserId'];?>">
<input  type="hidden"name="CustomerId" id="CustomerId" value="<?php echo $_GET['CustomerId'];?>">
<input type="hidden" name="EstId" id="EstId" value="<?php echo $_GET['EstId'];?>">
<input  type="hidden" name="paymentMode" id="paymentMode" value="<?php echo $_GET['paymentMode'];?>">
<input type="hidden" name="amount" id="amount" value="<?php echo $_GET['amount'];?>">
<input type="hidden" name="checkNo" id="checkNo" value="<?php echo $_GET['checkNo'];?>">
<input  type="hidden" name="creditCardDetails" id="creditCardDetails" value="<?php echo $_GET['creditCardDetails'];?>">
<input  type="hidden" name="IsEmail" id="IsEmail" value="<?php echo $_GET['IsEmail'];?>">
<input type="hidden" name="email" id="email" value="<?php echo $_GET['email'];?>">
<input  type="hidden" name="payment_num" id="payment_num" value="<?php echo $_GET['payment_num'];?>"

<input  type="hidden" name="pay_all" id="pay_all" value="<?php echo $_GET['pay_all'];?>">
<input  type="hidden" name="cust_id" id="cust_id" value="<?php echo $_GET['cust_id'];?>">
<input type="hidden" name="job_id" id="job_id" value="<?php echo $_GET['job_id'];?>">
<input  type="hidden" name="total_price" id="total_price" value="<?php echo $_GET['total_price'];?>">

</form>
