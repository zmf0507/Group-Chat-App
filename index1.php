<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</head>
<body>
 <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
<div class="valign-wrapper">
<form action="reg1.php" method="POST" class="valign">
Regsiter now<br>First Name<br>
<input type="text" name="fname" /><br>
password<br>
<input type="text" name="lname" /><br>

<input type="submit" value="Save" />
</form>
</div>
</body>
</html>