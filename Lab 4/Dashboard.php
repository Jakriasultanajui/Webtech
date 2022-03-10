<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php include "LoginHeader.php"; ?>
<?php include "Sidebar.php"; ?>


<?php 

$uname="Jui";
$password="123jui321";

if (isset($_SESSION['uname'])) 
{

	echo "<h1> Welcome ".$_SESSION['uname']."</h2>";
}
else
{
	if ($_POST['uname']==$uname && $_POST['password']==$password)
	{
		$_SESSION['uname'] = $uname;
		echo "<script>location.href='Dashboard.php'</script>";
	}
	else
	{
		echo "<script>alert(Username or Password incorrect!)</script>";
		echo "<script>location.href='Login.php'</script>";
	}
}
?>

</body>
</html>