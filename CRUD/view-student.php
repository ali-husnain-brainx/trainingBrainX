<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Records</title>
<link rel="stylesheet" href="css/stylesheet.css"/>
</head>

<body>
<div>
<table class="viewTable" >
    <tr>
        <th class="">Name</th>
        <th class="">Email</th>
        <th class="">Password</th>
        <th class="">Edit</th>
        <th class="">Delelte</th>
    </tr>
    
    <?php
	include("database/dbClass.php");
    $db=new DbManger;
	$db->viewStudent();
    ?>
</table>
</div>
<?php
if(isset($_GET['deleteId']))
{
	$db->deleteStudent($_GET['deleteId']);
}

?>

</body>
</html>