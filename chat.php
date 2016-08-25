<?php
include 'db.php';
session_start();

$query = "SELECT * FROM chat ORDER BY id DESC";
$run = $con->query($query);

while($row = $run->fetch_array()) :
?>
<div>
<div id="chat_2">
<span class="span1"><?php echo $row['name'] ; ?></span> :
<span class="span2"><?php echo $row['msg'] ; ?></span> :
</div>

<?php endwhile;?>
</div>
