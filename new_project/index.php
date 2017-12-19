<?php
	include("dbClasses/dbClass.php");
	$db=new DbManger;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>new_project</title>
                  <!--this is for css style sheet-->
				<link href="css/style.css" rel="stylesheet" />
	</head>

<body>
	<div>
		<div class="linkDiv">
    		<a href="add_emp.php">Add Employe</a>
    	</div>
    	<div class="linkDiv">
    		<a href="show_emp.php">View Employe</a>
    	</div>
    </div>
</body>
</html>