<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../controller/Extra/style.css">
    <title>Courses</title>
        <style>
    .Reg {

        margin-right: 50rem;
    }

    .error {
        color: #FF0000;
        /*this is color red*/
    }
    </style>
</head>
<body>
<?php
    $flag=1; 
    $ID=$Time = $Course_Name = "";
    $message = '';  
    $error = ''; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["ID"])&&isset($_POST["Course_Name"])&&isset($_POST["Time"]))
            //this fild is for json...
            if(isset($_POST["submit"])){
                if(file_exists('Course.json')){
                    $current_data = file_get_contents('Course.json');  //this registration named file is json file where file readed.
                    $array_data = json_decode($current_data, true);  //json data decoding here. json decode and encode data so 1st decode and save data.
                    $extra = array// giving data as array life set of data.
                        (  
                                'ID'               =>     $_POST['ID'],
                                'Course_Name'      =>     $_POST["Course_Name"],
                                'Time'             =>     $_POST["Time"],
                        );  
                            $array_data[] = $extra;  
                            $final_data = json_encode($array_data);  //all data taken now time to encode..
                            if(file_put_contents('Course.json', $final_data))  
                            {  
                                $message = "<label>Data Recorded Successfully</p>";  
                            }  
                }else{  
                $error = 'JSON File not exits';  
                }  
        }
    }
    //for data manupulation 
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    } 
?>
<p class="boldline">Add Course:</p>
<div class="right">
    <center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Course Name: <input type="text" name="name">
                <br>
                Course ID: <input type="text" name="email">
                <br>
                Time: <input type="text" name="username">
                <br>
                <hr>
                <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset">
</form>
</center>
<br>
<p class="boldline">Search:</p>
<input type="search" name="" id="">
<fieldset>
    <legend>Courses</legend>
    <ul>
        <li>
            Cse
        </li>
    </ul>
</fieldset>

</div>
</body>
</html>
 <?php
    //just for show any worng info or wrong action message...
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>