<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CALENDER</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
<?php
// include 'hashing.php';

//action tells to run that particular file
?>
	<div class="login-page">
	<div class="form">

<form action ="login.php" method="post" class="login-form">
	<input type="text" name="uid" placeholder="Userid"><br>
	<input type="password"  name="pwd" placeholder="Password"><br><br>
	<button>LOG IN</button>

</form>



<form action ="signup.php" method="post" class="register-form">
	<input type="text" name="First_name" placeholder="First Name"><br>
	<input type="text" name="Last_name" placeholder="Last Name"><br>
	<input type="text" name="uid" placeholder="Userid"><br>
	<input type="password" name="pwd" placeholder="Password"><br><br>
	<button>SIGN UP</button>
</form>

</div>
</div>
</body>
</html>
