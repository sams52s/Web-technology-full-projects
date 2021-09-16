
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <Center>
        <H2>_Employee Login_</H2>
            </Center>
            <hr>
        <br>
        <fieldset>
            <legend>Login</legend>
            <form action="../controller/logcon.php" method="POST" >
                <table>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="uname" id="uname" required ></td>
                        <!--  <td><span class="error"> <?php echo $unameErr;?></span></td>-->
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" id="password" required></td>
                        <!-- <td><span class="error"> <?php echo $passwordErr;?></span></td>-->
                    </tr>
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" value="Login">
                            <input type="reset" value="clear">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>

</body>
</html>