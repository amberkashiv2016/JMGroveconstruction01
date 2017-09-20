<?php
	//	header("Access-Control-Allow-Origin: *");
	//	header("Access-Control-Allow-Methods: PUT, GET, POST");
	//	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	header("Content-Type: text/html; charset=utf-8");
		
	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$database="JGBS_Dev_New";
	$user="devloperuser";
	$password="JG%987";
	
	 //* * * * * F:\xampp-v4\php\php filechecks.php --setup="live" --deletefile="resume/profilepic" 
 
    $longopts = array(	
	"setup:",
	"deletefile:"
	);
	$options = getopt("", $longopts);
		
	

	if(strtolower($options['setup']) === 'live')
	{
		//$dsn = "Live";
		//$dir_profile = "/var/www/www.jmgroveconstruction.com/ProfilePicture";
		//$dir_resume = "/var/www/www.jmgroveconstruction.com/Resumes";
	}
	else if(strtolower($options['setup']) === 'test')
	{
		$dsn = "Test";
		$dir_profile = "/var/www/www.jmgroveconstruction.com/demo/ProfilePicture";
		$dir_resume = "/var/www/www.jmgroveconstruction.com/demo/Resumes";
	}
	else{
		//$dsn = "Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;";
		//$dir_profile = "ProfilePicture";
		//$dir_resume = "Resumes";
	
	}

	$connection = odbc_connect($dsn, $user, $password);
	if (!$connection)
	{
		exit("Connection Failed: " . $connection);
	}
	
	echo "<br/>connection established";
	
	$db_col = array ('Picture','ResumePath');
	//$db_col = 'ResumePath';
	
	//$options['deletefile'] = 'resume';
	/* if(strtolower($options['deletefile']) == 'profilepic'){
		$db_col = 'Picture';
		//$dir = "ProfilePicture";
		//echo "<br/>in deletefile : profilepic";
	}else if(strtolower($options['deletefile']) == 'resume'){
		$db_col = 'ResumePath';
		//$dir = "Resumes";
		//echo "<br/>in deletefile : resume";
	} */
	$file_arr = array();
	for($i=0 ; $i<2;$i++){
		$sqlx="SELECT CONVERT(IMAGE ,CONVERT(VARCHAR(MAX) ,CONVERT(VARBINARY(MAX) ,".$db_col[$i]."))) AS  'UploadedFile', Id FROM   tblInstallUsers where  ".$db_col[$i]." !='' AND Id >3500 order by Id desc";
		//echo "<br/>sql query : $sqlx"; 
		$rsx=odbc_exec($connection,$sqlx);
		
		while (odbc_fetch_row($rsx))
		{
			$user_id=odbc_result($rsx,"Id");
			$UploadedFile=odbc_result($rsx,'UploadedFile');
						   
			if (strpos($UploadedFile, 'http://jmgroveconstruction.com') !== false) 
			{
				echo "<br/>true";
				$url_status = 1;
			}
			else
			{
				echo "<br/>false";
				$url_status = 0;
			}
						  
			$ext_arr = explode("/", $UploadedFile);
			$extension = end($ext_arr);
						   
			$user_url_status = $user_id. "_" .$url_status;
			echo "<br/>user id : " . $user_id;
			echo "<br/>user pic : " . $extension;
			$file_arr[$i][$user_url_status] = $extension;
		}
	}
	echo "<pre>";
	print_r($file_arr);
	echo "<pre>"; 
		 
	//exit;
	
	
	//PROFILE PICTURE RELATE CODE SSTARTS HERE
	

		
		// Open ProfilePicture directory, and read its contents
	if (is_dir($dir_profile)){
	    if ($dh_profile = opendir($dir_profile)){
			while (($file = readdir($dh_profile)) !== false){
			  
				if($file !='.' && $file !='..')
				{
                    if( $u_id = array_search($file, $file_arr[0]) )
					{
						echo "<br/>file present in database - user id : " . $u_id ." filename:" . $file  ;
					    $profileuser_id = explode("_", $u_id);
						$uid_arr = explode("_", $u_id);
						if(end($uid_arr) ==1){
							
							echo "FULL Url is present in DB . Just file name needed in DB";
							
							if( $file === '20170918112045submit-form.png')
							{
								echo "<br/>file updated : ". $profileuser_id[0];
								$u_sql = "UPDATE JGBS_Dev_New.dbo.tblInstallUsers SET JGBS_Dev_New.dbo.tblInstallUsers.$db_col[0]='$file' WHERE  Id='$profileuser_id[0]'" ;
								$stmt = odbc_exec($connection, $u_sql ); 
		                        if (!$stmt)
								{exit("Error in SQL");}
							}
						}
					
					}else
					{
						echo "<br/>Profile Pic :: filename Not in DB : Delete this file from FOLDER " . $file ;
						
						/* if( $file === '20170203062242JMGSALES1 - WIN_20151101_133714.JPG')
						{
							echo "<br/>$file - file deleted ";
							unlink($dir_profile."/".$file);	
						} */

					}
				
				}

			}
			closedir($dh_profile);
		  }
		}
		
		// Open Resumes directory, and read its contents
	if (is_dir($dir_resume)){
	    if ($dh = opendir($dir_resume)){
			while (($file = readdir($dh)) !== false){
			  
				if($file !='.' && $file !='..')
				{
                    if( $u_id = array_search($file, $file_arr[1]) )
					{
						echo "<br/>file present in database - user id : " . $u_id ." filename:" . $file  ;
					    $profileuser_id = explode("_", $u_id);
						$uid_arr = explode("_", $u_id);
						if(end($uid_arr) ==1){
							
							echo "FULL Url is present in DB . Just file name needed in DB";
							
							if( $file === '20170918112735Questions - Expert  Zone1.pdf')
							{
								echo "<br/>file updated : ". $profileuser_id[0];
								$u_sql = "UPDATE JGBS_Dev_New.dbo.tblInstallUsers SET JGBS_Dev_New.dbo.tblInstallUsers.$db_col[1]='$file' WHERE  Id='$profileuser_id[0]'" ;
								$stmt = odbc_exec($connection, $u_sql ); 
		                        if (!$stmt)
								{exit("Error in SQL");}
							}
						}
					
					}else
					{
						echo "<br/>filename Not in DB : Delete this file from FOLDER " . $file ;
						
						/* if( $file === '20170203062242JMGSALES1 - WIN_20151101_133714.JPG')
						{
							echo "<br/>$file - file deleted ";
							unlink($dir_resume."/".$file);	
						} */

					}
				
				}

			}
			closedir($dh);
		  }
		}
		
		
		odbc_close($connection);
		
