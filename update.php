<?php
    include("connection.php");
    $user = $_REQUEST['username'];
    $id  = $_REQUEST['id'];
    $q=  "update users set username = '$user' where id = $id";
    $query = mysqli_query($cn, $q);
    echo $query;
