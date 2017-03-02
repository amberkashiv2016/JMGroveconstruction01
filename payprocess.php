<?php
$data = array('username'=>'dog','password'=>'tall');
$data_json = '{
    "to":{
      "type":"SYNAPSE-US",
      "id":"55d9287486c27365fe3776fb"
    },
    "amount":{
      "amount":1.10,
      "currency":"USD"
    },
    "extra":{
      "supp_id":"1283764wqwsdd34wd13212",
      "note":"Deposit to bank account",
      "webhook":"http://requestb.in/q94kxtq9",
      "process_on":1,
      "ip":"192.168.0.1",
      "other":{
        "attachments": [
            "data:text/csv;base64,SUQ=="
        ]
      }
    },
    "fees":[{
      "fee":1.00,
      "note":"Facilitator Fee",
      "to":{
        "id":"55d9287486c27365fe3776fb"
       }
    }]
}';
$url="https://sandbox.synapsepay.com/api/3/users/557387ed86c27318532fc09a/nodes/55d9287486c27365fe3776fb/trans";
echo "transaction successful";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','X-SP-GATEWAY: e3f19e4bd4022c86e7f2|11c94ba6bad74d24a0158bc707f0fc19a86dc08f','X-SP-USER: iuda3QJXoILdGQKaAcfi67EkGjMgQKOkEnl6irWC|suasusau21324redakufejfjsf','X-SP-USER-IP: 24.130.174.164" -H "X-SP-PROD: NO','X-SP-LANG: EN'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
print_r($response);
curl_close($ch);
?>