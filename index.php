<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CALENDER</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
//action tells to run that particular file
?>
<form action ="login.php" method="post">
	<input type="text" name="uid" placeholder="Userid"><br>
	<input type="password" name="pwd" placeholder="Password"><br><br>
	<button>LOG IN</button>




</form>
<form action ="signup.php" method="post">
	<input type="text" name="First_name" placeholder="First Name"><br>
	<input type="text" name="Last_name" placeholder="Last Name"><br>
	<input type="text" name="uid" placeholder="Userid"><br>
	<input type="password" name="pwd" placeholder="Password"><br><br>
	<button>SIGN UP</button>
</form>

</body>
</html>
