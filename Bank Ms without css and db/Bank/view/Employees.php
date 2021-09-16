<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>
     <h1>Employees Info</h1>
     <?php
        include_once('../controller/Employess.php'); 
     ?>
    <table>
        <tr>
            <td>ID | </td> 
            <th>Name | </th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>19-1</td>
            <td>IRINA</td>
            <td><a href="">Show</a></td>
            <td><input type="button" value="Delete"></td>
        </tr>
        <tr>
            <td>19-2</td>
            <td>Dipt</td>
            <td><a href="">Show</a></td>
            <td><input type="button" value="Delete"></td>
        </tr>
        <tr>
            <td>19-3</td>
            <td>Shaafin</td>
            <td><a href="">Show</a></td>
            <td><input type="button" value="Delete"></td>
        </tr>
        <tr>
            <td>18-3</td>
            <td>Piu</td>
            <td><a href="">Show</a></td>
            <td><input type="button" value="Delete"></td>
        </tr>
    </table>
</body>
</html>