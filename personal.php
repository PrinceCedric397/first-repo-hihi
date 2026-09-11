<html>
  <h1><center>My Personal Information</center></h1>
  
<form>
 <h2><table border=2 cellpadding="2" cellspacing="5" align="center">
	<tr><td/>Lastname
		<td/><input type=text name=lastname
		placeholder="Type your lastname"><h2>
		
	<tr><td/>Firstname
		<td/><input type=text name=firstname
		placeholder="Type your firstname"><h3>
		
	<tr><td/>Middlename
		<td/><input type=text name=middlename
		placeholder="Type your middlename"><h3>
		
	<tr><td/>Age
		<td/><input type=text name=age
		placeholder="Type your age"><h3>
		
	<tr><td/>Gender
		<td/><input type=radio name="gender" value="Male"> Male
		<input type=radio name="gender" value="Fenale"> Female
				
	<tr><td/>Email
		<td/><input type=text name=email
		placeholder="Type your email"><h3>
		
	<tr><td/>Password
		<td/><input type=text name=password
		placeholder="Type your password"><h3>
		
	<tr><td/>Address
		<td/><input type=text name=address
		placeholder="Type your address"><h3>
		
	<tr><td/>Postal Code
		<td/><input type=text name=postal code
		placeholder="Type your postal code"><h3>
		
	<tr><td/>Phone Number
		<td/><input type=text name=phonenumber
		placeholder="Type your phonenumber"><h3>
	
	<tr><td/>Emergency Contact
		<td/><input type=text name=emergency contact
		placeholder="Type your emergency contact"><h3>
		
	<tr><td/>School
		<td/><input type=text name=school
		placeholder="Type your school"><h3>
		
	<tr><td/>College
		<td/><input type=text name=college
		placeholder="Type your college">
		<input type=text name=course
		placeholder="Type your course"><h3>
		<input type=text name=section
		placeholder="Type your section"><h3>
	<input type=submit>
	<input type=reset>
</form>
</body>
</html>

<select name=month>
<?php
 for($x=1;$x<=12;$x++)
    {print "<option value=$x>$x\n";
     }
?>
</select>

<select name=day>
<?php
 $x=1;
 while ($x<=31)
    {
     print "<option value=$x>$x\n";
     $x=$x+1;
     }
?>
</select>

<select name=year>
<?php
 $x=2026;
 while ($x<=2026)
    {
     print "<option value=$x>$x\n";
     $x=$x+1;
     }
?>
</select>