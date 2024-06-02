<?php
$conn =mysqli_connect("localhost","root","","");
if($conn){
    echo "Connection established ..."."<br>";
}
else{
    echo "connection not established..."."<br>".mysqli_error($conn);
}

$Name=$_POST['Name'];
$Email=$_POST['email'];
$Pswd=$_POST['password'];
$Phno=$_POST['num'];
$Adrs=$_POST['adrs'];
#creating database:
$query1 = "create database Address";
if($conn->query($query1)){
	echo "Database Created..."."<br>";
}
else{
	echo "Database not created..."."<br>";
}

#using database:
$query2 = "use Address";
if($conn->query($query2)){
	echo "Database Address Succesfully Used..."."<br>";
}
else{
	echo "Database Address Not Used..."."<br>";
}

$query3 = "CREATE TABLE Address (User_Name varchar(20),E_mail varchar(20),Passwod varchar(20),Mobile_Number varchar(20),Adress varchar(20));";
if($conn->query($query3))
{
    echo "Table Created";
}
else
{
    echo "Table not Created . ".mysqli_error($conn)."<br>";
}

$query4 = "INSERT INTO Address VALUES(?, ?, ?, ?, ?);";
$initialize = mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($initialize, $query4))
{
    mysqli_stmt_bind_param($initialize, "sssss",$Name,$Email,$Pswd,$Phno,$Adrs);
    mysqli_stmt_execute($initialize);
    echo "<h4 style='color:yellow'>Records Inserted</h4><br>"."<br>";
	
}

header("Location:order_Redirect.html");
?>
