<script type="text/javascript">

function validation()
{
  var name= document.getElementById("name");
  var code= document.getElementById("code");
  var password= document.getElementById("password");
  var username= document.getElementById("username");
  var confirmpassword=document.getElementById("confirmpassword");
  var birth=document.getElementById("phone");

  //alert("hello");



if(name.value.trim()=="")
{
  document.getElementById("nameErr").innerHTML= "*Name is requied";
  return false;
}
else {

    document.getElementById("nameErr").innerHTML= "";

}

if(code.value.trim()=="")
{
  document.getElementById("codeErr").innerHTML= "*Code is requied";
  return false;
}
else {

    document.getElementById("codeErr").innerHTML= "";

}

if(section.value.trim()=="")
{
  document.getElementById("sectionErr").innerHTML= "*Section is requied";
  return false;
}
else {

    document.getElementById("sectionErr").innerHTML= "";

}



return true;


}


function checkName()
{
  var name= document.getElementById("name");
  if(name.value.trim()=="" )
  {
     document.getElementById("nameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

       document.getElementById("nameErr").innerHTML= "";

  }
}



function checkCode()
{
    var code= document.getElementById("code");

    if(code.value.trim()=="")
    {
      document.getElementById("codeErr").innerHTML= "*Code is requied";
      return false;
    }
    else {

        document.getElementById("codeErr").innerHTML= "";

    }
}

function checkSection()
{

var section= document.getElementById("section");

  if(section.value.trim()=="")
  {
    document.getElementById("sectionErr").innerHTML= "*Section is requied";
    return false;
  }
  else {

      document.getElementById("sectionErr").innerHTML= "";

  }
}

function checkTime()
{

var time= document.getElementById("time");

  if(time.value.trim()=="")
  {
    document.getElementById("timeErr").innerHTML= "*Time is requied";
    return false;
  }
  else {

      document.getElementById("timeErr").innerHTML= "";

  }
}




</script>
