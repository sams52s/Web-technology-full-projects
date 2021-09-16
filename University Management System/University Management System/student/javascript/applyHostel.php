<script type="text/javascript">

function validation()
{
  var name= document.getElementById("building");
  var email= document.getElementById("id");
  var password= document.getElementById("name");


  //alert("hello");

  if(name.value.trim()=="")
  {
    document.getElementById("nameErr").innerHTML= "*name is requied";
    return false;
  }
  else {

      document.getElementById("nameErr").innerHTML= "";

  }




  if(id.value.trim()=="")
  {
    document.getElementById("idErr").innerHTML= "*id is requied";
    return false;
  }
  else {

      document.getElementById("idErr").innerHTML= "";

  }

  if(building.value.trim()=="" )
  {
     document.getElementById("buildingErr").innerHTML= "*building is requied";
     return false;
  }
  else {

       document.getElementById("buildingErr").innerHTML= "";
  }



return true;


}


function checkBuilding()
{
  var building= document.getElementById("building");
  if(building.value.trim()=="" )
  {
     document.getElementById("buildingErr").innerHTML= "*building is requied";
     return false;
  }
  else {

       document.getElementById("buildingErr").innerHTML= "";
  }
}

function checkId()
{
  var id= document.getElementById("id");
  if(id.value.trim()=="")
  {
    document.getElementById("idErr").innerHTML= "*id is requied";
    return false;
  }
  else {

      document.getElementById("idErr").innerHTML= "";

  }

}

function checkName()
{
    var name= document.getElementById("name");

    if(name.value.trim()=="")
    {
      document.getElementById("nameErr").innerHTML= "*name is requied";
      return false;
    }
    else {

        document.getElementById("nameErr").innerHTML= "";

    }
}






</script>
