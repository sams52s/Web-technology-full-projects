<?php


require('header.php');


?>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #ffa64d;
}
</style>
</head>
<body bgcolor="#ffa64d">

<center><h2 style="text-align:center; background-color:White "  >Dr Info</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Contact</th>
    <th>Mail</th>
  </tr>
  <tr>
    <td>Dr.MD Bashar</td>
    <td>+880982131</td>
    <td>mdbashar@gmail.com</td>
	  <td style="color:red"><a href = "">Delete</a>
  </tr>

  <tr bgcolor="#ffa64d">
    <td>Ahadul Anam Khan</td>
    <td>+423235235</td>
    <td>dasdada@gmail.com</td>
    <td style="color:red"><a href = "">Delete</a>
  </tr>
  
</table>
<?php


require('footer.php');


?>