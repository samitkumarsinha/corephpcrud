<?php
    include('connection.php');
    $id = $_REQUEST['id'];
    $q = mysqli_query($cn, "delete from users where id = $id");
    $arr = array('id' => $id);
    print_r(json_encode($arr));
?>