<?php  
//start of code to insert in sql server
 $serverName = "pss23.win.hostgator.com"; //serverName\instanceName

    $connectionInfo = array( "Database"=>"jgrove_JGP", "UID"=>"jgrov_User", "PWD"=>"Jgp@321#");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
         die( print_r( sqlsrv_errors(), true));
    }
	else
	{//echo "Success";
	}
	
//echo str_replace("\\"," ",$_GET['test_new']);
$string=str_replace("\\","",$_GET['test_new']);
//print_r($string);
//echo "<pre>";
$string=json_decode($string);
//print_r($string);

$success=$string->api_response->success;
//echo "<br>success".$success;

$fingerprint=$string->api_response->nodes[0]->_id;
//echo "<br>id";
//print_r($fingerprint);

$fingerprint=json_encode($fingerprint);
$id=substr($fingerprint,9,24);
//echo $id;

$type=$string->api_response->nodes[0]->type;
//echo "<br>type".$type;
//echo $_GET['oauth'];

//exit;
  $url = 'https://sandbox.synapsepay.com/api/v3/trans/add';

  $payload = array(
    'login' => array(
      'oauth_key' => '9JVVDpP5fZvfLmg4NwoeMr416rQ2jMp4G42FdNBc'
    ),
    'user' => array(
      'fingerprint' => 'suasusau21324redakufejfjsf'
    ),
    'trans' => array(
        //where you wish to debit funds from. This should belong to the user who's OAUTH key you have supplied in login
        'from' => array(
          'type' => 'SYNAPSE-US',
          'id' => '55c83d0286c2737fb7459cd0'
      ),
      //where you wish to send funds to
      'to' => array(
        'type' => 'SYNAPSE-US',
        'id' => '55b7164b86c2731665229478'
      ),
      'amount' => array(
        'amount' => $_REQUEST['amount'],
        'currency' => 'USD'
      ),
      //this is all optional stuff.
      //supp_id lets you add your own DB's ID for the transaction
      //Note lets you attach a memo to the transaction
      //Webhook URL lets you establish a webhook update line
      //process on lets you supply the date when you wish to process this transaction. This is delta time, meaning 1 is tomorrow, 2 is day after, and so on
      //Finally the IP address of the transaction
      'extra' => array(
        'supp_id' => '1283764wqwsdd34wd13212',
        'note' => 'Deposit to bank account',
        'webhook' => 'http://requestb.in/1acojwy1',
        'process_on' => 1,
        'ip' => '192.168.0.1',
      ),
      //this lets you add a facilitator fee to the transaction, once the transaction settles, you will get a part of the transaction
      'fees' => array(array(
        'fee' => 1.00,
        'note' => 'Facilitator Fee',
        'to' => array(
          //SYNAPSE-US node ID where you want us to send the facilitator fee to once the transaction is settled
          'id' => '55b7164b86c2731665229478'
         )
      ))
    )
  );
  
  $json=json_encode($payload);
 // echo "<pre>";
//  print_r($json);
  // exit;

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $payload ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );

 


$sUrl= "https://sandbox.synapsepay.com/api/v3/trans/add";
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
	//	print_r($result);
	//exit;
	//echo "<pre>";
$string=json_decode($result);
//print_r($string);
	$success=$string->success;
	//echo "<br>success".$success;
	
	$client_name=$string->trans->client->name;
	//echo "<br>client_name".$client_name;
	
	$legal_names=$string->trans->from->user->legal_names[0];
//	echo "<br>legal_names".$legal_names;
	
	$legal_names1=$string->trans->to->user->legal_names[0];
	//echo "<br>legal_names".$legal_names1;
	
	$id=$string->trans->_id;

	$id=json_encode($id);
	$last=strlen($id)-2;
	//echo "<br>las".$last;
	//echo "<br>";
	$id= substr($id,9,24);
	$now=date("Y-m-d H:i:s");
	$OneTimePayment=0;
	
	{$OneTimePayment=$_REQUEST['pay_all'];}
	
	$sql = "insert into jgrov_User.tblTransactionDetails (CustId,tblSEId,Totalamt,TotalPaid,TransDate,TrasnId,OneTimePayment) values ('".$_REQUEST['cust_id']."','".$_REQUEST['job_id']."','".$_REQUEST['total_price']."','".$_REQUEST['amount']."','".$now."','".$id."','".$OneTimePayment."')";
	$query = sqlsrv_query($conn, $sql);
    if ($query === false){  
    exit("<pre>".print_r(sqlsrv_errors(), true));
    }
	else
	{
	//echo "Record Inserted Successfully";
	}
	//exit;
	
	//$insert=mysql_query("insert into payments(amount,datetime,job_id) values ('12','".$now."','".$_REQUEST['payment_num']."')");

header("Location:customer_panel.php?email=".$_GET['Email']."&success=".$_GET['oauth']."&UserId=".$_GET['UserId']."&CustomerId=".$_GET['CustomerId']."&EstId=".$_GET['EstId']."&paymentMode=".$_GET['paymentMode']."&amount=".$_GET['amount']."&checkNo=".$_GET['checkNo']."&creditCardDetails=".$_GET['creditCardDetails']."&IsEmail=".$_GET['IsEmail']."&payment_num=".$payment_num."&to=".$legal_names."&trans=1&id=".$id."");




?>