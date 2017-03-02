
<?php
	$userName = "'".$_REQUEST["UserName"]."'";
	$password = "'".$_REQUEST["Password"]."'";
	
	$sql = 'SELECT `Password` FROM Employees WHERE username Like '.$userName;
	$eID = 'SELECT `EmployeeID` FROM Employees WHERE username Like '.$userName;
	$con = mysql_connect('saleswave.db.6328650.hostedresource.com','saleswave','Admin4JMG') or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	
	mysql_select_db('saleswave', $con);
	$result = mysql_query($sql);
	$result1 = mysql_query($eID);
	$eIDcur = mysql_result($result1,0);
	$curScript = "<html><script language='JavaScript'>alert('Invalid login or password.'),history.go(-1)</script></html>";
	echo($curScript);
?>



