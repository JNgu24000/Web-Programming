<?php
$servername="localhost";
$username="jnguyen143";
$password="jnguyen143";
$dbname="jnguyen143";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}


$IDNUM=$_POST["idinput"];
$FNAME=$_POST["fname"];
$LNAME=$_POST["lname"];
$ADDRESS1=$_POST["address1"];
$PHONENUM=$_POST["phone"];
$EMAIL1=$_POST["email"];

$sql="UPDATE AddressBook SET AddressID='$IDNUM',F_NAME='$FNAME',L_NAME='$LNAME',ADDRESS='$ADDRESS1',PHONE='$PHONENUM',EMAIL='$EMAIL1' WHERE AddressID='$IDNUM'";



if($conn->query($sql)==TRUE){
echo "Updated record to AddressBook";
}else{
echo "Error adding address.:".$conn->error;
}
$conn->close();
?>