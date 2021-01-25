<head>

<?php
include ('connection.php');
$result = mysqli_query($cn, 'select * from users');
while($rs = mysqli_fetch_object($result)){
    
    echo '<p>'.$rs->username . '/' . $rs->password . '<span onclick="myclick('.$rs->id.')">X</span></p>';
    echo "<p onclick=edit('".trim($rs->username)."','".$rs->id."')>Edit</p>";
    
    echo "<div id='mydiv".$rs->id."'></div>";
}

?>

</table>

</head>
<body>

<script>
function myclick(id){
    $.ajax({
        type: 'POST',
        url: 'del.php',
        data: {id : id},
        success: function(data){
            let val = JSON.parse(data);
            console.log(val.id);
            window.location.reload();
        }
        
    })
}
function edit(user, id){
    $.ajax({
        type:'POST',
        url: 'edit.php',
        data:{username: user, id: id},
        success: function(data){
            console.log(data);
            $('#mydiv'+id).html (data);
        }
    })
    
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>