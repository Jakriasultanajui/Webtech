<?php include "LoginHeader.php"; ?>
<?php include "Sidebar.php"; ?>
<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
	<?php
	$currentPass = "admin@123";
	$newPass = $reType = $currentPass1 = "";
	$currentPassErr = $newPassErr = $reTypeErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["current"])) {
			$currentPassErr = "Current password field is empty";
		}else {
			$currentPass1 = $_POST["current"];
			if(strcmp($currentPass, $currentPass1)) {
				$currentPassErr = "Current password does not match";
			}
		}

		if (empty($_POST["new"])) {
			$newPassErr = "New password field is empty";
		}else {
			$newPass = $_POST["new"];
			if(!strcmp($newPass, $currentPass1)) {
				$newPassErr = "Can't be same as current password";
			}
		}

		if (empty($_POST["retype"])) {
			$reTypeErr = "Retype New password field is empty";
		}else {
			$reType = $_POST["retype"];
			if(strcmp($newPass, $reType)) {
				$reTypeErr = "Must match with new password";
			}
		}

	}
	?>

	<form method="post" action="">
		<fieldset>
			<legend><b>CHANGE PASSWORD</b></legend>
			 <table>
	            <tr>
	                <td>Current Password</td>
	                <td>:</td>
	                <td><input type="password" name="current" value="<?php echo $currentPass1;?>"><span class="error"><?php echo $currentPassErr;?></span><br></td>
	            </tr>

	            <tr>
                <td><span style="color: green">New Password</span></td>
                <td>:</td>
                <td><input type="password" name="new" value="<?php echo $newPass;?>"><span class="error"><?php echo $newPassErr;?></span><br>
            </tr>

            <tr>
                <td><span class="error">Retype New Password</span></td>
                <td>:</td>
                <td><input type="password" name="retype" value="<?php echo $reType;?>"><span class="error"><?php echo $reTypeErr;?></span><br>
            </tr>

        </table>
        <hr/>
        <input type="submit" name="submit" value="Submit" style="width: 60px">

		</fieldset>
	</form>

</body>
</html>