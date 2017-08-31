<!DOCTYPE html>
<html>
<head>
<h1><center>To-Do Application<center> </h1>

<link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<header>
<h2>Task List</h2>
</header>
<?php
include("sharedFunctions.php");

	viewTable();

?>

<br><br>
<form action = "add.php" method="post" target="_top">
NewTaskName: <input name="addbox" type="textarea" >
<input  type="submit" value="Add task"  >
</form>
<br><br>
<form action = "delete.php" method="post" target="_top">
Id of Task to be Deleted<input name="delbox" type="textarea">
<input type="submit" value="Delete task" >
</form>

</body>
</html>
