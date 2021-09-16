
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <Center>
        <H2>Employee CV</H2>
            </Center>
        <hr>
        <br>
        <fieldset>
            <legend>Fill up: </legend>
            <form action="../controller/regcon.php" method="POST" >
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="fname" id="fname"></td>

                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="uname" id="uname" required ></td>

                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" id="email" required></td>

                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" name="phoneNumber" id="phoneNumber" required></td>
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
                    </tr>
                    <tr>
                            <td>Hight Education: </td>
                            <td>
                                <select name="education" id="education">
                                    <option value="SSC">SSC</option>
                                    <option value="HSC">HSC</option>
                                    <option value="Honers">Honers</option>
                                    <option value="Masters ">Masters </option>
                                </select>
                            </td>
                    </tr>
                    <tr>
                        <td>Field:</td>
                        <td>
                            <input type="checkbox" name="field" id="BSc" value="BSc">BSc
                            <input type="checkbox" name="field" id="BBA" value="BBA">BBA
                            <input type="checkbox" name="field" id="MSc" value="BSc">MSc
                            <input type="checkbox" name="field" id="MBA" value="MBA">MBA
                        </td>
                    </tr>
                    


                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" id="password" required></td>

                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="cpassword" id="cpassword" required></td>

                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="address" id="address"></td>

                    </tr>
                    <tr>
                        <td>Your Picture:</td>
                        <td><input type="file" name="pic" id="pic"></td>
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
        </fieldset>

</body>
</html>