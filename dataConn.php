<?php
function connectToDatabase(){
$host = 'localhost';
$user = 'root';
$password = '';
$db ='todolist';

//connect to database
$connection =  mysqli_connect($host,$user,$password,$db);
if($connection){
   
}else{
   echo "db connection error because of".mysqli_connect_error();
}
return $connection;
}
?>