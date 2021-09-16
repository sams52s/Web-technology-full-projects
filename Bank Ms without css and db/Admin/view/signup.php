<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	<h3>Signup Page</h3>
<div>
	<form method="post" action="../controller/signupCheck.php">
		<fieldset>
			<legend>Signup</legend>
			<table>
			<tr>
					<td>Full name</td>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="text" name="phone"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="Address"></td>
				</tr>
				<tr>
               <td>Gender:</td>
            	<td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
				  <input type = "radio" name = "gender" value = "other">Other
               </td>
            </tr>
				<tr>
					<td>Type</td>
					<td>
						<select name="type">
							<option value="admin">Admin</option>
							<option value="Employee">User</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Signup"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>