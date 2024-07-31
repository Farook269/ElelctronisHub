<?php

$conn =mysqli_connect("localhost","root","","");
if($conn){
    echo "Connection established ... "."<br>";
}
else{
    echo "connection not established... "."<br>".mysqli_error($conn);
}

$email=$_POST['login-email'];
$password=$_POST['login-password'];

#creating database:
$query1 = "create database RDX";
if($conn->query($query1)){
	echo "Database Created..."."<br>";
}
else{
	echo "Database not created..."."<br>";
}

#using database:
$query2 = "use RDX";
if($conn->query($query2)){
	echo "Database RDX succesfully used..."."<br>";
}
else{
	echo "Database not used..."."<br>";
}

$query3 = "CREATE TABLE login (E_mail varchar(30),Passwod varchar(20));";
if($conn->query($query3))
{
    echo "Table Created";
}
else
{
    echo "Table not Created . ".mysqli_error($conn)."<br>";
}
$query4 = "INSERT INTO login VALUES(?, ?);";
$initialize = mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($initialize, $query4))
{
    mysqli_stmt_bind_param($initialize, "ss",$email,$password);
    mysqli_stmt_execute($initialize);
    echo "<h4 style='color:yellow'>Records Inserted</h4><br>"."<br>";
	
}

header("Location: home.html");
exit;
?>
