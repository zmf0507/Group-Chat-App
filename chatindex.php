<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<link  rel="stylesheet" href="test.css">
<script>
	function ajax() {
		 var req = new XMLHttpRequest();

         req.onreadystatechange = function() {

             if(req.readyState == 4 && req.status == 200)
             {
             	document.getElementById("chat").innerHTML = req.responseText;
             }


         }

         req.open("GET", "chat.php", true);
         req.send();
	}

	setInterval(function(){ajax()},1000);
</script>
</head>
<body onload="ajax();">

<div id="container">
<div id="chats">
<div id="chat">
</div>
</div>
<form method="post" action="chatindex.php">
<div class="name"><input type="text" name="name" placeholder="name"/></div>

<div class="msg"><textarea name="msg" placeholder="enter message" value="ënter message"></textarea></div>
<div class="submit"><input type="submit" name="submit" value="send"/></div>

</form>

<?php

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$msg = $_POST['msg'];

$query = "INSERT into chat (name,msg) values ('$name','$msg')";
$run = $con->query($query);
}
?>
</div>
</body>
</html>
