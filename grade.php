<table border="2" cellpadding="5" align="center">
<form action="grade.php" method="post">
<tr>
	<td>Name</td>
	<td><input type="text" name="name" required></td>
</tr>
<tr>
	<td>Enter your prelim grade:</td>
	<td><input type="number" name="prelim" required></td>
</tr>
<tr>
	<td>Enter your midterm grade:</td>
	<td><input type="number" name="midterm" required></td>
</tr>
<tr>
	<td>Enter your final grade:</td>
	<td><input type="number" name="final" required></td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="submit" value="Compute" name="compute" style="background-color:green;">
	<input type="reset" value="Clear">
	</td>
</tr>
</form>
</table>

<?php
if (isset($_POST['compute'])) {

	$name = $_POST['name'];
	$prelim = $_POST['prelim'];
	$midterm = $_POST['midterm'];
	$final = $_POST['final'];

	$avg = ($prelim + $midterm + $final) / 3;
	$avg = round($avg);

	if ($avg >= 98 && $avg <= 100) {
		$equiv = "1.00";
		$desc = "Outstanding";
	}
	elseif ($avg >= 95 && $avg <= 97) {
		$equiv = "1.25";
		$desc = "Excellent";
	}
	elseif ($avg >= 92 && $avg <= 94) {
		$equiv = "1.50";
		$desc = "Very Satisfactory";
	}
	elseif ($avg >= 89 && $avg <= 91) {
		$equiv = "1.75";
		$desc = "Satisfactory";
	}
	elseif ($avg >= 86 && $avg <= 88) {
		$equiv = "2.00";
		$desc = "Very Good";
	}
	elseif ($avg >= 83 && $avg <= 85) {
		$equiv = "2.25";
		$desc = "Good";
	}
	elseif ($avg >= 80 && $avg <= 82) {
		$equiv = "2.50";
		$desc = "Average";
	}
	elseif ($avg >= 77 && $avg <= 79) {
		$equiv = "2.75";
		$desc = "Passed";
	}
	elseif ($avg >= 75 && $avg <= 76) {
		$equiv = "3.00";
		$desc = "Poor";
	}
	else {
		$equiv = "5.00";
		$desc = "Failed";
	}

	print "<h3>Hi, $name, here's your grade</h3>";
	print "Average Grade: <b>$avg</b><br>";
	print "Equivalent: <b>$equiv</b><br>";
	print "Description: <b>$desc</b><br>";
}
?>