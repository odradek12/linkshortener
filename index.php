<?php 

include_once('header.php');

 ?>

<html>
<body>

<form action="insert.php" method="get" name="urlenter" onsubmit="return validateForm()">
URL: <input type="text" id="url" name="url"><br>
<input type="submit">
</form>

<div id="warning"></div>

<script type="text/javascript">
function validateForm() {
  var x = document.querySelector("#url").value;
  if (x == "") {
    console.log("Name must be filled out");
    // document.querySelector("#warning").innerHTML("Name must be filled out");
    return false;
  }
} 
</script>
</body>
</html> 

