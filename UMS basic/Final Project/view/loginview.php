<?php require_once '../controller/logincontrol.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script>
		function validateform()
           {  

                 var password=document.myform.password.value;  

                 var uname=document.myform.uname.value;
      
        
                if (uname==null || uname=="")
                    {  
                      alert("User Name can't be blank");  
                     return false;  
                    }
                else if(password==null || password=="")
                    {  
                      alert("Password can't be blank");  
                      return false;  
                    }
           }
             
        function checkUsername() {
    if (document.getElementById("uname").value == "") {
          document.getElementById("unameErr").innerHTML = "Username can't be blank";
          document.getElementById("unameErr").style.color = "red";
          document.getElementById("uname").style.borderColor = "red";
    }else{
          document.getElementById("unameErr").innerHTML = "";
          document.getElementById("uname").style.borderColor = "green";
    }
    
  }

    function checkPassword(){
            if (document.getElementById("password").value == "") {
                document.getElementById("passwordErr").innerHTML = "Password can't be blank";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("password").style.borderColor = "red";
            }else if(document.getElementById("password").value.length<8){
                document.getElementById("password").style.borderColor = "red";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("passwordErr").innerHTML = "Password must be at least 8 characters long.";
            }
            else{
                document.getElementById("passwordErr").innerHTML = "";
                document.getElementById("passwordErr").style.color = "red";
                document.getElementById("password").style.borderColor = "black";
            }
        }
	</script>
</head>
<body>

<?php if(isset($msg))
{?>
            <?php echo $msg;?>
        <?php } ?>
  <?php require_once'../model/welcome.php' ?>
<fieldset>
    <legend>Login</legend>
<form name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="validateform()">

        
            <b> Username: &nbsp </b><input type="text" name="uname" id="uname" nkeyup="checkUsername()" onblur="checkUsername()">  <span id="unameErr" style="color: #FF0000;"> <?php echo $unameErr;  ?> </span> <br><hr>

           <b> Password: &nbsp </b> <input type="password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" > <span id="passwordErr" style="color: #FF0000;"> <?php echo $passwordErr;  ?>  </span> <br><hr>

                                    <input type="submit" name="Login" value="Login"> &nbsp
                                    <input type="reset" name="reset"> &nbsp &nbsp <a href="#"><b>Forgot Password? </b></a>

    
</form>
</fieldset>
<?php require_once'../model/footer.php' ?>

</body>
</html>