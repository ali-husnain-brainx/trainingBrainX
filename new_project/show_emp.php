<?php
include("dbClasses/dbClass.php");
$db=new DbManger;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Show_emp</title>
</head>

<body>
	<table border="1">
       <tr>
        <th class="">Firsrt Name</th>
        <th class="">Last Name</th>
        <th class="">Email</th>
        <th class="">Password</th>
        <th class="">Edit</th>
        <th class="">Delelte</th>
    </tr>
    
    <?php
    $db->ShowEmployee();
    ?>
</table>
</body>
</html>

<?php
/*this code is deleting the employee and after reload the page stay here*/
if(isset($_GET['deleteId']))
{
	$id=$_GET['deleteId'];
	
	$db->DeleteEmployee($_GET['deleteId']);
}


?>