<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<h1><center>To-Do Application<center> </h1>

</head>
<body>
<header>
<h2>Task List</h2>
</header>
<?php
include("sharedFunctions.php");

	
	$connection=connectToDatabase();
	//if user submits add task button
	if(isset($_POST['aSubmit']))
	{
		if($_POST['addbox']!="")
		{
			addTask($_POST['addbox']);
		}
		else
		{
			echo "<h3 style=color:red;>Please enter a name for your new task</h3>";
		}
	}
	//if user submits delete task button
	if(isset($_POST['dSubmit']))
	{
	deleteTask($_POST['delbox']);
	}
	//view table function called- display table
	viewTable();
?>

<br><br>
<form action = "home.php" method="post" target="_top" class='task'>
Add New Task By Entering the Name:  <br><br>
<input name="addbox" type="textarea" class='taskinput'>
<input  type="submit" value="Add task" name='aSubmit' class="submit"  >
</form>
<br><br>
<?php
//hide delete functionality if table is empty
	$connection=connectToDatabase();
	$sql="Select * from tasks;";
	$result = mysqli_query($connection, $sql);
		if(mysqli_num_rows($result)>0)
		{
			?>
<form action = "home.php" method="post" target="_top">
Enter Id of Completed Task for Deletion: <br> <br>
<input name="delbox" type="textarea">
<input type="submit" value="Delete task" name='dSubmit' class="submit">
</form>
<?php
}
?>
</body>
</html>
