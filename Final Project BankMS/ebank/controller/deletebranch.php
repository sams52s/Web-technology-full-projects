<?php
include_once "../model/adminModel.php";
 if(isset($_POST["cid"]))
    {
            delete($_POST["cid"]);
            header("Refresh: 0; url=../view/bank/");
    }