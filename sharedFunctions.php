

<?php
include("dataConn.php");

function addTask($task) {
    $connection=connectToDatabase();
	$sql="INSERT INTO tasks(`taskName`)VALUES('$task');";
	$result = mysqli_query($connection, $sql);
	viewTable();
  
}
function deleteTask($task) {
	$connection=connectToDatabase();
	$task=$task-1;

	$sql="SELECT * FROM tasks a
	WHERE ('$task') = ( 
    SELECT COUNT(DISTINCT(idtasks)) 
    FROM  tasks b
     WHERE  b.idtasks < a.idtasks
    )";
	
	$result2 = mysqli_query($connection, $sql);
	$row2 = mysqli_fetch_assoc($result2);
	$num= $row2["taskName"];
	
	$sql1="DELETE FROM tasks WHERE taskName='$num';";
	$result1 = mysqli_query($connection, $sql1);
	viewTable();
}


//function to display table
function viewTable()
{
	$connection=connectToDatabase();
	$sql="Select * from tasks;";
	$result = mysqli_query($connection, $sql);
	echo "<style>" . "table, th, td {" . "border: 1px solid black;" . "border-collapse: collapse;" . "th, td {" . 
			"padding: 15px;" . "}" . "</style>";
		echo "<table style=\"width:50%\">";
		echo "<tr ><th><h3>ID </h3></th><th><h3>Task Name</h3></th></tr>";
		if(mysqli_num_rows($result)>0)
		{
			$i=1;
			while($row = mysqli_fetch_assoc($result))
			{
			echo "<tr> <td>";
			echo $i++;
			//echo $row["idtasks"]; 
			echo "</td> <td>";
			echo $row["taskName"]; 
			echo"</td> </tr> ";
			}
		}
		echo "</table>";
}
?>