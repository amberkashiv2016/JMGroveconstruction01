<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'devloperuser', 'JG%987');
	mssql_select_db("JGBS_Dev_New",$conn);
	
	/*mssql_select_db("JGC",$conn);*/
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	 //error_reporting(E_ALL);
	 //ini_set("display_errors", 1);
	 
	date_default_timezone_set("Asia/Kolkata");
	$now=date("YmdHis"); //echo $now;
	$now_dt=date("Y-m-d");
	

	if($_POST['hid_pr_submit']=='hid_pr_submit_val')
	{
	//print_r($_POST);
	//exit();
	extract($_POST);
	
	if(basename( $_FILES['product_image']['name'])!="")
		{
			$target_path="ProfilePicture/$now";
			$target_path = $target_path . basename( $_FILES['product_image']['name']);
			//gif|jpg|png|jpeg
			$allowedExts = array("jpg","jpeg","JPG","JPEG");
			$extension = end(explode(".", $_FILES["product_image"]["name"]));
			if (($_FILES["product_image"]["size"] < 5097152)	&& in_array($extension, $allowedExts)){
			if(move_uploaded_file($_FILES['product_image']['tmp_name'], $target_path))
			{
			//echo "The file ".  basename( $_FILES['profilepic']['name'])." has been uploaded successfully";
				//echo 'file moved';
				//exit();
			} else
			{
				//echo 'locha';
				//exit();
				//echo "There was an error uploading the file, please try again!";
			}
			}
			else
			{
				echo "Error : please enter valid product picture";
				exit;
			}
		}
	
	
	
	
	
	
	
	$last_pid_qr = mssql_fetch_array(mssql_query("SELECT MAX(ID) as pid FROM tblVendorProduct"));
	$last_pid =	$last_pid_qr['pid']+1;
		
	$sql = 'insert into dbo.tblVendorProduct ( ID,VendorID,ItemDescription,UnitCost )values ("'.$last_pid.'","'.$_POST['vendorid'].'","'.$_POST['product_desc'].'","'.$_POST['product_cost_unit'].'")';
	
	
		
			//echo $sql;exit;
	$query = mssql_query($sql);
	
	if ($query === false){
		exit("<pre>".print_r(mssql_error(), true));
	}
	else
	{
		//echo "Record Inserted Successfully";
		// $URL="http://jmgroveconstruction.com/employment.php?view=formbox&rstatus=1";
		///$URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=sent";
		/*$email = $_POST['cont_email'];*/
		$result = mssql_fetch_assoc(mssql_query("select @@IDENTITY as id"));
		$lastID = $result['id'];
		
		?>
		<script type="text/javascript">
            window.location.href = '<?php echo 'http://jmgroveconstruction.com/demo/product-submission.php'; ?>';
          </script>
		<?php

	}
	}
	?>