<?php
$id=$_GET['updateId'];
echo "$id";
$name=$_GET['updatename'];

$email=$_GET['updateemail'];

$password=$_GET['updatepassword'];
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Record</title>
</head>

<body>
<form action="" method="post">
<div class="inputDiv"><input type="text" name="name" value="<?php echo $name;?>" /></div>
<div class="inputDiv"><input type="text" name="email" value="<?php echo $email;?>" /></div>
<div class="inputDiv"><input type="password" name="pass" value="<?php echo $password;?>" /></div>
<div class="inputDiv"><input type="submit" name="submit" value="Update" /></div>
</form>

</body>
</html>

<?php
if(isset($_POST['submit']))
			  {
				  
				include("database/dbClass.php");
			    $name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['pass'];
				
				
				$db= new DbManger;
				$db->updateStudent($name,$email,$password);
				
			  }
?>

?>