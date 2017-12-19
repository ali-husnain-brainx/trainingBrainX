<?php
	$id=$_GET['Id'];
	$fname= $_GET['fname'];
	$sname= $_GET['sname'];
	$email= $_GET['email'];
	$password= $_GET['password'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Record</title>
<link href="css/style.css" rel="stylesheet" />
</head>

<body>
<div>
    	<form class="form" method="post">
        	<input type="text" name="fname" value="<?php echo $fname;?>" class="textbox" /><br />
            <input type="text" name="sname" value="<?php echo $sname;?>" class="textbox" /><br />
            <input type="text" name="email" value="<?php echo $email;?>" class="textbox" /><br />
            <input type="password" name="password" value="<?php echo $password;?>" class="textbox" /><br />
            <input type="submit" name="update" value="Edit Employe" class="btn" /><br />
        </form>
    </div>

</body>
</html>

<?php
	if(isset($_POST['update']))
	{
		include("dbClasses/dbClass.php");
		$fname= $_POST['fname'];
		$sname= $_POST['sname'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		
		$db = new DbManger;
		$db->EditEmployee($fname,$sname,$email,$password);
	}
?>