<?php
$servername="localhost";
$username="jnguyen143";
$password="jnguyen143";
$dbname="jnguyen143";

$IDNUM=$_POST["idinput"];
$FNAME=$_POST["fname"];
$LNAME=$_POST["lname"];
$ADDRESS1=$_POST["address1"];
$PHONENUM=$_POST["phone"];
$EMAIL1=$_POST["email"];



$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}

$sql="INSERT INTO AddressBook(AddressID, F_NAME,L_NAME,ADDRESS,PHONE,EMAIL) 
VALUES ('$IDNUM','$FNAME','$LNAME','$ADDRESS1','$PHONENUM','$EMAIL1')";

if($conn->query($sql)==TRUE){
echo "Added record to AddressBook";
}else{
echo "Error adding address:".$conn->error;
}
$conn->close();
?>