<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>

<body>
<?php

	//system current date
	echo "Today is " . date("Y/m/d") . "<br>";
	echo "Today is " . date("Y.m.d") . "<br>";
	echo "Today is " . date("Y-m-d") . "<br>";
	echo "Today is " . date("l");
	
	echo "<br>";
	echo "The time is " . date("h:i:sa");
	
	//custom date
	echo "<br>";
	$d=mktime(11, 14, 54, 8, 12, 2014);
	echo "Created date is " . date("Y-m-d h:i:sa", $d);
	
	//convert string date simple integer date
	echo "<br>";
	$d=strtotime("10:30pm April 15 2014");
	echo "Created date is " . date("Y-m-d h:i:sa", $d);
	
	$d=strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$d=strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

	$d=strtotime("+3 Months");
	echo date("Y-m-d h:i:sa", $d) . "<br>";

?>

<?php
	//date start to end
	$startdate=strtotime("Saturday");
	$enddate=strtotime("+6 weeks", $startdate);

	while ($startdate < $enddate) {
  	echo date("M d", $startdate) . "<br>";
  	$startdate = strtotime("+1 week", $startdate);
}
?>

<?php
	//count days
	echo "<br>";
	$d1=strtotime("October 24");
	$d2=ceil(($d1-time())/60/60/24);
	echo "There are " . $d2 ." days until 24th of October.";
	
	include 'show_emp.php';
	//require 'show_emp.php';
?>

</body>
</html>