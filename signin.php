<?php  

  $url = "https://sandbox.synapsepay.com/api/v3/user/signin";



  $payload = array(
    "client" => array(
      //your client ID and secret
      "client_id" => "kScn5jUr2RaSO8UWwcQL",  
      "client_secret" => "hwDbVVNFBwcHkzvZpiAkMv7gUid2COzEAytcPfHA"
    ),
    "login" =>array(
      //email and password of the user.
      "email" => "JG@test.com",
      "password" => "test1234"
    ),
    "user" =>array(
      //the id of the user profile that you wish to sign into.
      '_id' =>array(
        '$oid' =>"55c83d0286c2737fb7459ccf",
      ),
      "fingerprint" =>"suasusau21324redakufejfjsf",
      "ip" =>"192.168.0.1",
     
      
      
     
    )
  );


 $json=json_encode($payload);
//echo "<pre>";
//print_r($json);
//exit;
//$payload=json_encode($json);




$sUrl= "https://sandbox.synapsepay.com/api/v3/user/signin";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$sUrl);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    curl_close($ch);
//echo "<pre>";
$string=json_decode($result);
// print_r($string);
//exit;
   $success=$string->success;
//echo "<br>success".$success;

$oauth_key=$string->oauth->oauth_key;
//echo "<br>oauth_key".$oauth_key;

$id=$string->user->_id;
$id=json_encode($id);
//header("Location:bankloginiframe.php?email=".$_GET['email']."&oauth=".$oauth_key."&amount=".$_GET['amount']."");
//echo "JGtrans.php?email=".$_REQUEST['email']."&oauth=".$oauth_key."&amount=".$_REQUEST['amount']."&password=".$_REQUEST['password']."&amount=".$_REQUEST['amount']."&account=".$_REQUEST['account']."&payment_num=".$_REQUEST['payment_num'];
header("Location:bankloginiframe.php?email=".$_REQUEST['email']."&oauth=".$oauth_key."&amount=".$_REQUEST['amount']."&password=".$_REQUEST['password']."&amount=".$_REQUEST['amount']."&account=".$_REQUEST['account']."&payment_num=".$_REQUEST['payment_num']."&cust_id=".$_REQUEST['cust_id']."&job_id=".$_REQUEST['job_id']."&total_price=".$_REQUEST['total_price']."&pay_all=".$_REQUEST['pay_all']);

exit;

?>

