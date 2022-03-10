<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  
</head>
<style >
		.error
		{
			color: red;
		}
	</style>
<body>

<?php

    $email = "";
    $emailErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if(empty($_POST["email"]))
      {
        $emailErr = "Email is required";
      }
      else
      {
        $email = $_POST["email"]; $_SESSION['email']=$email;

        if(!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL))
        {
          $emailErr = "Invalid email format. Format: example@something.com";
        }
      }
    } 
?>
<?php include('Header.php');?>
<form method="post" action="">
<fieldset>
    <legend><b>FORGOT PASSWORD</b></legend>
      <label>Email: </label>
      <input type="text" name="email">
      <span class="error"><?php echo $emailErr;?></span><hr>
      <input type="submit" name="submit" value="Submit" >
</fieldset>
</form>

<?php include('Footer.php');?>
</body>
</html>