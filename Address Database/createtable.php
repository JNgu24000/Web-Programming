<?php

$servername="localhost";
$username="jnguyen143";
$password="jnguyen143";
$dbname="jnguyen143";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}

$sql="CREATE TABLE AddressBook(AddressID INTEGER,F_NAME VARCHAR(50),L_NAME VARCHAR(50),ADDRESS VARCHAR(50), PHONE VARCHAR(12) ,EMAIL varchar(50))";

if($conn->query($sql)==TRUE){
echo "Address Table created";
}else{
echo "Error creating table:".$conn->error;
}
$conn->close();
?>
