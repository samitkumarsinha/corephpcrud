<?php
    include('connection.php');
    if(isset($_POST['submit'])){
        $u = $_POST['username'];
        $p = $_POST['password'];
        $q = "insert into users(username, password) values ('". $u ."','". $p . "')";
        echo $q;
        $query = mysqli_query($cn, $q);
        echo $query;
    }

?>
<form method="post" action="">
username <input type="text" name="username"><br>
password <input type="password" name="password"><br>
<input type="submit" name="submit" value="submit">
</form>
