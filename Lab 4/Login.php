<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
	<?php 
	$unameErr = $passErr = "";
	$uname = $password = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["uname"])) {
    	$unameErr = "User Name is required";
    } else {
	    $uname = $_POST["uname"];$_SESSION['uname']=$uname;
	    $count = strlen("$uname");
	    if ((!preg_match("/^[a-zA-Z-_' ]*$/",$uname)) || $count < 2 ){
	      $unameErr = "Only alpha numeric characters, period, dash, underscore allowed and contains at least two characters";
	    }
    }

    if (empty($_POST["password"])) {
    	$passErr = "Password is required";
    }else {
    	$password = $_POST["password"];$_SESSION['password']=$password;
    	$count = strlen("$password");
    	if ((!preg_match("([@#$%])",$password)) || $count < 8 ) {
    		$passErr = "Password must not be less than eight characters and  must contain at least one of the special characters (@, #, $, %) ";
    	}

    }

    }
	?>
    <?php include('Header.php');?>
	<form method="post" action="Dashboard.php">
		<fieldset>
			<legend><b>LOGIN</b></legend>
			<label>User Name:</label>
			<input type="text" name="uname" value="<?php echo $uname;?>">
    		<span class="error"><?php echo $unameErr;?></span><br>
    		<label>Password:</label>
    		<input type="password" name="password" value="<?php echo $password;?>">
    		<span class="error"><?php echo $passErr;?></span><hr>
    		<input type="checkbox" name="remember" value="">Remember Me<br><br>
    		<input type="submit" name="submit" value="Submit">
    		<a href="ForgetPassword.php">Forgot Password?</a>
		</fieldset>
	</form>
    <?php include('Footer.php');?>
</body>
</html>