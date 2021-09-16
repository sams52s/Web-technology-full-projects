
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="../../controller/Extra/style.css">
        <?php require_once('../../controller/Extra/header.php')?>
</head>
<body>
    <div class="dashvsMain">
        <div class="dashboard">
            <?php 
                require_once('../users/dashboard.php');
            ?>
        </div>
        <div class="MainBody">
            <div class="editprofile">
                <div class="prof">
                    <p class="boldline">My profile</p>
                    <?php include('../../controller/viewProfile.php') ?>
                </div>
                <div class="editprf">
                    <p class="boldline">Edit Profile</p>
                    <div class="epb">
                            <div class="editp">
                                <div class="editdtls">
                                        <button onclick="edtname()" id="edtname" class="btn" type="button">Edit
                                            Name</button>
                                        <div class="edtname" id="edtnamef">
                                            <p></p>
                                            <form action="../../controller/updateProfile.php" method="post">
                                                <input type="text" id="Name" name="Name" placeholder="Name of yours">
                                                <input id="NameBtn" class="btn" type="submit" value="Submit">
                                            </form>
                                        </div>
                                        <button onclick="edtuname()" id="edtuname" class="btn" type="button">Edit User
                                            Name</button>
                                        <div class="edtuname" id="edtunamef">
                                            <p></p>
                                            <form action="../../controller/updateProfile.php" method="post">
                                                <input type="text" id="userName" name="userName" placeholder="Surname of yours">
                                                <input id="unamebtn" class="btn" type="Submit" value="Submit">
                                            </form>
                                        </div>
                                        <button onclick="edtemail()" id="edtemail" class="btn" type="button">Edit
                                            Email</button>
                                        <div class="editemail" id="edtemailf">
                                            <p></p>
                                            <form action="../../controller/updateProfile.php" method="post">
                                                <input type="email" id="email" name="email" placeholder="email@">
                                                <input id="emailbtn" class="btn" type="Submit" value="Submit">
                                            </form>
                                        </div>
                                        <button onclick="edtphn()" id="edtphn" class="btn" type="button">Edit phone
                                            number</button>
                                        <div class="edtphn" id="edtphnf">
                                            <p></p>
                                            <form action="../../controller/updateProfile.php" method="post">
                                                <input type="text" id="phone" name="phone" placeholder="01**********">
                                                <input id="phnbtn" class="btn" type="Submit" value="Submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    document.getElementById("edtnamef").hidden = true;
    document.getElementById("edtunamef").hidden = true;
    document.getElementById("edtemailf").hidden = true;
    document.getElementById("edtphnf").hidden = true;
    function edtname() {
        document.getElementById("edtnamef").hidden = false;
    }
    function edtuname() {
        document.getElementById("edtunamef").hidden = false;
    }
    function edtemail() {
        document.getElementById("edtemailf").hidden = false;
    }
    function edtphn() {
        document.getElementById("edtphnf").hidden = false;
    }
</script>
<?php require_once('../../controller/Extra/footer.php')?>