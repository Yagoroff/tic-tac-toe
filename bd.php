<?php
    $db = mysqli_connect ("tic-tac-toe","root");
    mysqli_select_db ($db,"mybase");
    mysqli_query($db, "SET NAMES utf8");
?>