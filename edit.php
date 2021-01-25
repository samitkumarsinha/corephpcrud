<body>
<p>
<input type="hidden" id="hid" value="<?= $_REQUEST['id']; ?>">
<p>new username<input type="text" id="txt" name="username" value="<?= $_REQUEST['username']; ?>"></p>
<input type="button" value="edit" onclick="clickupd()">
<div id="mydiv"></div>
</p>
<script>
function clickupd(){
            var id = $('#hid').val();
            var u = $('#txt').val();
            $.ajax({
                type:'POST',
                url: 'update.php',
                data:{username: u, id: id},
                success: function(data){
                    console.log(data);
                   $('#mydiv').html (data);
                   window.location.reload();
                }
            })
        
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

