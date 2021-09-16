<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="../../controller/Extra/style.css">
</head>
<body>
    <fieldset>
        <h2 align="center">Fill this form carefully</h2>
        <form name="registrationForm" action="../../controller/usersController.php" method="POST">
        Name:<input type="text" name="fname" id="fname" onkeypress="e1()"> <br>
        <span id="fnameerror"></span><br>
        User Name:
        <input type="text" name="uname" id="uname" required onkeypress="e2()"><br>
        <span id="unameerror"> </span><br>
        E-mail Address:<b style="color: blue"> <input type="text" name="email" id="email" required>  <br>
        <span id="emailerror"> </span> <br>
        Phone Number:<input type="text" name="phoneNumber" id="phoneNumber" onkeypress="e3()" required><br>
        <span id="Phoneerror"> </span>
        <h3> Educational Qualifications </h3>
         <table border="1">
        <tr>
            <td>Degree</td>
            <td>Subject</td>
            <td>Institution Name</td>
            <td>Grade</td>
            <td>Passing Year</td>
        </tr>

        <tr>
            <td>SSC</td>
            <td>Science</td>
            <td>Monipur High School and College</td>
            <td>5.00</td>
            <td>2016</td>
        </tr>

        <tr>
            <td>HSC</td>
            <td>Science</td>
            <td>BAF Shaheen College</td>
            <td>4.57</td>
            <td>2018
                <td>
        </tr>

        <tr>
            <td>BSc</td>
            <td>Computer Science and Engineering</td>
            <td>American International University-Bangladesh</td>
            <td>3.66</td>
            <td>Jan 2019 – Present</td>
        </tr>
    </table>
     <h3><b>SOFT SKILLS </b>
        <hr color="black" width="100%" size="2">
    </h3>

    <table border="1">

        <tr>
            <td>
                Serial
            </td>
            <td>
                Type
            </td>
            <td>
                Applications
            </td>
        </tr>

        <tr>
            <td>
                1
            </td>
            <td>
                Coding Skills
            </td>
            <td>
                Python, C#, HTML, CSS
            </td>

        </tr>

        <tr>
            <td>
                2
            </td>
            <td>
                Operating System
            </td>
            <td>
                Windows 10, Linux, Mac OS
            </td>
        </tr>



        <tr>
            <td>
                3
            </td>
            <td>
                Microsoft
            </td>
            <td>
                Word, Excel, PowerPoint
            </td>
        </tr>

        <tr>
            <td>
                4
            </td>
            <td>
                Adobe
            </td>
            <td>
                Photoshop, Illustrator, Premier pro, After effects
            </td>
        </tr>

        <tr>
            <td>
                5
            </td>
            <td>
                Industry Knowledge
            </td>
            <td>
                Leadership, Management, Budgeting,
            </td>
        </tr>
    </table>

    <h3><b>ACHADEMIC PROJECTS </b>
        <hr color="black" width="100%" size="2">
    </h3>
    <table border="1">
        <tr>
            <td>
                No.
            </td>
            <td>
                Project Name
            </td>
            <td>
                Course Name

            </td>
        </tr>

        <tr>
            <td>
                1
            </td>
            <td>
                Virtual Quiz System
            </td>
            <td>
                Introduction to Programming Language (C Language) <br/>

            </td>
        </tr>

        <tr>
            <td>
                2
            </td>
            <td>
                Library Data Management System
            </td>
            <td>
                OOP1 (JAVA Language)<br/>

            </td>
        </tr>

        <tr>
            <td>
                3
            </td>
            <td>
                School Management System
            </td>
            <td>
                OOP2 <br/>
                <i>(project was done by C# Language)</i>
            </td>
        </tr>

        <tr>
            <td>
                4
            </td>
            <td>
                Blood Donation Management
            </td>
            <td>
                Software Engineering
            </td>
        </tr>
    </table>



    <h3><b>WORK EXPERIENCE</b>
        <hr color="black" width="100%" size="2">
    </h3>

    <p>
        <h4>App design</h4>

        <i>Designed the flow and UI of the KhelaGhor App to ensure smooth, eye-friendly navigation through various screens.</i>
    </p>
    <p>
        <h4>Web design</h4>


        <i>Redesigned the website for KhelaGhor.com to create an easy user experience and elevate the brand. </i>
    </p>

    <h3><b>LANGUAGE PROFICIENCY</b>
        <hr color="black" width="100%" size="2">
    </h3>
    <h4>
        1) Bangla: Mother Tongue <br/> 2) English: Fluent <br/>
    </h4>

    <h3><b>Hobby</b>
        <hr color="black" width="100%" size="2">
    </h3>
    <h4>
        1) Music <br/> 2) Martial Arts <br/>
    </h4>
    <h3><b>REFERENCES </b>
        <hr color="black" width="100%" size="2">
    </h3>

    <table border="1">
        <tr>
            <td>
                Name
            </td>
            <td>
                Designation
            </td>
            <td>
                Organization
            </td>
            <td>
                Email
            </td>
            <td>
                Relationship
            </td>
        </tr>

        <tr>
            <td>
                Mohammad Mahmudul Hasan
            </td>
            <td>
                Faculty
            </td>
            <td>
                American InternationalUniversity Of Bangladesh(AIUB)
            </td>
            <td>
                m.hasan@aiub.edu
            </td>
            <td>
                Teacher
            </td>
        </tr>
    </table>
    <h3>Other Info:</h3>
    <table>
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
                            <option value="Employee">Employee</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="boldline">Your Picture:</p>
                        </td>
                        <td><input type="file" name="pic" id="pic"></td>
                        <td><span class="picerror"> </span></td>
                    </tr>
    </table>
        <button type="submit" class="btn">Apply for job</button>
        <button type="reset" class="btn">Reset</button>
        </form>
    </fieldset>
</body>
</html>
<script>
    /*function e1() {
                                                            document.getElementById("fnameerror").innerHTML = "Full name must contain at last two word";
                                                        }*/

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