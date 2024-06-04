<?php
$servername="localhost";
$username="jnguyen143";
$password="jnguyen143";
$dbname="jnguyen143";
$IDNUM=$_POST["idinput"];

$conn=new mySqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}

$sql="DELETE FROM AddressBook WHERE AddressID='$IDNUM'";

if($conn->query($sql)==TRUE){
echo "Record deleted from address book.";
}else{
echo "Error deleting record:".$conn->error;
}
$conn->close();
?>
