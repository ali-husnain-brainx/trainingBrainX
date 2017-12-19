<?php
	/*these two line of code work for database methods*/
	include("dbClasses/dbClass.php");
	$db=new DbManger;
	
	/*this code fetch user enter data in form*/
	if(isset($_POST["submit"]))
	{
		$fname=$_POST["fname"];
		$sname=$_POST["sname"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		
		/*this code return all data that enter the user in database add employee method*/
		$db->AddEmployee($fname,$sname,$email,$password);	
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Add Employe</title>
        <link href="css/style.css" rel="stylesheet" />
	</head>

<body>
	<div>
    	<form class="form" method="post">
        	<input type="text" name="fname" placeholder="enter first name" class="textbox" /><br />
            <input type="text" name="sname" placeholder="enter second name" class="textbox" /><br />
            <input type="text" name="email" placeholder="enter email" class="textbox" /><br />
            <input type="password" name="password" placeholder="enter password" class="textbox" /><br />
            <input type="submit" name="submit" value="Add Employe" class="btn" /><br />
        </form>
    </div>
</body>
</html>