<!DOCTYPE html>
<html>

<head>
        <link rel="stylesheet" href="../../controller/Extra/style.css">
        <?php require_once('../../controller/Extra/header.php')?>
    <title>Live Search using AJAX</title>
    <!-- Including jQuery is required. -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Including our scripting file. -->
    <style>
    a:hover {
        cursor: pointer;
        background-color: yellow;
    }
    </style>
</head>

<body>
    <div class="dashvsMain">
        <div class="dashboard">
            <?php 
                require_once('../admin/dashboard.php');
            ?>
        </div>
        <div class="MainBody">
    <input type="text" id="search" placeholder="Search" />
    <br>
    <br />
    <div id="display"></div>
    </div>
    </div>
</body>
</html>
<script>
    function fill(Value) {
    $('#search').val(Value);
    $('#display').hide();
}
$(document).ready(function() {
    $("#search").keyup(function() {
        var query = $('#search').val(); 
        if (query == "") {
            $("#display").html("");
        }
        else {
            $.ajax({type: "POST",url: "ajax.php",data: {search: query},success: function(html) {$("#display").html(html).show();}});
        }
    });
});
</script>
<?php require_once('../../controller/Extra/footer.php')?>