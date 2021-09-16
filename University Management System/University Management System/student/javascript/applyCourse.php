<script type="text/javascript">

function validation()
{
  var name= document.getElementById("course");
  var email= document.getElementById("section");
  var password= document.getElementById("time");


  //alert("hello");

  if(course.value.trim()=="" )
  {
     document.getElementById("courseErr").innerHTML= "*Course is requied";
     return false;
  }
  else {

       document.getElementById("courseErr").innerHTML= "";
  }


  if(section.value.trim()=="")
  {
    document.getElementById("sectionErr").innerHTML= "*Section is requied";
    return false;
  }
  else {

      document.getElementById("sectionErr").innerHTML= "";

  }

  // if(time.value.trim()=="")
  // {
  //   document.getElementById("timeErr").innerHTML= "*Time is requied";
  //   return false;
  // }
  // else {
  //
  //     document.getElementById("timeErr").innerHTML= "";
  //
  // }


return true;


}


function checkcourse()
{
  var course= document.getElementById("course");
  if(course.value.trim()=="" )
  {
     document.getElementById("courseErr").innerHTML= "*Course is requied";
     return false;
  }
  else {

       document.getElementById("courseErr").innerHTML= "";
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

// function checkTime()
// {
//     var time= document.getElementById("time");
//
//     if(time.value.trim()=="")
//     {
//       document.getElementById("timeErr").innerHTML= "*Time is requied";
//       return false;
//     }
//     else {
//
//         document.getElementById("timeErr").innerHTML= "";
//
//     }
// }






</script>
