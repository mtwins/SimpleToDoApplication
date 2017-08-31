
<html>
<body>

Task Name to be Added <?php echo $_POST["addbox"]; ?><br>
<?php
include("sharedFunctions.php");
addTask($_POST["addbox"]);
viewTable();

?>
<form action = "home.php" method="post" target="_top">
<input type="submit" value="Return to Home Page" >
</form>
</body>
</html>