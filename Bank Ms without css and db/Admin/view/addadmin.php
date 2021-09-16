
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

        <H2>Admin Registration</H2>
        <br>
            <form action="../controller/addadmin.php" method="POST" >
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="fname" id="fname"></td>
                        <!--<td><span class="error"> <?php echo $fnameErr;?></span></td>-->
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="uname" id="uname" required ></td>
                        <!--<td><span class="error"> <?php echo $unameErr;?></span></td>-->
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" id="email" required></td>
                        <!--<td><span class="error"> <?php echo $emailErr;?></span></td>-->
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" name="phoneNumber" id="phoneNumber" required></td>
                        <!--<td><span class="error"> <?php echo $phoneNumberErr;?></span></td>-->
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                        </td>
                        <!--<td><span class="error"> <?php echo $genderErr;?></span></td>-->
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" id="password" required></td>
                        <!--<td><span class="error"> <?php echo $passwordErr;?></span></td>-->
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="cpassword" id="cpassword" required></td>
                        <!--<td><span class="error"> <?php echo $cpasswordErr;?></span></td>-->
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="address" id="address"></td>
                        <!--<td><span class="error"> <?php echo $addressErr;?></span></td>-->
                    </tr>
                    <tr>
                        <td>Your Picture:</td>
                        <td><input type="file" name="pic" id="pic"></td>
                        <!--  <td><span class="error"> <?php echo $picErr;?></span></td>-->
                    </tr>
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" value="Apply">
                            <input type="reset" value="clear">
                        </td>
                    </tr>
                </table>
            </form>
</body>
</html>