<?php
//create function with an exception
function checkNum($number) {
	if($number>1) {
		throw new Exception("Value must be 1 or below");
	}
	echo 'true';
	return true;
}

//trigger exception
checkNum(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>This is<sub> subscript</sub> and <sup>superscript</sup> And <sup>super</sup></p>

	<bdo dir="rtl">This line will be written from right to left</bdo>

	<bdo dir="ltr">This line will be written from right to left</bdo>
	<iframe src="https://stackoverflow.com/questions/16230959/what-does-top-in-the-hyperlink-target-do"></iframe>

	<table border="1" >
		<tr>
			<td colspan="2" rowspan="4">1</td>
			<td>2</td>
			<td>3</td>
		</tr>
		<tr>
			<td>4</td>
			<td>5</td>
			<td>6</td>
		</tr>
	</table>

	<p id="demo">
		This the first work i do on javaScript
	</p>

	<button type="button" onclick="myFunction()">Click me</button>
	<script>
		function myFunction(){
			document.getElementById("demo").innerHTML="over write my code";
		}

	</script>
</body>
</html>
