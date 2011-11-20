<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>anonymous login - new login</title>
</head>
<body>
<?php
if (isset($_POST['firstname'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$year = $_POST['b_year'];
	$month = $_POST['b_month'];
	$day = $_POST['b_day'];
	$gender = $_POST['gender'];
	$time = date('Y:n:j:G:i');
	$id = $firstname.'~'.$lastname.'~'.$year.'~'.$month.'~'.$day.'~'.$gender.'~'.$time;
	$hex = bin2hex($id);
	echo $id.'<br />';
	echo $hex.'<br />';
	?>
<a href="javascript:var exdate = new Date(); exdate.setDate(exdate.getDate() + 36500); var cookie = 'anonymous login=<?php echo $hex; ?>;expires=' + exdate.toUTCString(); document.cookie = cookie; alert('Login has been set');">Login</a><br />
	<?php
	echo '<a href="download.txt?login='.$hex.'">Download as text file</a>';
}
else {
?>
<form method="post" action="newlogin.php">
<input type="text" value="First Name" name="firstname" onfocus="if (this.value == 'First Name') {this.value = '';}" onblur="if (this.value == '') {this.value = 'First Name';}" />
<input type="text" value="Last Name" name="lastname" onfocus="if (this.value == 'Last Name') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Last Name';}" />
Date of Birth:
<input type="text" value="YYYY" name="b_year" onfocus="if (this.value == 'YYYY') {this.value = '';}" onblur="if (this.value == '') {this.value = 'YYYY';}" />
<input type="text" value="MM" name="b_month" onfocus="if (this.value == 'MM') {this.value = '';}" onblur="if (this.value == '') {this.value = 'MM';}" />
<input type="text" value="DD" name="b_day" onfocus="if (this.value == 'DD') {this.value = '';}" onblur="if (this.value == '') {this.value = 'DD';}" />
<input type="text" value="Gender" name="gender" onfocus="if (this.value == 'Gender') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Gender';}" />
<input type="submit" />
</form>
<?php
}
?>
</body>
</html>
