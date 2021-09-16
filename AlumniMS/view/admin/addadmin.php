<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../controller/Extra/style.css">
    <title>Add Admin</title>
    <link rel="stylesheet" href="../../controller/Extra/style.css">
        <?php require_once('../../controller/Extra/header.php')?>
    <style>
        .singupfield {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            padding: 1rem;
        }
    </style>
</head>

<body>
    <div class="dashvsMain">
        <div class="dashboard">
            <?php 
                require_once('../admin/dashboard.php');
            ?>
        </div>
        <div class="MainBody">
        <br>
            <form name="registrationForm" action="../../controller/usersController.php" method="POST">
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="fname" id="fname" onkeypress="e1()"></td>
                        <td><span id="fnameerror"></span></td>
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="uname" id="uname" required onkeypress="e2()"></td>
                        <td><span id="unameerror"> </span></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" id="email" required></td>
                        <td><span id="emailerror"> </span></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" name="phoneNumber" id="phoneNumber" onkeypress="e3()" required></td>
                        <td><span id="Phoneerror"> </span></td>
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
                        <td><span class="Gendererror"></span></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" id="password" required></td>
                        <td><span id="passworderror"> </span></td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="cpassword" id="cpassword" required onclick="e4()" onkeydown="e6()"> </td>
                        <td><span id="confirmPassworderror"> </span></td>
                    </tr>
                    <tr>
                        <td><label for="dob">Date of Birth :</label></td>
                        <td><input type="date" name="dob" id="dob"></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="boldline">Address</p>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="country">Country :</label></td>
                        <td><input type="checkbox" name="bd" id="bd" value="bd">Bangladesh</td>
                    </tr>
                    <tr>
                        <td><label for="area">Division :</label></td>
                        <td><select name="area" id="area">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Barishal">Barishal</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="city">zip code :</label></td>
                        <td><input type="text" name="city" id="city"></td>
                    </tr>
                    <tr>
                        <td><label for="userType">user Type :</label></td>
                        <td><select name="userType" id="userType">
                            <option value="Admin">Admin</option>
                            <option value="Student">Student</option>
                            <option value="Alumni">Alumni</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="boldline">Your Picture:</p>
                        </td>
                        <td><input type="file" name="pic" id="pic"></td>
                        <td><span class="picerror"> </span></td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button type="submit" class="btn">Register</button>
                            <button type="reset" class="btn">Reset</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</body>

</html>
<script>
    function e2() {
        var name = document.getElementById("uname").value;
        if (name.length < 1) {
            document.getElementById("unameerror").innerHTML = "User name must contain at last two letter";
        } else {
            document.getElementById("unameerror").innerHTML = "";
            return true;
        }
    }

    function e3() {
        var phone = document.getElementById("phoneNumber").value;
        if (phone.length != 10) {
            document.getElementById("Phoneerror").innerHTML = "Use bangladeshi phone number";
        } else {
            document.getElementById("Phoneerror").innerHTML = "";
            return true;
        }
    }
    function e4() {
        var p = document.getElementById("password").value;
        var cp = document.getElementById("cpassword").value;
        if (p != cp) {
            document.getElementById("confirmPassworderror").style.background = "#e6fdff";
            document.getElementById("confirmPassworderror").style.color = "red";
            document.getElementById("confirmPassworderror").innerHTML = "Didn't match with password";
        } else {
            document.getElementById("confirmPassworderror").style.background = "green";
            document.getElementById("confirmPassworderror").style.color = "white";
            document.getElementById("confirmPassworderror").innerHTML = "Matched with password";
        }
    }
</script>
<?php require_once('../../controller/Extra/footer.php')?>