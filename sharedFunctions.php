

<?php
function connectToDatabase(){
$host = 'localhost';
$user = 'root';
$password = '';
$db ='todolist';


$connection =  mysqli_connect($host,$user,$password,$db);// you can select db separately as you did already
if($connection){
     // do all your stuff that you want
}else{
   echo "db connection error because of".mysqli_connect_error();
}
return $connection;
}

function addTask($fname) {
$connection=connectToDatabase();
$sql="	INSERT INTO tasks(`taskName`)VALUES('$fname');";
$result = mysqli_query($connection, $sql);
    echo "$fname Added<br>";
}
function deleteTask($fnum) {
	$connection=connectToDatabase();
	$sql="DELETE FROM tasks WHERE idtasks='$fnum';";
	$result = mysqli_query($connection, $sql);
    echo "$fnum Deleted.<br>";
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
		echo "<tr><th>Task ID </th><th>Task Name</th></tr>";
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
			echo "<tr> <td>";
			echo $row["idtasks"]; 
			echo "</td> <td>";
			echo $row["taskName"]; 
			echo"</td> </tr> ";
			}
		}
		echo "</table>";
}
?>