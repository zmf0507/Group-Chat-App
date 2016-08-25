<?php session_start(); ?>
<?php 
$a = $_SESSION['uname']; 
?>
<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<link  rel="stylesheet" href="chat.css">
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

<div style="text-align:center;margin-top:50px;font-family:arial;font-size:20px;">
<p>Welcome <?php echo $_SESSION['uname']; ?>!</p>

<a href="logout.php">Click here to logout</a>

<div id="container">
<div id="chats">
<div id="chat">
</div>
</div>
<form method="post" action="home.php">

<div class="msg"><textarea name="msg" placeholder="enter message" value="ënter message"></textarea></div>
<div class="submit"><input type="submit" name="submit" value="send"/></div>

</form>
<?php

if(isset($_POST['submit']))
{

$msg = $_POST['msg'];
$query = "INSERT into chat (name,msg) values ('$a','$msg')";
$run = $con->query($query);
}
?>
</div>


	You've Benn Successfully Entered<br>
	In The<br>
	System<br>

</div>
</body>
</html>