<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php include "loginHeader.php";?>
<?php include "Sidebar.php";?>
<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form method="" action="">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<?php 

                $data = file_get_contents("data.json");
                $data = json_decode($data, true);
                foreach($data as $row){}

                ?>

				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="<?php echo $row["name"];?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="<?php echo $row["email"];?>">
				</td>
				<td></td>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>   
					<input name="gender" type="radio" checked="checked">Male
					<input name="gender" type="radio" >Female
					<input name="gender" type="radio" >Other
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td valign="top">Date Of Birth</td>
				<td valign="top">:</td>
				<td>
					<input name="DOB" type="date" value="<?php echo $row["dateOfBirth"];?>
					
				</td>
			
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit">		
	</form>
</fieldset>

</body>
</html>