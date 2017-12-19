<?php



if(isset($_POST['submit']))
			  {
				  
				include("database/dbClass.php");
			    $name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['pass'];
				
				
				$db= new DbManger;
				$db->AddStudent($name,$email,$password);
				
			  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create New</title>
<link rel="stylesheet" href="css/stylesheet.css"/>
</head>

<body>
<div class="stdmainDiv">
<form action="" method="post">
<div class="inputDiv"><input type="text" name="name" placeholder="Enter name" /></div>
<div class="inputDiv"><input type="text" name="email" placeholder="Enter email" /></div>
<div class="inputDiv"><input type="password" name="pass" placeholder="Enter password" /></div>
<div class="inputDiv"><input type="submit" name="submit" value="Create" /></div>
</form>
</div>
</body>
</html>