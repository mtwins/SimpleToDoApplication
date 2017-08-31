<html>
<body>


<?php
include("sharedFunctions.php");
deleteTask($_POST["delbox"]);
viewTable();



?>

<form action = "home.php" method="post" target="_top">
<input type="submit" value="Return to Home Page" >
</form>
</body>
</html>
