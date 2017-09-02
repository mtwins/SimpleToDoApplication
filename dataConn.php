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
?>