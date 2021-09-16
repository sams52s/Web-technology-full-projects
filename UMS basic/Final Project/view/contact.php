<?php require '../model/welcome.php';  ?>

<?php  
 $name=$number=$email=$message = '';  
 $nameErr=$emailErr=$numberErr=$error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $nameErr = "Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $emailErr = "Enter Email</label>";  
      }  
      else if(empty($_POST["number"]))  
      {  
           $numberErr = "Enter Number</label>";  
      }  
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'number'     =>     $_POST["number"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "Your information is appended Successfully.";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Contact</title>   
           <script type="text/javascript">
             
             function validateform()
    {  
      var name=document.myform.name.value;  
  
      var email=document.myform.email.value;
      var number=document.myform.number.value;
      
        
      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
      else if (email==null || email=="") {
        alert("Email can not be blank");
        return false;
      }
      else if (number==null || number=="") {
        alert("Contact number can not be blank");
        return false;
      }

    }

     function checkName() {
  if (document.getElementById("name").value == "") {
        document.getElementById("nameErr").innerHTML = "Name can't be blank";
        document.getElementById("nameErr").style.color = "red";
        document.getElementById("name").style.borderColor = "red";
  }else{
        document.getElementById("nameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "green";
  }
  
}

function checkEmail() {
   
    if (document.getElementById("email").value == "") 
    {
          document.getElementById("emailErr").innerHTML = "Email can't be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
    }
   
    else
    {
        document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "green";
    }
    
  }

   function checkNumber() {
  if (document.getElementById("number").value == "") {
        document.getElementById("numberErr").innerHTML = "Number can't be blank";
        document.getElementById("numberErr").style.color = "red";
        document.getElementById("number").style.borderColor = "red";
  }else{
        document.getElementById("numberErr").innerHTML = "";
        document.getElementById("number").style.borderColor = "green";
  }
  
}




           </script>
      </head>  
      <body>  
            
             
                <fieldset>
                  <legend>   Contact Form    </legend>         
                <form method="post" name="myform" onsubmit="validateform()">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <b>Name: &nbsp &nbsp &nbsp </b>  
                     <input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()" /> 
                     <span id="nameErr"><?php if (isset($nameErr)) {
                     	echo $nameErr;
                     }  ?></span><br/> <hr>

                     <b>Email:  &nbsp &nbsp &nbsp</b>  
                     <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" />
                     <span id="emailErr"><?php if (isset($emailErr)) {
                      echo $emailErr;
                     }  ?></span><br/> <hr>

                     <b>Contact Number:</b>
                     <input type="text" name="number" id="number" onkeyup="checkNumber()" onblur="checkNumber()" />
                     <span id="numberErr"><?php if (isset($numberErr)) {
                      echo $numberErr;
                     }  ?></span><br/> <hr>


                     

                     <input type="submit" name="submit" value="Append"/>                     
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form> 
                
                </fieldset> 

                <p> <b>Want to know your appended information?</b> <a href="jsonview.php"> Click here</a></p>
 
      </body>  
 </html>  

<?php require '../model/footer.php';  ?>